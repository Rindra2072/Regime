<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PdfController extends CI_Controller{
	public function __construct(){
		parent::__construct();
          $this->load->library('fpdf183/fpdf');
		$this->load->helper('Fpdf_helper');
		$this->load->helper('form');
		$this->load->model('User');
		$this->load->model('Target');
		if (!$this->session->has_userdata('user')) {
			redirect(base_url('UserCI/index'));
		}
	}
	public function index()
	{
		$this->load->view('pdf/export');
	}
	public function Exporter() {
		// data
		$user = $this->session->userdata('user');
		$regime_id = $this->Target->showRegimeByUser($user->id);
		$regime = $this->Target->getRegimeByIdRegime($regime_id->id_Regime);
		$id_activity =  $this->Target->getActivityByIdRegime($regime->id);
        for($j=0;$j<count($id_activity);$j++){
            $activity = $this->Target->getActivityById($id_activity[$j] ["id_Activity"]);
        }
		// data
		$pdf = new Fpdf_helper();
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 14);
		$width = $pdf->GetStringWidth("Nom".$user->user) + 6;
		$pdf->Cell(50, 9,$user->user, 0, 1, 'C');
		$pdf->Cell($width, 9,$user->email, 0, 1, 'C');

		$pdf->SetFont('Arial', 'B', 12);
		$pdf->SetX($pdf->GetX() + 18);
		$pdf->Cell(80, 7, 'Regime', 1, 0, 'C'); 
		$pdf->Cell(80, 7, 'Duration', 1, 0, 'C');
		$pdf->Cell(80, 7, 'Prix', 1, 0, 'C');
		$pdf->Ln();

		$pdf->SetFont('Arial', 'B', 10);
		    $pdf->SetX($pdf->GetX() + 12); 
		    $pdf->Cell(60, 6, $regime->regime, 1, 0, 'C');
		    $pdf->Cell(60, 6, $regime_id->duration, 1, 0, 'C');
		    $pdf->Cell(60, 6, $regime_id->price, 1, 0, 'C');
		    $pdf->Ln();

		$pdf->SetFont('Arial', 'B', 12);
		$pdf->SetX($pdf->GetX() + 18);
		$pdf->Cell(60, 7, 'Activity', 1, 0, 'C'); 
		$pdf->Ln();
		$pdf->SetFont('Arial', 'B', 10);
		foreach ($activity as $row) { 
			$pdf->SetX($pdf->GetX() + 18); 
			$pdf->Cell(60, 6, $row['name_Activity'], 1, 0, 'C');
			$pdf->Ln();
		}
		$pdf->Output();
	 }
}
?>