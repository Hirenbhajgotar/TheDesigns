<?php
class Deshbord extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/deshbord');
    }

    public function template()
    {
        $this->load->view('admin/template');
    }

}




?>