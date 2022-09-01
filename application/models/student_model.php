<?php
defined ('BASEPATH') OR exit ('no direct script access allowed');
class student_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function insert($data){
        return $this->db->insert('marks',$data);
    }
    public function get_student($rollno) {
        $this->db->where('roll_no',$rollno);
        return $this->db->get('students')->row();

    }
}