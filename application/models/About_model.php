<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_model extends CI_Model
{
    public function get_dataUser()
    {
        $query = "SELECT *
                    FROM `user_role` JOIN `user`
                    ON `user_role`.`id` = `user`.`role_id`
        ";

        return $this->db->query($query)->result_array();
    }
}
