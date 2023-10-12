<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Error_404 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Setting_model');
        $this->load->model('Karir_model');
    }

    public function index()
    {
        $this->output->set_status_header('404');
        $data['home'] = $this->Setting_model->get_setting();
        $data['setting'] = $this->Setting_model->get_setting();
        $data['title'] = '404 Not Found';

        $this->load->view('errors/error', $data);
    }
}
