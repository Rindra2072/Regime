<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity_Controller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Activites');
    }

    public function insert()
    {
        $data = array(
            'id' => null,
            'name_Activity' => $this->input->post('name_Activity');
            'description' => $this->input->post('description');
        ) 
        $insert = $this->Activites->insert($data);
        if ($insert) {
            echo 'insert done';
        } else {
            echo 'insert failed';
        }
    }

    public function update()
    {
        $id = $this->session->userdata('activite');
        $data = array(
            'name_Activity' => $this->input->post('name_Activity'),
            'description' => $this->input->post('description')
        );
        $affected_rows = $this->Activites->update($id, $data);
        if ($affected_rows) {
            echo "Données mise à jour : " .$affected_rows;
        } else {
            echo "Aucune données mise à jour.";
        }
    }
}