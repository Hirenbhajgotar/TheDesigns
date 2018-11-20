<?php
class User extends CI_Controller
{
    public function index()
    {
        if($this->form_validation->run('my_rules')){

            $post = $this->input->post();
            
            $this->load->model('users_model');
            if($this->users_model->index($post)){
                echo "working";
                return redirect('User');

            }
            else{
                echo "false";
                return redirect('User');
            }
        }
        else{
            $this->load->view('user/homepage');
        }
        
    }
}



?>