<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime_Controller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Regime');
    }

    public function index()
	{
        $content['contents']="Regime";
		$this->load->view('back_office/template',$content);
	} 
    
    public function get_Reg()
    {
        $data['regimes'] = $this->Regime->get_All_Regime();
        $data['contents']="Regime";
        $this->load->view('back_office/template',$data);
    }
    
    public function delete_Reg()
    {   
        $id = $_GET['id'];
        $this->Regime->delete($id);
        redirect('Regime_Controller/get_Reg');
    }

    public function insertView()
    {
        $content['contents']="Insert_Reg";
        $this->load->view('back_office/template',$content); 
    }
    public function insert()
    {
        $data = array(
            'id' => null,
            'regime' => $this->input->post('regime'),
            'id_picture' => $this->input->post('id_picture'),
            'description' => $this->input->post('description'),
            'id_Objective' => $this->input->post('id_Objective'),
            'weight' => $this->input->post('weight'),
            'price' => $this->input->post('price'),
        );
        $inset_id = $this->Regime->insertdata($data);
        if ($inset_id) {
            redirect('Regime_Controller/get_Reg');
        } else {
            $this->load->view('back_office/template',$content);
        }
    }
    
    public function updateView()
    {
         $id = $_GET['id'];
        $data['reg']=  $this->Regime->getById($id);
        $data['contents'] = "Update_Reg";
        $this->load->view('back_office/template',$data); 
    }
    public function update()
    {
        $id = $this->input->post('id');
        $data = array(
            'regime' => $this->input->post('regime'),
            'id_picture' => $this->input->post('id_picture'),
            'description' => $this->input->post('description'),
            'id_Objective' => $this->input->post('id_Objective'),
            'weight' => $this->input->post('weight'),
            'price' => $this->input->post('price'),
        );
        $affected_rows = $this->Regime->update($id, $data);
        var_dump($id);
        if ($affected_rows) {

            redirect('Regime_Controller/get_Reg');
        } else {
            echo "Aucune données mise à jour.";
        }
    }
}