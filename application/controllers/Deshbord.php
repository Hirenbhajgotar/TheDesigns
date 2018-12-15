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
        
       $this->load->model('Template_model');
       $templates = $this->Template_model->template_list();
        $this->load->view('admin/template',['templates'=>$templates]);
       

    }
     
    public function add_template()
    {
       
        $this->load->view('admin/add_template');

    }

    
    // add template
    public function add_template_data()
    {
        // template image upload
        $config = [
            'upload_path' => './file_upload',
            'allowed_types' => 'jpg|png|jpeg',
            'max_size'=>'20000',
            'min_size'=>'0',
            'remove_space'=>TRUE
        ];

        $this->load->library('upload', $config, 'template_image_upload');
        $this->template_image_upload->initialize($config);
        $template_img = $this->template_image_upload->do_upload('template_image');


        // template zip upload
        $config = [
            'upload_path' => './zip_upload',
            'allowed_types' => 'zip',
            'max_size'=>'20000',
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
            // echo '</pre>';
            // exit;
           
            $temp_img = $this->template_image_upload->data();
            
            // $temp_img_path = $config['upload_path'].'/'.$temp_img['file_name'];
            $temp_img_path = $temp_img['file_name'];
            // $temp_img_path = base_url("file_upload/".$temp_img[file_name]);
           

            $temp_zip = $this->template_zip_upload->data();

            // $temp_zip_path = $config['upload_path'].'/'.$temp_zip['file_name'];
            $temp_zip_path = $temp_zip['file_name'];
            // $temp_zip_path = base_url("zip_upload/".$temp_zip['file_name']);
           
            $post['template_image'] = $temp_img_path;
            $post['template_zip'] = $temp_zip_path;



            $this->load->model('Template_model');
            if($this->Template_model->add_template($post)){
                // echo "template added sucessfully";
                $this->session->set_flashdata('success','DATA SUCCESSFULLY INSERTED');
                return redirect('Deshbord/template');
            }
            else{
                // echo "template cant inserted! try again";
                $this->session->set_flashdata('error','! CANT INSERTED PLEASE TRY AGAIN');
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


// delete template from database
    public function delet_template()
    {
        $id = $this->input->post('id');
        $template_image = $this->input->post('template_image');
        $template_zip = $this->input->post('template_zip');
        
        $this->load->model('Template_model');
        if($this->Template_model->deletTemplate($id, $template_image, $template_zip)){
            $this->session->set_flashdata('success','DELETE TEPMLATE SUCCESSFULLY');
        }
        else{
            $this->session->set_flashdata('error','! CANT DELETE PLEASE TRY AGAIN');
        }
        return redirect('Deshbord/template');
    }

   
    // fetch template row 
    public function update_template($temp_id)
    {
       
        $this->load->model('Template_model');
        $res = $this->Template_model->find_template($temp_id);
        // echo '<pre>';
        // print_r($rr);
        // echo '</pre>';
        // exit;
        $this->load->view('admin/update_template',['templates_data'=>$res]);
        
    }


    // update template
    public function update_temp_data($id)
    {

        // template image configer data
        $config = [
            'upload_path' => './file_upload',
            'allowed_types' => 'jpg|png|jpeg',
            'max_size'=>'20000',
            'min_size'=>'0',
            'remove_space'=>TRUE
        ];

        $this->load->library('upload', $config, 'template_image_update');
        $this->template_image_update->initialize($config);
        $template_img = $this->template_image_update->do_upload('template_image');


        // template zip configer data
        $config = [
            'upload_path' => './zip_upload',
            'allowed_types' => 'zip',
            'max_size'=>'20000',
            'min_size'=>'0',
            'remove_space'=>TRUE
        ];

        $this->load->library('upload', $config, 'template_zip_update');
        $this->template_zip_update->initialize($config);
        $template_zip = $this->template_zip_update->do_upload('template_zip');

        

        if($this->form_validation->run('dummy_rules') && $template_img && $template_zip){
            
            $this->load->model('Template_model');
            $temp = $this->Template_model->find_template($id);
            // remove the old image and zip file form folder
            if($temp->template_image && file_exists("file_upload/".$temp->template_image) && $temp->template_zip && file_exists("zip_upload/".$temp->template_zip)){
                unlink(FCPATH.'file_upload/'.$temp->template_image);
                unlink(FCPATH.'zip_upload/'.$temp->template_zip);

            }

            $post     = $this->input->post();
            $temp_img = $this->template_image_update->data();
            $temp_zip = $this->template_zip_update->data();

            // image path
            $temp_img_path = $temp_img['file_name'];

            // zip path
            $temp_zip_path = $temp_zip['file_name'];

            $post['template_image'] = $temp_img_path;
            $post['template_zip']   = $temp_zip_path;
            
            
            $this->load->model('Template_model');
            if($this->Template_model->template_update($id, $post)){
                $this->session->set_flashdata('success', 'UPDATE TEMPLATE SUCCESSFULLY');
            }
            else{
                $this->session->set_flashdata('error', '! CATN UPDATE PLEASE TRY AGAIN');
            }
            return redirect('Deshbord/template');

        }
        else{
            $err_img = $this->template_image_update->display_errors();
            $err_zip = $this->template_zip_update->display_errors();
            
            $this->load->view('admin/update_template', compact('err_img', 'err_zip'));
        
        }
        


    }




}




?>