<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->model('User_model');
        $this->load->model('Setting_model');
    }

    public function index()
    {
        if ($this->session->email) {
            if ($this->session->userdata('role_id') == 1) {
                redirect('admin/admin'); // apabila sudah login masuk ke role admin/dashboard
            } else {
                redirect('admin/user'); // apabila sudah login masuk ke role user/myprofile
            }
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'SANDEMO Login';
            $this->load->view('template_auth/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('template_auth/auth_footer');
        } else {
            // validasi sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        //jika user ada
        if ($user) {
            //jika user active
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    // Cek apakah sudah lewat 30 hari dari waktu kedaluwarsa login sebelumnya
                    $last_login_expiry = $user['otp_expiry']; // Ambil waktu kedaluwarsa login sebelumnya dari database
                    $current_time = date('Y-m-d H:i:s'); // Ambil waktu sekarang

                    if ($last_login_expiry && strtotime($current_time) < strtotime($last_login_expiry)) {
                        // User masih dalam periode 30 hari terakhir, tidak perlu mengirimkan OTP baru
                        // Simpan email ke dalam session
                        $data = [
                            'email' => $user['email'],
                            'role_id' => $user['role_id']
                        ];
                        $this->session->set_userdata($data);
                        if ($user['role_id'] == 1) {
                            redirect('admin/admin');
                        } else {
                            redirect('admin/user');
                        }
                    } else {
                        // Generate OTP code and set the expiry time (e.g., 5 minutes from now)
                        $otp_code = rand(100000, 999999);
                        $otp_expiry = date('Y-m-d H:i:s', strtotime('+10 minutes'));

                        // Simpan OTP ke database
                        $this->Auth_model->update_otp($user['email'], $otp_code, $otp_expiry);

                        // Kirim OTP melalui WhatsApp Gateway
                        $this->_send_otp_via_whatsapp('62' . $user['nohp'], $otp_code, $user); // Ganti nomor telepon dengan nomor yang sesuai

                        // Simpan email ke dalam session
                        $user_session_data = array(
                            'email' => $user['email']
                        );
                        $this->session->set_userdata($user_session_data);

                        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">OTP has been sent to your WhatsApp number. Please enter the OTP to complete the login.</div>');
                        redirect('admin/auth/verify_otp');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Wrong password!</div>');
                    redirect('admin/auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">This email has not been activated!</div>');
                redirect('admin/auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Email is not registered</div>');
            redirect('admin/auth');
        }
    }

    private function _send_otp_via_whatsapp($phone_number, $otp_code, $user)
    {
        $token = $this->Setting_model->integrasi();
        $whatsapp_gateway_url = 'http://localhost:3001/api/v1/messages'; // Ganti dengan URL WhatsApp Gateway Anda
        $data = array(
            'recipient_type' => 'individual',
            'to' => $phone_number,
            'type' => 'text',
            'text' => array(
                'body' => "SANDEMOINDOTEKNOLOGI.CO.ID | Halo " . $user['name'] . ", Your OTP code is [" . $otp_code . "]\n\nThe code will expire in 10 minutes, If you have not tried to login, ignore this message."
            )
        );

        $headers = array(
            'Authorization: Bearer ' . $token['wagw'] // Ganti dengan token WhatsApp Gateway Anda
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $whatsapp_gateway_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_ENCODING, '');
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    public function verify_otp()
    {
        $data['title'] = 'Verify OTP';
        $this->form_validation->set_rules('otp_code', 'OTP Code', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template_auth/auth_header', $data);
            $this->load->view('auth/verify_otp', $data);
            $this->load->view('template_auth/auth_footer');
        } else {
            $otp_code = $this->input->post('otp_code', true);
            $user_id = $this->session->userdata('email'); // Pastikan Anda telah mengatur data user_id dalam session saat mengirimkan OTP

            if (!$user_id) {
                // Jika user_id tidak ada di session, pengguna belum memasukkan email dan password, alihkan kembali ke halaman login
                $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">You have not logged in yet</div>');
                redirect('admin/auth');
            }

            // Dapatkan data pengguna berdasarkan user_id
            $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            if ($user && $user['otp_code'] == $otp_code && $user['otp_expiry'] > date('Y-m-d H:i:s')) {
                // OTP benar dan masih berlaku
                // Lakukan tindakan yang sesuai, seperti menandai pengguna telah masuk, dll.
                $data = [
                    'email' => $user['email'],
                    'role_id' => $user['role_id']
                ];

                $this->session->set_userdata($data);
                if ($user->role_id != 1) {
                    redirect('admin/admin'); // Redirect ke halaman dashboard admin jika role_id adalah 1
                } else {
                    redirect('admin/user'); // Redirect ke halaman dashboard user jika role_id bukan 1
                }
            } else {
                // OTP salah atau telah kedaluwarsa
                $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Invalid or expired OTP code. Please try again.</div>');
                redirect('admin/auth/verify_otp'); // Redirect kembali ke halaman verifikasi OTP
            }
        }
    }

    public function resend_otp()
    {
        $user_email = $this->session->userdata('email');

        if (!$user_email) {
            // Jika user belum login atau data email tidak tersedia di session, kembalikan ke halaman login
            redirect('admin/auth');
        }

        // Dapatkan data pengguna berdasarkan email
        $user = $this->db->get_where('user', ['email' => $user_email])->row_array();

        if ($user && $user['is_active'] == 1) {
            // Generate OTP code and set the expiry time (e.g., 5 minutes from now)
            $otp_code = rand(100000, 999999);
            $otp_expiry = date('Y-m-d H:i:s', strtotime('+10 minutes'));

            // Simpan OTP ke database
            $this->Auth_model->update_otp($user_email, $otp_code, $otp_expiry);

            // Kirim ulang OTP melalui WhatsApp Gateway
            $this->_send_otp_via_whatsapp('62' . $user['nohp'], $otp_code, $user); // Ganti nomor telepon dengan nomor yang sesuai

            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">OTP has been sent to your WhatsApp number. Please enter the OTP to complete the login.</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">User is not active or email is not registered</div>');
        }

        redirect('admin/auth/verify_otp');
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('admin/user');
        }
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Konfirm Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'SANDEMO Registration';
            $this->load->view('template_auth/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('template_auth/auth_footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1', true), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0,
                'date_created' => time()
            ];

            //siapkan token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);

            $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Congratulation! your account has been created. Please activate your account</div>');
            redirect('admin/auth');
        }
    }

    // public function success()
    // {
    //     if (!$this->session->userdata('email')) {
    //         redirect('admin/auth');
    //     } else {
    //         $data['title'] = 'Sent Email Verification';
    //         $this->load->view('admin/auth/success');
    //     }
    // }

    private function _sendEmail($token, $type)
    {
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => EMAIL_HOST,
            'smtp_port' => EMAIL_PORT,
            'smtp_user' => EMAIL_ALAMAT,
            'smtp_pass' => EMAIL_PASSWORD,
            'crlf' => "\r\n",
            'newline' => "\r\n",
            'mailtype' => 'html'
        );

        $this->load->library('email', $config);


        $this->email->from(EMAIL_ALAMAT, EMAIL_NAMA);
        $this->email->to($this->input->post('email'));

        $url = base_url() . 'admin/auth/' . ($type == 'verify' ? 'verify' : 'resetpassword') . '?email=' . $this->input->post('email') . '&token=' . urlencode($token);
        $this->email->subject($type == 'verify' ? 'Account Verification' : 'Reset Password');
        $this->email->message('Click this link to ' . ($type == 'verify' ? 'verify your account' : 'reset your password') . ': <a href="' . $url . '">' . ($type == 'verify' ? 'Activate' : 'Reset Password') . '</a>');

        if ($this->email->send()) {
            return true;
        } else {
            $error = $this->email->print_debugger();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">'
                . $error . '</div>
            ');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) { // 1 day
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">' . $email . ' has been activated! Please login.</div>');
                    redirect('admin/auth');
                } else {
                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation failed! Token expired.</div>');
                    redirect('admin/auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation failed! Wrong token.</div>');
                redirect('admin/auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation failed! Wrong email.</div>');
            redirect('admin/auth');
        }
    }

    public function forgotPassword()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Forgot Password';
            $this->load->view('template_auth/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('template_auth/auth_footer');
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();

            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token, 'forgot');

                $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Please check your email to reset your password!</div>');
                redirect('admin/auth');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Email is not registered or activated!</div>');
                redirect('admin/auth');
            }
        }
    }

    public function changePassword()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect('admin/auth');
        }

        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[4]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[4]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Change Password';
            $this->load->view('template_auth/auth_header', $data);
            $this->load->view('auth/change-password');
            $this->load->view('template_auth/auth_footer');
        } else {
            $password = password_hash($this->input->post('password1', TRUE), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->unset_userdata('reset_email');

            $this->db->delete('user_token', ['email' => $email]);

            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Password has been changed! Please login.</div>');
            redirect('admin/auth');
        }
    }

    public function resetPassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->changePassword();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Reset password failed! Wrong token.</div>');
                redirect('admin/auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Reset password failed! Wrong email.</div>');
            redirect('admin/auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">You have been logout</div>');
        redirect('admin/auth');
    }

    public function blocked()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Access Blocked';
        $this->load->view('auth/blocked', $data);
    }
}
