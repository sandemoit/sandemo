<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Setting_model');
        $this->load->helper(array('url', 'download'));
    }

    public function webdevelopment()
    {
        $data['home'] = $this->Setting_model->get_setting();
        $data['setting'] = $this->Setting_model->get_setting();
        $data['title'] = 'Web Development';

        $this->load->view('frontend/layouts/header', $data);
        $this->load->view('frontend/web-development');
        $this->load->view('frontend/layouts/footer');
    }
}
