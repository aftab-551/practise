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
    public function inserttotal($id,$data){
        $this->db->where('id',$id);
        return $this->db->update('student',$data);
    }
    public function get($id) {
        $this->db->where('id',$id);
        return $this->db->get('student')->row();

    }
    public function show($stdid){
        $this->db->select('*');
        $this->db->from('marks');
        $this->db->where('marks.student_id',$stdid); 
        $this->db->join('student','marks.student_id=student.id');
        $this->db->join('subject','marks.subject_id=subject.id');
        // return $this->db->get->result();
        return $this->db->get();
        
    }
}