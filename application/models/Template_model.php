<?php
class Template_model extends CI_Model
{
    public function add_template($array)
    {
        
        // $my_file = $this->db->insert_batch('template', $data);
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // exit;

        return $this->db->insert('template', $array);

    }

// fetch all field data from "template tabel" and 
// return to the "controller/deshbord/template" 
    public function template_list()
    {
        $q = $this->db->select()
                      ->from('template')
                      ->get();
                      return $q->result();
                      
    }



}


?>