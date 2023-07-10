<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserCI extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('User');
		// if (!$this->session->has_userdata('user')) {
		// 	redirect(base_url('UserCI/index'));
		// }
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
	public function add()
	{
		$this->load->view('ajout');
	}

	public function profile()
	{
		$data['user'] = $this->session->userdata('user');
		$data['is_Regime'] =$this->User->is_On_Regime($data['user']->id);
		$this->load->view('templates/header');
		$this->load->view('Profile',$data);
		$this->load->view('templates/footer');
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
		echo $password;
		if ($res) {
			$this->session->set_userData('user',$res);
			redirect('UserCI/profile');
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
			redirect();
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
			'gender' =>$this->input->post('gender'),
			'contact' =>$this->input->post('contact'),
			'address' =>$this->input->post('address'),
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

	// add size and weight
	public function update_data()
	{
		$id = $this->session->userdata('user')->id;
		$data = array(
			'size' => $this->input->post('size'),
			'weight' => $this->input->post('weight'),
    	);
		$affected_rows = $this->User->update_data($id, $data);
		if ($affected_rows) {
			redirect('UserCI/profile');
		} else {
			echo "Aucune donnée mise à jour.";
		}
	}


	// add size and weight
	public function update_All_data()
	{
		$id = $this->session->userdata('user')->id;
		$data = array(
			'user' => $this->input->post('user'),
    		'birthday' => $this->input->post('birthday'),
    		'email' => $this->input->post('email'),
			'gender' =>$this->input->post('gender'),
			'contact' =>$this->input->post('contact'),
			'address' =>$this->input->post('address'),
			'size' => $this->input->post('size'),
			'weight' => $this->input->post('weight'),
    	);
		$affected_rows = $this->User->update_data($id, $data);
		if ($affected_rows) {
			redirect('UserCI/profile');
		} else {
			echo "Aucune donnée mise à jour.";
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
			'gender' =>$this->input->post('gender'),
			'contact' =>$this->input->post('contact'),
			'address' =>$this->input->post('address'),
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
}