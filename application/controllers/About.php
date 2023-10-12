<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('About_model');
        $this->load->model('Setting_model');
    }
    public function index()
    {
        $data['pimpinan'] = $this->About_model->get_dataUser();
        $data['brand'] = $this->Setting_model->get_brand();
        $data['setting'] = $this->Setting_model->get_setting();
        $data['title'] = 'Tentang Kami';

        $this->load->view('frontend/layouts/header', $data);
        $this->load->view('frontend/about');
        $this->load->view('frontend/layouts/footer');
    }
}
