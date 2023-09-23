<?php
class Sitemap extends CI_Controller
{
    public function index()
    {
        $this->load->model('sitemap_model');
        $this->load->helper('url');
        $data['article'] = $this->sitemap_model->create();
        $this->load->view('sitemap_view', $data);
    }
}
