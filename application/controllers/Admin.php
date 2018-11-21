<?php
class Admin extends CI_Controller
{

// ----- admin signup ------------------------------------------
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
// -----------------------------------------------------------


// ------ admin login -----------------------------------------
    public function login()
    {
        if($this->form_validation->run('admin_login')){
            $email    = $this->input->post('email');
            $password = $this->input->post('password');
           
            $this->load->model('Signup_login_model');
            $id = $this->Signup_login_model->login($email, $password);

            if($id){
                $this->session->set_userdata('id', $id);
                return redirect('Deshbord');
            }
            else{
                $this->session->set_flashdata('msg', 'INVALID EMAIL OR PASSWORD');
                return redirect('admin/login');
            }

        }
        else{
            $this->load->view('admin/login');
        }
        
    }
// --------------------------------------------------------------


// -------admin logout ------------------------------------------
    public function logout()
    {
        $this->session->unset_userdata('id');
        return redirect('admin/login');
    }
// --------------------------------------------------------------






}



?>