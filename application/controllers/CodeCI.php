<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CodeCI extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Code');
        $this->load->model('User');
		if (!$this->session->has_userdata('user')) {
			redirect(base_url('UserCI/index'));
		}
    }

    public function index(){
        $data['code'] = $this->Code->getAllCode();
        $data['erreur']='';
		$this->load->view('templates/header');
        $this->load->view('depot',$data);
		$this->load->view('templates/footer');
    }

    public function depot(){
        $user = $this->session->userdata('user');
        $id=$user->id;
        $code = $this->input->post('code');
        if($this->Code->verify($code)==1){
			$this->Code->depot($id,$code);
			redirect('UserCI/profile');
        }
        else {
            $data['code'] = $this->Code->getAllCode();
        	$data['erreur']="code is already used or not exist";
			$this->load->view('templates/header');
            $this->load->view('depot',$data);
			$this->load->view('templates/footer');

        }
        
    }

    public function validation(){
        $data['validation'] =$this->Code->getValidation();
        $this->load->view('admin/list_validation',$data);
    }

    public function valider(){
        $iduser = $this->input->get('iduser');
        $code = $this->input->get('code');
        $this->Code->deleteValidationCode($code,$iduser);
        $solde = $this->Code->getSoldeUser($iduser);
        $prix =$this->Code->getPrice($code);
        $this->Code->setSoldeUser($iduser,($solde+$prix));
        $this->Code->setStatus($code);
    }

}