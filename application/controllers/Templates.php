<?php
class Templates extends CI_Controller
{
    public function templateView($id)
    {
        $this->load->model('Template_model');
        $result = $this->Template_model->find_template($id);
        $this->load->view('user/template_preview', ['template_data'=> $result]);
        
    }

    









    
}




?>