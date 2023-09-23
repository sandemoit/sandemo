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

    public function service()
    {
        $data['home'] = $this->Setting_model->get_setting();
        $data['title'] = 'Service';
        $data['setting'] = $this->Setting_model->get_setting();
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/page_header');
        $this->load->view('frontend/service');
        $this->load->view('template/footer');
    }

    public function packetappweb()
    {
        $data['title'] = 'Packet App & Web';
        $data['home'] = $this->Setting_model->get_setting();
        $data['setting'] = $this->Setting_model->get_setting();
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/page_header');
        $this->load->view('frontend/packet-app-web');
        $this->load->view('template/footer');
    }
}
