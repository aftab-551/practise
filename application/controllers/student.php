<?php
class student extends CI_Controller{
    private $data=array();
    public function __construct(){
        parent::__construct();
        $this->load->model('student_model');
        $this->load->library('form_validation');
    }
    public function grade($number){
        if($number<50){
            return("F");
        }
        elseif($grade<=60){
            return("D");
        }
        elseif($grade<=70){
            return("C");
        }
        elseif($grade<=80){
            return("A");
        }
        else{
            return("none");
        }
        
    }
    public function loads(){
        if(! $this->session->userdata('username')){
            $this->session->set_flashdata('error','you need to be loggin to access the page');
            redirect('/login','refresh');
        }
        $this->load->view('template/header'); 
        $this->load->view('students/cms');
        $this->load->view('template/footer');
    }
    public function marks(){
        if(! $this->session->userdata('username')){
            $this->session->set_flashdata('error','you need to be loggin to access the page');
            redirect('/login','refresh');
        }
        if($this->input->post()){
            // var_dump("aftab");
            if($this->_validatemarks() == FALSE){
                $this->_loadTemplate('marks');
            }else{
                $data=[
                    'subject_id'=> $this->input->post('subjectid'),
                    'student_id'=> $this->input->post('studentid'),
                    'midTM'=> $this->input->post('midTM'),
                    'midOM'=> $this->input->post('midOM'),
                    'sessionalTM'=> $this->input->post('sessionalTM'),
                    'sessionalOM'=> $this->input->post('sessionalOM'),
                    'finalTM'=> $this->input->post('finalTM'),
                    'finalOM'=> $this->input->post('finalOM'),
                    'total'=> $this->input->post('midTM')+$this->input->post('sessionalTM')+$this->input->post('finalTM'),
                    'OM'=> $this->input->post('finalOM')+$this->input->post('sessionalOM')+$this->input->post('midOM'),
                ];
                $student=$this->student_model->insert($data);
                $this->session->set_flashdata('success','marks successfully entered');
                redirect('/marks','refresh');
            }
            
            
        }else{
            $this->_loadTemplate('marks');
        }
        
    }
    public function result(){
        $this->_loadTemplate('result');
    }
    private function _validatemarks(){
        $this->form_validation->set_rules('subjectid',"subject id","trim|required");
        $this->form_validation->set_rules('studentid',"student id","trim|required"); 
        $this->form_validation->set_rules('midTM',"mid toalmarks","trim|required"); 
        $this->form_validation->set_rules('midOM',"mid obtainedmarks","trim|required");
        $this->form_validation->set_rules('sessionalTM',"sessional toalmarks","trim|required"); 
        $this->form_validation->set_rules('sessionalOM',"sessional obtainedmarks","trim|required");
        $this->form_validation->set_rules('finalTM',"final toalmarks","trim|required"); 
        $this->form_validation->set_rules('finalOM',"final obtainedmarks","trim|required");
        if($this->form_validation->run()==FALSE)
          return FALSE;
        else
          return TRUE;
      } 
    private function _loadTemplate($view){
        $this->load->view('template/header');
        $this->load->view('students/'.$view,$this->data);
        $this->load->view('template/footer');
    }
    
}