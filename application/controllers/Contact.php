<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Setting_model');
    }

    public function index()
    {
        $data['home'] = $this->Setting_model->get_setting();
        $data['title'] = 'Kontak';
        $data['setting'] = $this->Setting_model->get_setting();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/page_header');
        $this->load->view('frontend/contact');
        $this->load->view('template/footer');
    }

    public function send()
    {
        // validate form data
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('whatsapp', 'WhatsApp', 'trim|required|numeric');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
        $this->form_validation->set_rules('pesan', 'Message', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            // handle form validation errors
            $this->session->set_flashdata('error', validation_errors());
            redirect('contact');
        } else {
            $name = trim($this->input->post('name', true));
            $email = trim($this->input->post('email', true));
            $no_wa = trim($this->input->post('whatsapp', true));
            $subject = trim($this->input->post('subject', true));
            $pesan = trim($this->input->post('pesan', true));

            $no_wa = substr_replace($no_wa, '62', 0, 1); // mengubah "08" menjadi "62"
            $no_wa = str_replace('-', '', $no_wa); // menghapus karakter "-" (opsional)

            // insert db contact
            $save = [
                'name' => $name,
                'email' => $email,
                'whatsapp' => $no_wa,
                'subject' => $subject,
                'pesan' => $pesan,
                'aksi' => 0
            ];
            $this->db->insert('contact', $save);

            // insert db newsletter email
            $this->load->model('Signup_model');
            $this->Signup_model->save_email($email);

            // send message using cURL
            $response = $this->send_message($no_wa, "Terimakasih $name sudah mengisi form. Mohon bersedia tunggu balasan dari admin maksimal 1x24 Jam.\n\n-sit");

            // handle cURL response
            if (strpos($response, 'OK') !== FALSE) {
                $this->session->set_flashdata('error', 'Failed to send message.');
            } else {
                $this->session->set_flashdata('success', 'Message sent successfully.');
            }

            redirect('contact');
        }
    }

    private function send_message($no_wa, $message)
    {
        $token = $this->Setting_model->integrasi();
        $ch = curl_init();
        $data = array(
            'recipient_type' => 'individual',
            'to' => $no_wa,
            'type' => 'text',
            'text' => array(
                'body' => $message
            )
        );
        $json_data = json_encode($data);

        curl_setopt_array($ch, array(
            CURLOPT_URL => $token['url_api'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $json_data,
            CURLOPT_HTTPHEADER => array(
                'Authorization: ' . $token['wagw']
            ),
        ));

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            // handle cURL error
            $response = curl_error($ch);
        }

        curl_close($ch);

        return $response;
    }

    public function sendwa() //WhatsApp redirect
    {
        // Mengambil nomor HP (nohp) dari database
        $this->db->select('nohp');
        $query = $this->db->get('setting');
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $nowa = $row->nohp;
        }

        $name = urlencode($this->input->post('name', true));
        $email = urlencode($this->input->post('email', true));
        $subject = urlencode('Consultation');
        $pesan = urlencode($this->input->post('pesan', true));

        $this->load->model('Signup_model');
        $dataemail = str_replace('%40', '@', $email);
        $this->Signup_model->save_email($dataemail);

        $message = "Name: " . urlencode($name) . "%0ASubject: " . urlencode($subject) . "%0APesan: " . urlencode($pesan);
        $url = 'https://api.whatsapp.com/send?phone=' . $nowa . '&text=' . $message;

        // Send data using cURL and redirect using HTTP header
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_exec($ch);
        curl_close($ch);

        header("Location: $url");
    }
}
