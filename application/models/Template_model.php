<?php
class Template_model extends CI_Model
{
    public function add_template($array)
    {
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // exit;

        // $my_file = $this->db->insert_batch('template', $data);
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // exit;

        return $this->db->insert('template', $array);

    }
}


?>