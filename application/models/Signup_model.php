<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup_model extends CI_Model
{

    public function save_email($email)
    {
        $data = array(
            'email' => $email
        );
        $this->db->insert('newsletter', $data);
    }
}
