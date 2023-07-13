<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insertdata($data)
    {
        $this->db->insert('Activity', $data);
        return $this->db->insert_id();
    }

    public function get_All_Activities(){
        $query = $this->db->get('Activity');
        return $query->result();
    }
    
    public function update($id,$data)
    {
        return $this->db->where('id_Activity',$id)->update('Activity', $data);   
    }

    public function delete($id)
    {
        $this->db->where('id_Activity', $id)->delete('Activity');    
    }

    public function getById($id) {
      return $this->db->get_where('Activity', array('id_Activity' => $id))->row();
   }
}