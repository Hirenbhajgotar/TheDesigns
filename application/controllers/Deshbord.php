<?php
class Deshbord extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (! $this->session->userdata('id')) {
            return redirect('admin/login');
        }
    }

    public function index()
    {
        $this->load->view('admin/deshbord');
    }


    // public function template()
    // {
    //     $config = [
    //         'upload_path' => './file_upload/',
    //         'allowed_types' => 'png|jpg|jpeg|zip'
    //     ];
    //     $this->load->library('upload', $config);
    //     $this->upload->initialize($config);
        
    //     if($this->upload->do_upload('template')){
    //         $data = $this->upload->data();
    //         // echo '<pre>';
    //         // print_r($data);
    //         // echo '</pre>';
    //         // exit;


    //         $files = $_FILES;
    //         echo '<pre>';
    //         print_r($files);
    //         echo '</pre>';
    //         exit;
    //     }
    //     else{
    //         $error_msg = $this->upload->display_errors();

    //         $this->load->view('admin/template', compact('error_msg'));
    //     }
    // }

    public function template()
    {
        
        // if ($this->input->post()) {
        //     $files = $_FILES;
        //     echo '<pre>';
        //     print_r($files);
        //     echo '</pre>';
        //     exit;
        // }
        // else{
        //     $this->load->view('admin/template');
        // }

        // $config = [
        //     'upload_path' => './file_upload/',
        //     'allowed_types' => 'png|jpg|jpeg|zip'
        // ];
        // $this->load->library('upload', $config);
        // if (! $this->upload->do_upload('template')) {
        //     $error_msg = $this->upload->display_errors();
        //     $this->load->view('admin/template', compact($error_msg));
        // }
        // else{
        //     // $files = $_FILES['template']['name'];
        //     $cc = count($_FILES['template']['name']);
        //     echo '<pre>';
        //     print_r($cc);
        //     echo '</pre>';
        //     exit;

        
        $this->load->view('admin/template');
       
        



    }
     
    public function add_template()
    {
       
        $this->load->view('admin/add_template');

    }

    

    public function add_template_data()
    {
        // template image upload
        $config = [
            'upload_path' => './file_upload',
            'allowed_types' => 'jpg|png|jpeg',
            'max_size'=>'0',
            'min_size'=>'0',
            'remove_space'=>TRUE
        ];

        $this->load->library('upload', $config, 'template_image_upload');
        $this->template_image_upload->initialize($config);
        $template_img = $this->template_image_upload->do_upload('template_image');


        // template zip upload
        $config = [
            'upload_path' => './zip_upload',
            'allowed_types' => 'jpg|png|jpeg',
            'max_size'=>'0',
            'min_size'=>'0',
            'remove_space'=>TRUE
        ];

        $this->load->library('upload', $config, 'template_zip_upload');
        $this->template_zip_upload->initialize($config);
        $template_zip = $this->template_zip_upload->do_upload('template_zip');
       

        if ( $this->form_validation->run('dummy_rules') && $template_img && $template_zip) {
            
            $post = $this->input->post();
            // echo '<pre>';
            // print_r($post);
            // echo '</pre>'.'<br>';
            // exit;



            $temp_img = $this->template_image_upload->data();
            
            $temp_img_path = $config['upload_path'].'/'.$temp_img['file_name'];
            // echo '<pre>';
            // print_r($temp_img_path);
            // echo '</pre>'.'<br>';
            // exit;



            $temp_zip = $this->template_zip_upload->data();

            $temp_zip_path = $config['upload_path'].'/'.$temp_zip['file_name'];
            // echo '<pre>';
            // print_r($temp_zip_path);
            // echo '</pre>';
            // exit;


            $post['template_image'] = $temp_img_path;
            $post['template_zip'] = $temp_zip_path;

            // echo '<pre>';
            // print_r($post);
            // echo '</pre>';
            // exit;


            $this->load->model('Template_model');
            if($this->Template_model->add_template($post)){
                // echo "template added sucessfully";
                $this->session->set_flashdata('success','data successfully inserted into database');
                return redirect('Deshbord/template');
            }
            else{
                // echo "template cant inserted! try again";
                $this->session->set_flashdata('error','data cant successfully inserted into database');
                return redirect('Deshbord/template');
            }
            
 


        }
        else{
            // [
            //     'msg1' =>  '$this->template_zip_upload->display_errors()',
            //     'msg2' =>  '$this->template_image_upload->display_errors()'
            // ];
            $err_zip = $this->template_zip_upload->display_errors();
            $err_img = $this->template_image_upload->display_errors();
            
            $this->load->view('admin/template', compact('err_zip', 'err_img'));
        }
    }

}




?>