<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserCI extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('User');
    }


	// form login
	public function index()
	{
		$this->load->view('Login');
	}


	// form Inscription
	public function inscription()
	{
		$this->load->view('Inscription');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('UserCI/index');
	}

	// User
	public function login_User()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$res = $this->User->login_User($email,$password);
		if ($res) {
			$this->session->set_userData('user',$res);
			var_dump($res);
		}
		else {
			echo 'error';
		}
	}


	// Admin
	public function login_Admin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$res = $this->User->login_Admin($email,$password);
		if (!empty($res)) {
			$this->session->set_userData('user',$res);
			var_dump($res);
		}
		else {
			echo 'error';
		}
	}


	// insert Admin
	public function insert_Admin()
	{
		$data = array(
			'id' => null,
    		'user' => $this->input->post('user'),
    		'birthday' => $this->input->post('birthday'),
    		'email' => $this->input->post('email'),
    		'key_password' => $this->input->post('key_password'),
    		'user_status' => 1
		);
		$inset_id =  $this->User->insert($data);
		if ($inset_id) {
			echo 'insert';
		} else {
			echo 'no insert';
		}
	}


	// insert User
	public function insert_User()
	{
		$data = array(
			'id' => null,
    		'user' => $this->input->post('user'),
    		'birthday' => $this->input->post('birthday'),
    		'email' => $this->input->post('email'),
    		'key_password' => $this->input->post('key_password'),
    		'user_status' => 11
		);
		$inset_id =  $this->User->insert($data);
		if ($inset_id) {
			echo 'insert';
		} else {
			echo 'no insert';
		}
	}
}