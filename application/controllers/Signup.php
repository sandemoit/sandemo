<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('signup_model');
    }

    public function index()
    {
        $email = $this->input->post('email');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == TRUE) {
            // Memeriksa apakah email tidak kosong
            if (!empty($email)) {
                $this->signup_model->save_email($email);

                // Tampilkan pesan sukses dan kembali ke halaman utama
                $this->session->set_flashdata('success', 'Email Anda berhasil didaftarkan!');
            } else {
                // Tampilkan pesan error jika email kosong
                $this->session->set_flashdata('warning', 'Email tidak boleh kosong!');
            }
        } else {
            $this->session->set_flashdata('error', 'Email Anda gagal didaftarkan!');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
}
