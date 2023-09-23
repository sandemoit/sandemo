<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portfolio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Page_model');
        $this->load->model('Setting_model');
    }

    public function index()
    {
        $data['portfolio'] = $this->Page_model->get_portfolio(5);
        $data['kportfolio'] = $this->Page_model->get_kategoriPortfolio();
        $data['home'] = $this->Setting_model->get_setting();
        $data['brand'] = $this->Setting_model->get_brand();
        $data['setting'] = $this->Setting_model->get_setting();
        $data['title'] = 'Portfolio';

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/page_header');
        $this->load->view('frontend/portfolio');
        $this->load->view('template/footer');
    }

    public function compro()
    {
        $filePath = 'assets/frontend/compro.pdf';
        $fileName = 'Company_profile_Sandemoindoteknologi.pdf';

        // Set headers
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $fileName . '"');

        // Read the file and output it to the browser
        readfile($filePath);
    }
}
