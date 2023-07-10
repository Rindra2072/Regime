<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activites extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert($data)
    {
        $this->db->insert('Activity',$data);
        return $this->db->insert_id();
    }

    public function get_All_Activities(){
        $query = $this->db->get('Activity');
        return $query->result();
    }
    
    public function delete(){
        $this->db->empty_table('Activity');
        return $this->db->affected_rows();    
    }
}