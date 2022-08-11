<?php
defined ('BASEPATH') OR exit ('no direct script access allowed');
class Post extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Crud_Model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    public function index(){
        $data['posts']=$this->Crud_Model->getAll('posts');
        $this->load->view('template/header');
        $this->load->view('posts/index',$data);
        $this->load->view('template/footer');
    }
    public function create(){
        if(! $this->session->userdata('username')){
            $this->session->set_flashdata('error','you need to be loggin to access the page');
            redirect('/login','refresh');
        }
        $this->load->view('template/header'); 
        $this->load->view('posts/create');
        $this->load->view('template/footer');
    }
    public function save(){
        if(! $this->session->userdata('username')){
            $this->session->set_flashdata('error','you need to be loggin to access the page');
            redirect('/login','refresh');
        }
        $this->form_validation->set_rules('title','Title','trim|required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('body','Body','trim|required|min_length[15]|max_length[100]');
        if($this->form_validation->run()==false){
            $this->load->view('template/header');
            $this->load->view('posts/create');
            $this->load->view('template/footer');
        }
        else{
            $data=array(
                'title'=>$this->input->post('title'),
                'body'=>$this->input->post('body'),
            );
        $insert=$this->Crud_Model->insert('posts',$data);
        if($insert){
            echo "data insert successfully";
            }
        }
                
    }
    public function edit($id){
        if(! $this->session->userdata('username')){
            $this->session->set_flashdata('error','you need to be loggin to access the page');
            redirect('/login','refresh');
        }
        $data['post']=$this->Crud_Model->get('posts',$id);
        if($this->input->post()){
            $this->form_validation->set_rules('title','Title','trim|required|min_length[5]|max_length[20]');
            $this->form_validation->set_rules('body','Body','trim|required|min_length[15]|max_length[100]');
            if($this->form_validation->run()==false){
                $this->load->view('template/header');
                $this->load->view('posts/edit',$data);
                $this->load->view('template/footer');
            }
            else{
                $data=array(
                    'title'=>$this->input->post('title'),
                    'body'=>$this->input->post('body'),
                );
                $update=$this->Crud_Model->updated('posts',$id,$data);
                if($update){
                     echo "data updated successfully";
                 }
            }
        }
        else{
            
            $this->load->view('template/header');
            $this->load->view('posts/edit',$data);
            $this->load->view('template/footer');

        }
    }
    public function delete($id){
        if(! $this->session->userdata('username')){
            $this->session->set_flashdata('error','you need to be loggin to access the page');
            redirect('/login','refresh');
        }
        $deleted=$this->Crud_Model->delete('posts',$id);
        if($deleted){
            echo "post deleted successfully";
        }
        else{
            echo "error deleting post";
        }
    }
    public function show($id){

        $data['post']=$this->Crud_Model->get('posts',$id);
        $this->load->view('template/header');
            $this->load->view('posts/show',$data);
            $this->load->view('template/footer');


    }
}