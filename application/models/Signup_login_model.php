<?php
class Signup_login_model extends CI_Model
{
    public function signup($data)
    {
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // exit;
        return $this->db->insert('users', $data);
    }
}



?>