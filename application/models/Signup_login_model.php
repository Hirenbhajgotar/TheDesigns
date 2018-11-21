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


    public function login($email, $password)
    {
        $query = $this->db->where(['email' => $email, 'password' => $password])
                          ->get('users');

                        if($query->num_rows()){
                            // echo '<pre>';
                            // print_r($query->row()->id);
                            // echo '</pre>';
                            // exit;
                            return $query->row()->id;
                        }
                        else{
                            return false;
                        }

    }



}



?>