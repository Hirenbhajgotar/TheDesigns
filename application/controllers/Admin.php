<?php
class Admin extends CI_Controller
{
    public function Signup()
    {

        if($this->form_validation->run('admin_signup')){
            
            $post = $this->input->post();
            
            $this->load->model('Signup_login_model');
            if($this->Signup_login_model->signup($post)){
                echo "okk";
                return redirect('Admin/Signup');
            }
            else{
                echo "false";
                return redirect('Admin/Signup');
            }
        }
        else{
            $this->load->view('Admin/Signup');
        }
        
    }


    




}



?>