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
            // 'upload_path' => './archive_zip',
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
            // insert date and time into database
            date_default_timezone_set('Asia/Kolkata'); // Defined City For Timezone
            $currentDate =time();
            $datestring = '%d/%M/%Y %h:%i %a';
            $time = time();
            $better_date = mdate($datestring, $time);
            $post['upload_at'] = $better_date;
            
           
            $temp_img = $this->template_image_upload->data();
            
            // $temp_img_path = $config['upload_path'].'/'.$temp_img['file_name'];
            $temp_img_path = $temp_img['file_name'];
            // $temp_img_path = base_url("file_upload/".$temp_img[file_name]);
           

            $temp_zip = $this->template_zip_upload->data();
            
            // $temp_zip_path = $config['upload_path'].'/'.$temp_zip['file_name'];
            $temp_zip_path = $temp_zip['file_name'];
            $temp_zip_full_path = $temp_zip['full_path'];
            // $temp_zip_path = base_url("zip_upload/".$temp_zip['file_name']);
            
            // extract zip file
            $zip_msg = "";
            $zip = new ZipArchive;
            if($zip->open($temp_zip_full_path) === TRUE){
            $zip->extractTo(FCPATH.'zip_upload/');
            $zip->close();
            }
            else{
                $zip_msg = $this->template_zip_upload->display_errors();
            }

            $post['template_image'] = $temp_img_path;
            $post['template_zip'] = $temp_zip_path;



            $this->load->model('Template_model');
            if($this->Template_model->add_template($post)){
                // echo "template added sucessfully";
                $this->session->set_flashdata('success','TEMPLATE INSERTED');
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
            
            $this->load->view('admin/template', compact('err_zip', 'err_img', 'zip_msg'));
        }
    }


// delete template from database
    public function delet_template()
    {
        $id = $this->input->post('id');
        $template_image = $this->input->post('template_image');
        $template_zip = $this->input->post('template_zip');
        
        // get row of data accourding to $id
        $this->load->model('Template_model');
        $del_data = $this->Template_model->find_template($id);

        // remove extension from zip file
        $ext = basename($del_data->template_zip, '.zip');
        
        if($del_data->template_zip && is_dir("zip_upload/".$ext)){
           
            // remove folder in 'zip_upload' directory 
            delete_files("zip_upload/".$ext, true);
            rmdir("zip_upload/".$ext);
           
            // remove zip file from folder
            unlink(FCPATH."file_upload/".$template_image);
            unlink(FCPATH."zip_upload/".$template_zip);

            // delete data from database
            $this->load->model('Template_model');
            if($this->Template_model->deletTemplate($id, $template_image, $template_zip)){
                
                $this->session->set_flashdata('success','TEPMLATE DELETED');
            }
            else{
                $this->session->set_flashdata('error','! CANT DELETE PLEASE TRY AGAIN');
            }
            
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

            // remove extension from zip file
            $ext = basename($temp->template_zip, '.zip');
            $zip_msg = '';
            // remove the old image and zip file form folder
            if($temp->template_image && file_exists("file_upload/".$temp->template_image) && $temp->template_zip && file_exists("zip_upload/".$temp->template_zip) && is_dir("zip_upload/".$ext)){
                
                // remove folder from 'zip_upload' directory before update
                delete_files("zip_upload/".$ext, true);
                rmdir("zip_upload/".$ext);

                // remove image and zip file before update
                unlink(FCPATH.'file_upload/'.$temp->template_image);
                unlink(FCPATH.'zip_upload/'.$temp->template_zip);


                $post     = $this->input->post();
                $temp_img = $this->template_image_update->data();
                $temp_zip = $this->template_zip_update->data();

                // insert date and time into database
                date_default_timezone_set('Asia/Kolkata'); // Defined City For Timezone
                $currentDate =time();
                $datestring = '%d/%M/%Y %h:%i %a';
                $time = time();
                $better_date = mdate($datestring, $time);
                $post['update_at'] = $better_date;
            

                // image path
                $temp_img_path = $temp_img['file_name'];

                // zip path
                $temp_zip_path = $temp_zip['file_name'];

                // zip full path
                $temp_zip_fill_path = $temp_zip['full_path'];

                // extract zip file
                
                $zip = new ZipArchive;
                if($zip->open($temp_zip_fill_path) === TRUE){
                    $zip->extractTo(FCPATH.'zip_upload/');
                    $zip->close();
                }
                else{
                    $zip_msg = $this->template_zip_update->display_errors();
                }

                $post['template_image'] = $temp_img_path;
                $post['template_zip']   = $temp_zip_path;
                
                
                $this->load->model('Template_model');
                if($this->Template_model->template_update($id, $post)){
                    $this->session->set_flashdata('success', 'TEMPLATE UPDATED');
                }
                else{
                    $this->session->set_flashdata('error', '! CANT UPDATE PLEASE TRY AGAIN');
                    return redirect('Deshbord/template');
                }
            }
            else{
                $this->session->set_flashdata('error', '! CATN UPDATE PLEASE TRY AGAIN');
            }
            return redirect('Deshbord/template');

        }
        else{
            $err_img = $this->template_image_update->display_errors();
            $err_zip = $this->template_zip_update->display_errors();
            
            $this->load->view('admin/update_template', compact('err_img', 'err_zip', 'zip_msg'));
        
        }
        
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
        $download_zip_file = $this->Template_model->find_template($id);
        if (file_exists("zip_upload/".$download_zip_file->template_zip)) {
            $path = "zip_upload/".$download_zip_file->template_zip;
            // echo "<pre>";        
            // print_r($path);
            // echo "</pre>";
            // exit;

            force_download($path, NULL);
            
            
            
        }

    } 





}




?>