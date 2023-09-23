<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Error_404 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Setting_model');
        $this->load->model('Career_model');
    }

    public function index()
    {
        $this->output->set_status_header('404');
        $data['brand'] = $this->Setting_model->get_brand();
        $data['home'] = $this->Setting_model->get_setting();
        $data['careers'] = $this->Career_model->get_all_careers();
        $data['title'] = '404 Not Found';
        $data['setting'] = $this->Setting_model->get_setting();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/page_header');
        $this->load->view('errors/error', $data);
        $this->load->view('template/footer');
    }
}
