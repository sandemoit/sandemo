<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Setting_model');
        $this->load->model('Page_model');
    }
    public function index()
    {
        $data['brand'] = $this->Setting_model->get_brand();
        $data['setting'] = $this->Setting_model->get_setting();
        $data['portofolio'] = $this->Page_model->get_portfolio(9, 0);
        $data['blog'] = $this->Page_model->get_blog(3, 0);
        $data['title'] = $data['setting']['judul_website'];

        $this->load->view('frontend/layouts/header', $data);
        $this->load->view('frontend/home');
        $this->load->view('frontend/layouts/footer');
    }
}
