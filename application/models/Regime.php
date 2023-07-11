<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    // find all Regime
    public function get_All_Regime(){
        $query = $this->db->get('Regime');
        return $query->result();
    }


    // Find By Id
    public function get_By_Id($id){
        $query = $this->db->get_where('Regime',array('id'=>$id));
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }

    // Insert
    public function insert($data)
    {
        $this->db->insert('Regime', $data);
        return $this->db->insert_id();
    }


	// update
	public function update_data($id, $data)
	{
    	$this->db->where('id', $id);
    	$this->db->update('Regime', $data);
    	return $this->db->affected_rows();
	}


}