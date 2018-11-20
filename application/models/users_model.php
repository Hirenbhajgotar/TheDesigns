<?php
class Users_model extends CI_Model
{
    public function index($data)
    {
        return $this->db->insert('users', $data);

    }
}





?>