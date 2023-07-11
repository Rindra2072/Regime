<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActivityCI extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		if (!$this->session->has_userdata('user')) {
			redirect(base_url('UserCI/index'));
		}
    }
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('Sug');
		$this->load->view('templates/footer');
	}


}