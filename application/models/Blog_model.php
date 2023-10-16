<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_model extends CI_Model
{
    public function countAllBlog()
    {
        return $this->db->get('blog')->num_rows();
    }
}
