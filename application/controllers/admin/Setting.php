<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model('Setting_model');
    }

    public function index()
    {
        $data['title'] = 'Setting';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['setting'] = $this->Setting_model->get_setting();
        $data['integrasi'] = $this->Setting_model->integrasi();

        $this->form_validation->set_rules('judul_website', 'Judul Website', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template_auth/header', $data);
            $this->load->view('template_auth/topbar', $data);
            $this->load->view('template_auth/sidebar', $data);
            $this->load->view('setting/index', $data);
            $this->load->view('template_auth/footer');
        } else {

            $id = $this->input->post('id', true);
            $data = [
                'judul_website' => $this->input->post('judul_website', true),
                'slogan_website' => $this->input->post('slogan_website', true),
                'about_hf' => $this->input->post('about_hf', true),
                'about_website' => $this->input->post('about_website', true),
                'alamat' => $this->input->post('alamat', true),
                'nohp' => $this->input->post('nohp', true),
                'facebook' => $this->input->post('facebook', true),
                'instagram' => $this->input->post('instagram', true),
                'gmail' => $this->input->post('gmail', true),
                'linkedin' => $this->input->post('linkedin', true),
            ];

            $where = array(
                'id' => $id
            );

            // jika validasi lolos
            $this->Setting_model->update_setting($where, $data, 'setting');
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Success edit setting!</div>');
            redirect('admin/setting');
        }
    }

    public function brand()
    {
        $data['title'] = 'Brand';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['brand'] = $this->Setting_model->get_brand();

        $this->form_validation->set_rules('brand_name', 'Brand Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template_auth/header', $data);
            $this->load->view('template_auth/topbar', $data);
            $this->load->view('template_auth/sidebar', $data);
            $this->load->view('setting/brand', $data);
            $this->load->view('template_auth/footer');
        } else {
            $brand_name = $this->input->post('brand_name', true);

            // Upload image 
            $config['upload_path']          = FCPATH . './assets/frontend/images/brand/';
            $config['allowed_types']        = 'gif|jpg|png|avif';
            $config['max_size']             = 3000;
            $config['file_name']            = date('dmYhis') . '.png';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $error . '</div>');
            } else {
                $uploaded = $this->upload->data();
            }

            $data = [
                'brand_name' => $brand_name,
                'image' => $uploaded['file_name']
            ];

            // jika validasi lolos
            $this->Setting_model->add_brand($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Success add brand!</div>');
            redirect('admin/setting/brand');
        }
    }

    public function deleteBrand($id)
    {
        $where = array('id' => $id);
        $this->Setting_model->delete_brand($where, 'brand');
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Success delete brand!</div>');
        redirect('admin/setting/brand');
    }

    public function kategori_blog()
    {
        $data['title'] = 'Kategori Blog';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['kategori_blog'] = $this->Setting_model->get_kategori_blog();

        $this->form_validation->set_rules('kategori', 'Kategori Blog Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template_auth/header', $data);
            $this->load->view('template_auth/topbar', $data);
            $this->load->view('template_auth/sidebar', $data);
            $this->load->view('setting/kategori-blog', $data);
            $this->load->view('template_auth/footer');
        } else {
            $kategori = $this->input->post('kategori', true);
            $description = $this->input->post('description', true);

            $kategori = strtolower($kategori);
            $slug = str_replace(' ', '-', $kategori);

            $data = [
                'kategori' => $kategori,
                'slug' => $slug,
                'description' => $description
            ];

            // jika validasi lolos
            $this->Setting_model->add_kategori_blog($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Success add kategori blog!</div>');
            redirect('admin/setting/kategori_blog');
        }
    }

    public function editkategoriBlog()
    {
        $id = $this->input->post('id', true);
        $kategori = $this->input->post('kategori', true);

        $data = [
            'kategori' => $kategori
        ];

        $where = array(
            'id' => $id
        );

        // jika validasi lolos
        $this->db->where($where);
        $this->db->update('kategori_blog', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Success edit kategori blog!</div>');
        redirect('admin/setting/kategori_blog');
    }

    public function deleteKategoriBlog($id)
    {
        $where = array('id' => $id);
        $this->Setting_model->delete_kategori_blog($where, 'kategori_blog');
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Success delete kategori blog!</div>');
        redirect('admin/setting/kategori_blog');
    }

    public function kategori_portfolio()
    {
        $data['title'] = 'Kategori portfolio';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['kategori_portfolio'] = $this->Setting_model->get_kategori_portfolio();

        $this->form_validation->set_rules('kategori', 'Kategori portfolio Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template_auth/header', $data);
            $this->load->view('template_auth/topbar', $data);
            $this->load->view('template_auth/sidebar', $data);
            $this->load->view('setting/kategori-portfolio', $data);
            $this->load->view('template_auth/footer');
        } else {
            $kategori = $this->input->post('kategori', true);

            $data = [
                'kategori' => $kategori
            ];

            // jika validasi lolos
            $this->Setting_model->add_kategori_portfolio($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Success add kategori portfolio!</div>');
            redirect('admin/setting/kategori_portfolio');
        }
    }

    public function editkategoriPortfolio()
    {
        $id = $this->input->post('id', true);
        $kategori = $this->input->post('kategori', true);

        $data = [
            'kategori' => $kategori
        ];

        $where = array(
            'id' => $id
        );

        // jika validasi lolos
        $this->db->where($where);
        $this->db->update('kategori_portfolio', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Success edit kategori portfolio!</div>');
        redirect('admin/setting/kategori_portfolio');
    }

    public function deleteKategoriPortfolio($id)
    {
        $where = array('id' => $id);
        $this->Setting_model->delete_kategori_portfolio($where, 'kategori_portfolio');
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Success delete kategori portfolio!</div>');
        redirect('admin/setting/kategori_portfolio');
    }

    public function doIntegrasi()
    {
        $id = $this->input->post('id');
        $data = [
            'wagw' => $this->input->post('wagw', true),
            'url_api' => $this->input->post('url_api', true),
            'ahu_username' => $this->input->post('ahu_username', true),
            'ahu_password' => $this->input->post('ahu_password', true)
        ];

        $where = array(
            'id' => $id
        );

        // jika validasi lolos
        $this->Setting_model->update_instegrasi($where, $data, 'integrasi');
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Success edit your data!</div>');
        redirect('admin/setting');
    }
}
