<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Targets extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Target');
        $this->load->model('User');
		if (!$this->session->has_userdata('user')) {
			redirect(base_url('UserCI/index'));
		}
    }

    public function Suggest(){
		$idTarget =$this->input->post('target');
		$poidsCible=$this->input->post('objective');
        $idu= $this->session->userdata('user')->id;
        $user = $this->User->get_By_id($idu);
        $regime = $this->Target->getRegimeByIdTarget($idTarget);
        $poidsUser = $user->weight;
		echo $poidsUser;
        $suggest = array();
		$i=0;
            $suggest['id'] = $regime[$i]['id'];
            $suggest['regime'] = $regime[$i]['regime'];
            $suggest['id_Objective']= $regime[$i]['id_Objective'];
            if($idTarget==1){
                $diff = $poidsCible - $poidsUser;
            }
            else  $diff =  $poidsUser - $poidsCible;
            $duree = $diff * 7 /$regime[$i]['weight'];
            $prix  = $duree * $regime[$i]['price'] / 7;
            $suggest['duree'] = $duree ; 
            $suggest['price']= $prix;
            $idactivity =  $this->Target->getActivityByIdRegime($suggest['id']);
            for($j=0;$j<count($idactivity);$j++){
                $activity = $this->Target->getActivityById($idactivity[$j]['id_Activity']);
            }
        $data['suggest'] = $suggest ; 
        $data['activity'] = $activity;
        $data['poidsCible'] = $poidsCible;
        $this->load->view('suggestion',$data);
    }

    public function acceptSuggest(){
        $data = array(
			'id_User' => $this->session->userdata('user'),
    		'id_Regime' => $this->input->get('idRegime'),
    		'objective_weight' => $this->input->get('cible'),
    		'duration' => $this->input->get('duration'),
			'price' =>$this->input->get('price')
		);
        $this->Target->insert_Regime_User($data);
    }
}