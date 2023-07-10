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

    // find all not confirmed user
    public function get_All_User_not_confirmed(){
        $query = $this->db->get('User_not_confirmed');
        return $query->result();
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
        if ($query->num_row() > 0) {
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


}