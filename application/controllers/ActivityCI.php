<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActivityCI extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Activity');
    }

    public function index()
	{
        $content['contents']="Act";
		$this->load->view('back_office/template',$content);
	} 
    
    public function get_Act()
    {
        $data['activities'] = $this->Activity->get_All_Activities();
        $data['contents']="Act";
        $this->load->view('back_office/template',$data);
    }
    
    public function delete_Act()
    {   
        $id = $_GET['id'];
        $this->Activity->delete($id);
        redirect('ActivityCI/get_Act');
    }

    public function insertView()
    {
       $content['contents']="Insert_Act";
        $this->load->view('back_office/template',$content); 
    }
    public function insert()
    {
        $data = array(
            'id_Activity' => null,
            'name_Activity' => $this->input->post('name_Activity'),
            'description' => $this->input->post('description'),
        );
        $inset_id = $this->Activity->insertdata($data);
        if ($inset_id) {
            redirect('ActivityCI/get_Act');
        } else {
            $this->load->view('back_office/template',$content);
        }
    }
    
    public function updateView()
    {
        $id = $_GET['id'];
        $data['act']=  $this->Activity->getById($id);
        $data['contents'] = "Update_Act";
        $this->load->view('back_office/template',$data); 
    }
    public function update()
    {
        $id = $this->input->post('id');
        $data = array(
            'name_Activity' => $this->input->post('name_Activity'),
            'description' => $this->input->post('description'),
        );
        $affected_rows = $this->Activity->update($id, $data);
        var_dump($affected_rows);
        if ($affected_rows) {
            redirect('ActivityCI/get_Act');
        } else {
            echo "Aucune données mise à jour.";
        }
    }
}