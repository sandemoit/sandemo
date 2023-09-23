<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    function get_data()
    {
        return $this->db->get('user');
    }

    public function update_user($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function update_socialmedia($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function get_user_by_id($user_id)
    {
        return $this->db->get_where('user', ['email' => $user_id])->row_array();
    }
}
