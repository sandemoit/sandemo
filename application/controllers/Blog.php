<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Page_model');
        $this->load->model('Setting_model');
    }

    public function index()
    {
        $data['blog'] = $this->Page_model->get_blog(5, 0);
        $data['setting'] = $this->Setting_model->get_setting();
        $data['title'] = 'Blog';

        $this->load->view('frontend/layouts/header', $data);
        $this->load->view('frontend/blog');
        $this->load->view('frontend/layouts/footer', $data);
    }

    public function kategori()
    {
        $data['setting'] = $this->Setting_model->get_setting();
        $data['category'] = $this->db->get('kategori_blog')->result_array();
        $data['recent'] =  $this->Page_model->get_blog_recent(5, 0)->result_array();
        $data['count'] =  $this->Page_model->get_count_kategori();
        $namakategori = $this->input->get('filter');
        $kategori = $this->Page_model->getKategoriByName($namakategori);
        $data['postingan'] = $this->Page_model->getBlogByKategori($kategori['id']);
        $data['title'] = $kategori['kategori'];

        $this->load->view('frontend/layouts/header', $data);
        $this->load->view('frontend/kategori-blog');
    }

    public function read($category, $slug)
    {
        $data['home'] = $this->Setting_model->get_setting();
        $category_id = $this->db->where('kategori', $category)->get('kategori_blog')->row_array()['id'];
        $data['setting'] = $this->Setting_model->get_setting();
        $data['seo'] = $this->db
            ->where('id_kategori', $category_id)
            ->where('slug', $slug)
            ->get('blog')->row_array();

        $data['title'] = $data['seo']['title'];
        $data['category'] = $this->db->get('kategori_blog')->result_array();
        $data['recent'] =  $this->Page_model->get_blog_recent(5, 0)->result_array();
        $data['count'] =  $this->Page_model->get_count_kategori();

        $data['next_post'] = $this->db
            ->where('blog.id<', $data['seo']['id'])
            ->join('kategori_blog', 'kategori_blog.id=blog.id_kategori', 'left')
            ->order_by('blog.id', 'desc')
            ->get('blog')->row_array();

        $data['previus_post'] = $this->db
            ->join('kategori_blog', 'kategori_blog.id=blog.id_kategori', 'left')
            ->where('blog.id>', $data['seo']['id'])
            ->get('blog')->row_array();

        $this->load->view('frontend/blog-detail', $data);
    }

    public function sharePost($category, $slug)
    {
        $socialMedia = $this->input->get('social_media');

        $validSocialMedia = ['facebook', 'twitter', 'whatsapp'];
        if (!in_array($socialMedia, $validSocialMedia)) {
            redirect('blog/read' . $category, $slug);
            return;
        }

        switch ($socialMedia) {
            case 'facebook':
                $facebookAppId = '769512741585393'; // Replace with your Facebook App ID
                $shareUrl = 'https://www.facebook.com/dialog/share?app_id=' . $facebookAppId . '&display=popup&href=' . urlencode(base_url(uri_string()));
                break;
            case 'twitter':
                $shareUrl = 'https://twitter.com/intent/tweet?url=' . urlencode(base_url(uri_string()));
                break;
            case 'whatsapp':
                $shareUrl = 'whatsapp://send?text=' . urlencode(base_url(uri_string()));
                break;
        }

        redirect($shareUrl);
    }
}
