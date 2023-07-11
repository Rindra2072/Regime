<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Target extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getRegimeByIdTarget($idTarget){
        $this->db->order_by('weight', 'desc');
        $query = $this->db->get_where('Regime',array('id_Objective'=>$idTarget));
        return $query->result_array();
    }

    public function getActivityById($id){
        $query = $this->db->get_where('Activity',array('id_Activity'=>$id));
        //$query = "Select * from Activity where id_Activity = %s";
        return $query->result_array();
    }

    public function getActivityByIdRegime($idRegime){
        $query = $this->db->get_where('Regime_Activity',array('id_Regime'=>$idRegime));
        return $query->result_array();
    }

    public function insert_Regime_User($data){
        $this->db->insert('Regime_User',$data);
        return $this->db->insert_id();
    }

}