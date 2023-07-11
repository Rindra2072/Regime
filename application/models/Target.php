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
	//   public function insert_Regime_User($iduser,$idregime,$weight,$duration,$price){
    //     $this->db->insert('Regime_User',array('id_User'=>$iduser,'id_Regime'=>$idregime,'objective_weight'=>$weight,'duration'=>$duration,'price'=>$price));
    //     return $this->db->insert_id();
    // }
	    public function getDetailRegime($idregime){
        $query = $this->db->get_where('Detail_Regime',array('id_Regime'=>$idregime));
        return $query->row();
    }

    public function showRegimeByUser($iduser){
        $query = $this->db->get_where('Regime_User',array('id_User'=>$iduser));
        return $query->row();
    }

    public function getRegimeByIdRegime($id){
        $query = $this->db->get_where('Regime',array('id'=>$id));
        return $query->row();
    }

}