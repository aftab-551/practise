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
    public function show($stdid){
        $this->db->select('student.id,student.name,student.registration,student.semester,
        subject.title,marks.midTM,marks.OM,marks.sessionalTM,marks.sessionalOM,
        marks.finalTM,marks.finalOM,marks.total,marks.OM');
        $this->db->from('marks');
        $this->db->join('student','marks.student_id=student.id');
        $this->db->join('subject','marks.subject_id=student.id');
        $query=$this->db->get();
    }
}