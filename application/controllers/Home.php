<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Setting_model');
    }
    public function index()
    {
        $data['brand'] = $this->Setting_model->get_brand();
        $data['home'] = $this->Setting_model->get_setting();
        $data['setting'] = $this->Setting_model->get_setting();

        $this->load->view('template/header_home', $data);
        $this->load->view('template/navbar_home');
        $this->load->view('frontend/home');
        $this->load->view('template/footer_home');
    }
}
