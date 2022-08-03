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
    public function login($username, $password, $table) {
        if($username != '') {
            $where = array('username' => $username, 'password' => $password);
        }
        else {
            $where = array('id' => $student_id, 'password' => $password);
        }
        
        $query = $this->db->get_where($table, $where);
        // $query = $this->db->where(['username' => $username, 'password' => $password])->get('users');
        if ($query->num_rows()) {
            return true;
        } else {
            return false;
        }
    }
    public function get($username,$password){
        $this->db->select('username,email');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        return $this->db->get('users')->row_array();
    }
    public function getuser($username,$password){
        $this->db->where('username',$username);
        return $this->db->get('users')->row();
    }
    public function update($id,$data){
        $this->db->where('id',$id);
        return $this->db->update('users',$data);
    }
    public function delete($id){
        $this->db->where('id',$id);
        return $this->db->delete('users');
    }

}