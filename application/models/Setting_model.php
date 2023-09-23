<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting_model extends CI_Model
{
    public function get_brand()
    {
        return $this->db->get('brand')->result_array();
    }

    public function get_setting()
    {
        return $this->db->get('setting')->row_array();
    }

    public function add_brand($data)
    {
        $this->db->insert('brand', $data);
    }

    public function delete_brand($where, $table)
    {
        $this->db->delete($table, $where);
    }

    public function update_setting($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function get_kategori_blog()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('kategori_blog')->result_array();
    }

    public function add_kategori_blog($data)
    {
        $this->db->insert('kategori_blog', $data);
    }

    public function delete_kategori_blog($where, $table)
    {
        $this->db->delete($table, $where);
    }

    public function add_kategori_portfolio($data)
    {
        $this->db->insert('kategori_portfolio', $data);
    }

    public function delete_kategori_portfolio($where, $table)
    {
        $this->db->delete($table, $where);
    }

    public function get_kategori_portfolio()
    {
        return $this->db->get('kategori_portfolio')->result_array();
    }

    public function integrasi()
    {
        return $this->db->get('integrasi')->row_array();
    }

    public function update_instegrasi($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
