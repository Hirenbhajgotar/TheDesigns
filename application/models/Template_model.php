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
        return $data;
    }


    // fetch whole row accourding to perticuler 'id' for update template
    public function find_template($id)
    {
        $q = $this->db->select(['template_header', 'template_image', 'template_zip', 'id', 'upload_at', 'update_at'])
                      ->where('id',$id)
                      ->get('template');
                      return $q->row();
                    //   echo "<pre>";
                    //   print_r($q->row());
                    //   exit;
    }


    // update template data
    public function template_update($id, $data)
    {
        return $this->db->where('id', $id)
                        ->update('template', $data);
                        
    }
    


    public function get_templates()
    {
        $query = $this->db->select()
                          ->from('template')
                          ->get();
                          return $query->result();
    }








}


?>