<?php
class Sitemap_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function create()
    {
        $this->db->select('blog.date_created, blog.slug, kategori_blog.kategori, blog.id');
        $this->db->from('blog');
        $this->db->join('kategori_blog', 'blog.id_kategori=kategori_blog.id', 'left');
        $this->db->order_by('blog.id', "ASC");
        $query = $this->db->get();
        return $query->result();
    }
}
