<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subscriber extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Signup_model');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        $data = [
            'email' => $this->input->post('email', true),
            'nama' => $this->input->post('nama', true)
        ];

        if ($this->form_validation->run() == true) {
            // Memeriksa apakah data tidak kosong
            if (!empty($data)) {
                $this->db->insert('subscriber', $data);

                // Tampilkan pesan sukses dan kembali ke halaman utama
                $this->session->set_flashdata('success', 'Data Anda berhasil didaftarkan!');
            } else {
                // Tampilkan pesan error jika data kosong
                $this->session->set_flashdata('error', 'Data Anda gagal didaftarkan!');
            }
        } else {
            $this->session->set_flashdata('warning', 'Data harus di isi semua!');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
}
