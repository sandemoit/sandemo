<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Setting_model');
        $this->load->model('Karir_model');
        $this->load->model('Whatsapp_model', 'wa');
    }

    public function index()
    {
        $data['home'] = $this->Setting_model->get_setting();
        $data['karir'] = $this->Karir_model->get_all_karir();
        $data['setting'] = $this->Setting_model->get_setting();
        $data['title'] = 'Karir';

        $this->load->view('frontend/layouts/header', $data);
        $this->load->view('frontend/karir');
        $this->load->view('frontend/layouts/footer', $data);
    }

    public function apply($encoded_name_job)
    {
        $name_job = urldecode($encoded_name_job);

        $data['home'] = $this->Setting_model->get_setting();
        $data['setting'] = $this->Setting_model->get_setting();
        $data['brand'] = $this->Setting_model->get_brand();
        $karir_details = $this->Karir_model->get_karir_details($name_job);

        if ($karir_details !== null) {
            $today = date('Y-m-d');
            $isClosed = ($today > $karir_details['limit_job']);

            if ($isClosed) {
                // Tampilkan pesan bahwa pendaftaran sudah ditutup
                $data['title'] = 'Pendaftaran Ditutup';
                $this->load->view('frontend/layouts/header', $data);
                $this->load->view('errors/notfound_karir', $data);
                $this->load->view('frontend/layouts/header', $data);
            } else {
                $data['karir'] = $karir_details;
                $data['title'] = $karir_details['name_job'];

                $this->load->view('frontend/layouts/header', $data);
                $this->load->view('frontend/karir_detail', $data);
                $this->load->view('frontend/layouts/footer', $data);
            }
        } else {
            $data['title'] = 'Karir Not Found';
            $this->load->view('frontend/layouts/header', $data);
            $this->load->view('errors/notfound_karir', $data);
            $this->load->view('frontend/layouts/footer', $data);
        }
    }

    public function submit_form()
    {
        $config['upload_path'] = './assets/files/cv';  // Path untuk menyimpan file CV
        $config['allowed_types'] = 'pdf|doc|docx';  // Tipe file yang diizinkan (PDF, DOC, DOCX)
        $config['max_size'] = 8192;  // Ukuran maksimum file (dalam kilobyte)
        $this->upload->initialize($config);
        if ($this->upload->do_upload('cv_file')) {
            $cv_file = $_FILES['cv_file']['name']; // Mengambil nama file

            $no_wa = $this->input->post('whatsapp', true);
            $no_wa = substr_replace($no_wa, '62', 0, 1); // mengubah "08" menjadi "62"
            $no_wa = str_replace('-', '', $no_wa); // menghapus karakter "-" (opsional)

            $data = [
                'id_job' => $this->input->post('id', true),
                'full_name' => $this->input->post('full_name', true),
                'date_birth' => $this->input->post('date_birth', true),
                'place_birth' => $this->input->post('place_birth', true),
                'email' => $this->input->post('email', true),
                'whatsapp' => $no_wa,
                'religion' => $this->input->post('religion', true),
                'university' => $this->input->post('university', true),
                'education_stage' => $this->input->post('education_stage', true),
                'address' => $this->input->post('address', true),
                'cv' => basename($cv_file),
                'status' => 'Belum Verifikasi',
                'time' => time()
            ];
            // simpan data
            $result = $this->db->insert('kandidat', $data);

            // send message using cURL
            $this->send_message($no_wa, "*Assalamualaikum, Hello!*\n"
                . "Terima kasih telah mengisi formulir atau melamar pekerjaan di perusahaan"
                . " *PT. Sandemo Indo Teknologi*. Kami akan segera memproses permohonan Anda. Mohon tunggu konfirmasi selanjutnya melalui email atau whatsapp ini. Terima kasih!\n\n"
                . "https://sandemoindoteknologi.co.id");

            if ($result) {
                $this->session->set_flashdata('success', 'Berhasil lamar pekerjaan!');
            }
        } else {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', $error);
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    private function send_message($no_wa, $message)
    {
        $this->wa->send_message($no_wa, $message);
    }
}
