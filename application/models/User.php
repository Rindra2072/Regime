<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }



    // find all confirmed user
    public function get_All_User(){
        $query = $this->db->get('User');
        return $query->result();
    }
  public function get_All_User_not_confirmed(){
        $query = $this->db->get('User_not_confirmed');
        return $query->result();
    }
	// is on Regime
	public function is_On_Regime($user){
        $query = $this->db->get_where('Regime_User',array('id_User'=>$user));
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    // login User
    public function login_User($email,$password){
        $query = $this->db->get_where('User',array('email'=>$email,'key_password'=>$password,'user_status'=>1));
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }


    // login Admin
    public function login_Admin($email,$password){
        $query = $this->db->get_where('User',array('email'=>$email,'key_password'=>$password,'user_status'=>11));
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }
    // Insert
    public function insert($data)
    {
        $this->db->insert('User', $data);
        return $this->db->insert_id();
    }


	// add size and weight
	public function update_data($id, $data)
	{
    	$this->db->where('id', $id);
    	$this->db->update('User', $data);
    	return $this->db->affected_rows();
	}


	// profile completed
	public function profile($user)
	{
        $query = $this->db->get_where('User',array('id'=>$user));
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
	public function get_By_id($user)
	{
        $query = $this->db->get_where('User',array('id'=>$user));
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }
	    public function getIMC($idu){
        $query = $this->db->get_where('User',array('id'=>$idu));
        $res  = $query->row();
        $taille = ($res->size)/10;
        $poids = $res->weight;
        $imc = $poids /($taille*$taille);
        $imc = round($imc,2);

        return $imc;

    }

}