<?php

class User_model extends CI_Model
{
    public function getUser()
    {
        return $this->db->get('user')->result_array();
    }
}
