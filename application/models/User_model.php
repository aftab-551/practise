<?php
class User_Model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function insert($data){
        return $this->db->insert('users',$data);
    }
    public function getAll(){
        return $this->db->get('users')->result();
    }
    public function get_user($id) {
        $this->db->where('id',$id);
        return $this->db->get('users')->row();

    }
    public function get($username,$password){
        $this->db->select('id,username,email');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        return $this->db->get('users')->row_array();
    }
    public function getuser($username,$password){
        $this->db->where('username',$username);
        return $this->db->get('users')->row();
    }
    public function updatePassword($id,$data){
        $this->db->where('id',$id);
        return $this->db->update('users',$data);
    }
    public function update($id,$data){
        $this->db->where('id',$id);
        return $this->db->update('users',$data);
    }
    public function delete($id){
        $this->db->where('id',$id);
        return $this->db->delete('users');
    }
    public function getuserposts($table,$userid){
        $this->db->where('user_id',$userid);
        return $this->db->get($table)->result();
    }


}