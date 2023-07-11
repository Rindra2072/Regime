<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Code extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAllCode(){
        $query = $this->db->get('Code');
        return $query->result();
    }

    public function setSolde($idUser,$solde){
        $this->db->where('id',$idUser);
        $this->db->update('User',['solde'=>$solde]);
    }

    public function deleteValidationCode($code,$iduser){
        $this->db->where('code',$code);
        $this->db->where('id_User',$iduser);
        $this->db->delete('Validation_Code');
    }

    public function getPrice($code){
        $query = $this->db->get_where('Code',array('code'=>$code));
        $res = $query ->row();
        return $res->price;
    }

    public function depot($idUser,$code){
        $this->db->insert('Validation_Code', array('code'=>$code,'id_User'=>$idUser));
    }

    public function getSoldeUser($iduser){
        $query = $this->db->get_where('User',array('id'=>$iduser));
        $res = $query ->row();
        return $res->sold;
    }

    public function setSoldeUser($iduser,$sold){
        $this->db->where('id',$iduser);
        $this->db->update('User',['sold'=>$sold]);
    }
    
    public function verify($code){
        $query = $this->db->get_where('Code',array('code'=>$code));
        $res = $query ->row();
        return $res->status;
    }
    
    public function setStatus($code){
        $this->db->where('code',$code);
        $this->db->update('Code',['status'=>11]);
    }


    public function getValidation(){
        $query = $this->db->get('Validation_Code');
        $res = $query ->result();
        return $res;

    }
}