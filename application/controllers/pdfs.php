<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pdfs extends CI_Controller{
	public function index($id  = NULL,$NIP = NULL)
  	{ 
		//load mPDF library
		$this->load->library('m_pdf');
		//load mPDF library
 
 
		//now pass the data//
		 $this->data['title']="MY PDF TITLE 1.";
		 $this->data['description']="";
		 $this->data['description']=$this->official_copies;
		 //now pass the data //
 
		
		$html=$this->load->view('form_prints',$this->data, true); //load the pdf_output.php by passing our data and get all data in $html varriable.
 	 
		//this the the PDF filename that user will get to download
		$pdfFilePath ="Data-".time()."-download.pdf";
 
		
		//actually, you can pass mPDF parameter on this load() function
		$pdf = $this->m_pdf->load();
		//generate the PDF!
		$pdf->WriteHTML($html,2);
		//offer it to user via browser download! (The PDF won't be saved on your server HDD)
		$pdf->Output($pdfFilePath, "D");	 	
  	}
}