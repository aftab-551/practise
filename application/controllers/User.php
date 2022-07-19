<?php
class User extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }
    public function insertUsers(){
        $data=array('username'=>'barakt','email'=>'barkat124gmail.com','password'=>md5('hello'));
        echo $this->User_model->insert($data);
    }
    public function getUsers(){
        // $users=$this->User_model->getAll();
        // echo "<pre>"; print_r($users);
        $data['users']=$this->User_model->getAll('users');
        $this->load->view('template/header');
        $this->load->view('users/showuser',$data);
        $this->load->view('template/footer');

    }
    public function getUser($id){
        $user=$this->User_model->get($id);
        echo "<pre>"; print_r($user);
        echo $this->db->last_query();
    }
    public function deleteUser($id){
        $user=$this->User_model->delete($id);
        echo "<pre>"; print_r($user);
        echo $this->db->last_query();
    }
    public function updateUser($id){
        $data=array('email'=>'saqlain11gmail.com');
        echo $this->User_model->update($id,$data);
        echo $this->db->last_query();
    } 
    public function register(){
        if($this->input->post()){
            if($this->_validate() == FALSE){
                $this->_loadTemplate('registration');
            }else{
                $data=[
                    'username'=> $this->input->post('username'),
                    'email'=> $this->input->post('email'),
                    'password'=> md5($this->input->post('password')),
                ];
                $user=$this->User_model->insert($data);
                $this->session->set_flashdata('success','user successfully registered');
                redirect('/login','refresh');
            }
            
        }else{
            $this->_loadTemplate('registration');
        }
        
    }
        
    public function login(){
        if($this->input->post()){
            if($this->_validatelogin() === FALSE){
                $this->_loadTemplate('login');
            }else{
                
                $username= $this->input->post('username');
                $password= $this->input->post('password');
               
                $user=$this->User_model->get($username,$password);
                $this->session->userdata($user);
                $this->session->set_flashdata('success','user successfully logged In');
                redirect('/','refresh');
            }
            
        }else{
            $this->_loadTemplate('login');
        }
    }
    public function logout(){
        session_destroy();
    }
    private function _validate(){
      $this->form_validation->set_rules('username',"User Name","trim|required|min_length[3]|max_length[15]");
      $this->form_validation->set_rules('email',"Email","trim|required|is_unique[users.email]|valid_email"); 
      $this->form_validation->set_rules('password',"Password","trim|required|min_length[3]"); 
      $this->form_validation->set_rules('password_confirmation',"Confirm password","trim|required|matches[password]");
      if($this->form_validation->run()==FALSE)
        return FALSE;
      else
        return TRUE;
    }
    private function _validatelogin(){
        $this->form_validation->set_rules('username',"User Name","trim|required"); 
        $this->form_validation->set_rules('password',"Password","trim|required"); 
        
        if($this->form_validation->run()==FALSE)
          return FALSE;
        else
          return TRUE;
      }
    private function _loadTemplate($view){
        $this->load->view('template/header');
        $this->load->view('template/'.$view);
        $this->load->view('template/footer');
    }
}