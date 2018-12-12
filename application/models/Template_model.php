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



    public function deletTemplate($id, $template_image, $template_zip)
    {
        $data = $this->db->delete('template',['id'=>$id]);
        unlink(FCPATH."file_upload/".$template_image);
        unlink(FCPATH."zip_upload/".$template_zip);
        return $data;
    }






}


?>