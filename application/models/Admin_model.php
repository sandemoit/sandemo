<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    function get_data()
    {
        $query = "SELECT *
                    FROM `user_role` JOIN `user`
                    ON `user_role`.`id` = `user`.`role_id`
        ";

        return $this->db->query($query)->result_array();
    }

    public function tambahDeveloper($data)
    {
        $this->db->insert('user', $data);
    }

    function delete($where, $table)
    {
        $this->db->delete($table, $where);
    }

    public function get_role()
    {
        return $this->db->get('user_role')->result_array();
    }
}
