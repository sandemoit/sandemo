<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Admin_model');
        $this->load->model('Karir_model');
        $this->load->model('Setting_model');
        $this->load->model('Whatsapp_model', 'wa');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('user_role')->row_array();

        $this->db->select_sum('total');
        $data['total_user'] = $this->db->query('select * from user')->num_rows();
        $data['total_portfolio'] = $this->db->query('select * from portfolio')->num_rows();
        $data['total_blog'] = $this->db->query('select * from blog')->num_rows();
        $data['total_brand'] = $this->db->query('select * from brand')->num_rows();

        $this->load->view('template_auth/header', $data);
        $this->load->view('template_auth/topbar', $data);
        $this->load->view('template_auth/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template_auth/footer');
    }

    public function role()
    {
        $data['title'] = 'Role Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $this->db->where('id !=', 1);

        $this->form_validation->set_rules('role', 'Role', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template_auth/header', $data);
            $this->load->view('template_auth/topbar', $data);
            $this->load->view('template_auth/sidebar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('template_auth/footer');
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role', true)]);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">New role added!</div>');
            redirect('admin/admin/role');
        }
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('template_auth/header', $data);
        $this->load->view('template_auth/topbar', $data);
        $this->load->view('template_auth/sidebar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('template_auth/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Access Changed!</div>');
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $role = $this->input->post('role');

        $data = array(
            'id' => $id,
            'role' => $role
        );

        $this->db->where('id', $id);
        $this->db->update('user_role', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Success edit data!</div>');
        redirect('admin/admin/role');
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->Admin_model->delete($where, 'user_role');
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Success delete role!</div>');
        redirect('admin/admin/role');
    }

    public function userdelete($id)
    {
        $where = array('id' => $id);
        $this->Admin_model->delete($where, 'user');
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Success delete account!</div>');
        redirect('admin/admin/data');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Developer';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->db->where('id !=', 1);
        $data['role'] = $this->Admin_model->get_role();

        $this->form_validation->set_rules('name', 'Nama', 'trim|required', [
            'required' => 'Nama tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', [
            'required' => 'Email tidak boleh kosong!',
            'is_unique' => 'Email ini sudah digunakan user lain!',
            'valid_email' => 'Email tidak valid!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[4]', [
            'required' => 'Password tidak boleh kosong!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('role_id', 'Level User', 'trim|required', [
            'required' => 'Level User harus di pilih!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template_auth/header', $data);
            $this->load->view('template_auth/topbar', $data);
            $this->load->view('template_auth/sidebar', $data);
            $this->load->view('admin/tambah', $data);
            $this->load->view('template_auth/footer');
        } else {

            $name = $this->input->post('name', true);
            $email = $this->input->post('email', true);
            $role = $this->input->post('role_id', true);

            $data = [
                'name' => $name,
                'email' => $email,
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
                'role_id' => $role,
                'is_active' => 1,
                'date_created' => time()
            ];

            // jika validasi lolos
            $this->Admin_model->tambahDeveloper($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat! data Developer berhasil ditambahkan...</div>
            ');
            redirect('admin/admin/tambah');
        }
    }

    public function data()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['data'] = $this->Admin_model->get_data();
        $data['title'] = 'Data Developer';

        $data['role'] = [
            1 => '<span class="label label-warning">Founder CEO</span>',
            2 => '<span class="label label-success">Developer</span>',
            3 => '<span class="label label-info">Admin</span>',
        ];

        $this->load->view('template_auth/header', $data);
        $this->load->view('template_auth/topbar', $data);
        $this->load->view('template_auth/sidebar', $data);
        $this->load->view('admin/data', $data);
        $this->load->view('template_auth/footer');
    }

    public function kandidat()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kandidat'] = $this->Karir_model->get_kandidat();
        $data['title'] = 'Data Kandidat';

        $this->load->view('template_auth/header', $data);
        $this->load->view('template_auth/topbar', $data);
        $this->load->view('template_auth/sidebar', $data);
        $this->load->view('kandidat/data', $data);
        $this->load->view('template_auth/footer');
    }

    public function verifikasi_kandidat($id)
    {
        // Update status kandidat menjadi "Sudah Verifikasi"
        $data = array(
            'status' => 'Sudah Verifikasi'
        );
        $this->db->where('id', $id);
        $this->db->update('kandidat', $data);

        $no_wa = $this->Karir_model->get_no_wa_by_id($id);

        // Kirim pesan ke nomor WhatsApp
        $this->send_message($no_wa, "*Selamat!* Anda dinyatakan lulus seleksi di *PT. Sandemo Indo Teknologi*.\n"
            . "Silahkan melakukan daftar akun SANDEMO di https://sandemoindoteknologi.co.id/admin/auth/registration");

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Selamat! Kandidat berhasil diverifikasi</div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    private function send_message($no_wa, $message) //query whatsapp gateway
    {
        $this->wa->send_message($no_wa, $message);
    }

    // public function userActive()
    // {
    //     $user_id = $this->input->post('userId');

    //     $data = [
    //         'id' => $user_id
    //     ];

    //     $result = $this->db->get_where('user', $data);

    //     if ($result->num_rows() < 1) {
    //         $this->db->insert('user', $data);
    //     } else {
    //         $this->db->delete('user', $data);
    //     }

    //     $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Access Changed!</div>');
    // }
}
