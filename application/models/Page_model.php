<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page_model extends CI_Model
{

    // kategori 

    public function get_kategori()
    {
        return $this->db->get('kategori_blog');
    }
    // Portfolio models

    public function get_kategoriPortfolio()
    {
        return $this->db->get('kategori_portfolio')->result_array();
    }

    public function get_portfolio($limit = null, $start = null, $id = null)
    {
        if ($id != null) {
            $this->db->where('portfolio.id', $id);
        }
        $this->db->limit($limit, $start);
        $this->db->select('portfolio.*, kategori_portfolio.kategori, kategori_portfolio.id as kat_id');
        $this->db->join('kategori_portfolio', 'portfolio.id_kategori=kategori_portfolio.id');
        $this->db->order_by('portfolio.id', 'DESC');
        return $this->db->get('portfolio')->result_array();
    }

    function add_portfolio($data)
    {
        // code
        return $this->db->insert('portfolio', $data);
    }
    function edit_portfolio($id, $data)
    {
        // code
        $this->db->set($data, true);
        $this->db->where('id', $id);
        return $this->db->update('portfolio');
    }
    public function delete_portfolio($where, $table)
    {
        $this->db->delete($table, $where);
    }

    // blog models

    public function get_blog($limit = null, $start = null, $id = null)
    {
        if ($id != null) {
            $this->db->where('blog.id', $id);
        }
        $this->db->limit($limit, $start);
        $this->db->select('blog.*, kategori_blog.kategori, kategori_blog.id as kat_id');
        $this->db->join('kategori_blog', 'blog.id_kategori=kategori_blog.id');
        $this->db->order_by('blog.id', 'DESC');
        return $this->db->get('blog')->result_array();
    }

    public function get_blog_recent($limit = null, $start = null, $id = null)
    {
        if ($id != null) {
            $this->db->where('blog.id !=', $id);
        }
        $this->db->limit($limit, $start);
        $this->db->select('blog.*, kategori_blog.kategori, kategori_blog.id as kat_id');
        $this->db->join('kategori_blog', 'blog.id_kategori=kategori_blog.id');
        $this->db->order_by('blog.id', 'DESC');
        return $this->db->get('blog');
    }

    public function get_kategori_blog()
    {
        return $this->db->get('kategori_blog')->result_array();
    }

    public function get_count_kategori()
    {
        $this->db->select('kategori_blog.*, COUNT(blog.id) as total_blog');
        $this->db->from('kategori_blog');
        $this->db->join('blog', 'kategori_blog.id = blog.id_kategori', 'left');
        $this->db->group_by('kategori_blog.id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function delete_blog($where, $table)
    {
        $this->db->delete($table, $where);
    }

    function get_post_by_slug($slug)
    {
        $query = $this->db->query("SELECT * 
                                FROM blog 
                                WHERE slug='$slug'");
        return $query;
    }

    function add_blog($data)
    {
        // code
        return $this->db->insert('blog', $data);
    }
    function edit_blog($id, $data)
    {
        // code
        $this->db->set($data);
        $this->db->where('id', $id);
        return $this->db->update('blog');
    }
}
