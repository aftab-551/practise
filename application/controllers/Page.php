<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Page extends CI_Controller{

    public function index($page="home")
    {
        
        $path=APPPATH."views/pages/$page.php";
        
        if (file_exists ($path) ){
            $this->load->view("/pages/$page");
        }
        else
        {
            show_404();
        }
    }
}