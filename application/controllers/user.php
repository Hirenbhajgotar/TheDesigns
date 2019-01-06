<?php
class User extends CI_Controller
{
    // public function index()
    // {
    //     if($this->form_validation->run('my_rules')){

    //         $post = $this->input->post();
    //         echo '<pre>';
    //         print_r($post);
    //         echo '</pre>';
    //         exit;
            
    //         $this->load->model('users_model');
    //         if($this->users_model->index($post)){
    //             echo "working";
    //             return redirect('User');

    //         }
    //         else{
    //             echo "false";
    //             return redirect('User');
    //         }
    //     }
    //     else{
    //         $this->load->view('user/homepage');
    //     }
        
    // }

    public function index()
    {
        $this->load->model('Template_model');
        $template_data = $this->Template_model->get_templates();
        // echo "<pre>";
        // print_r($template_data);
        // exit;
        $this->load->view('user/homepage', compact('template_data'));
    }




    // preview template
    public function archive_zip($id)
    {
        $this->load->model('Template_model');
        $zip_file = $this->Template_model->find_template($id);
        
        if(file_exists("zip_upload/".$zip_file->template_zip)){
            
            // remove extension
            $file = basename($zip_file->template_zip, ".zip");
            
            return redirect(base_url("zip_upload/".$file."/index.html"));
        }
    }



    // download template
    public function download_zip($id){
        $this->load->model('Template_model');
        $zip_file = $this->Template_model->find_template($id);

        if (file_exists("zip_upload/".$zip_file->template_zip)) {
            $path = "zip_upload/".$zip_file->template_zip;
            
            // already loaded 'download' hepler
            force_download($path, NULL);
            
            
            
        }

    } 





}



?>