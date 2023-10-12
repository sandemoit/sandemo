<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup_model extends CI_Model
{

    public function save_email($email, $nama)
    {
        $data = array(
            'email' => $email,
            'nama' => $nama
        );
        $this->db->insert('subscriber', $data);
    }
}
