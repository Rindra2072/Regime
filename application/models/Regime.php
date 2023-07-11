<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insertdata($data)
    {
        $this->db->insert('Regime', $data);
        return $this->db->insert_id();
    }

    public function get_All_Regime(){
        $query = $this->db->get('Regime');
        return $query->result();
    }
    
    public function update($id,$data)
    {
        return $this->db->where('id',$id)->update('Regime', $data);   
    }

    public function delete($id)
    {
        $this->db->where('id', $id)->delete('Regime');    
    }

    public function getById($id) {
      return $this->db->get_where('Regime', array('id' => $id))->row();
   }
}