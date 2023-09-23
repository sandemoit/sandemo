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
        $data['tim'] = $this->About_model->get_dataUser();
        $data['home'] = $this->Setting_model->get_setting();
        $data['brand'] = $this->Setting_model->get_brand();
        $data['setting'] = $this->Setting_model->get_setting();
        $data['title'] = 'About';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/page_header');
        $this->load->view('frontend/about', $data);
        $this->load->view('template/footer');
    }
}
