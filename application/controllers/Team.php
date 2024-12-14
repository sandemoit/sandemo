<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Team extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Page_model');
        $this->load->model('About_model');
        $this->load->model('Setting_model');
    }
    public function index()
    {
        $data['portfolio'] = $this->Page_model->get_portfolio();
        $data['kportfolio'] = $this->Page_model->get_kategoriPortfolio();
        $data['tim'] = $this->About_model->get_dataUser();
        $data['setting'] = $this->Setting_model->get_setting();
        $data['title'] = 'Team';

        $this->load->view('frontend/layouts/header', $data);
        $this->load->view('frontend/team');
        $this->load->view('frontend/layouts/footer');
    }
}
