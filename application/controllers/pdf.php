<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Pdf extends CI_Controller{
		 
		public function index() {	
		// load view yang akan digenerate atau diconvert
		// contoh kita akan membuat pdf dari halaman welcome codeigniter
			
		$this->load->view('prints');
		// dapatkan output html
		
		$html = $this->output->get_output();
		
		// Load/panggil library dompdfnya
		$this->load->library('dompdf_gen');
		
		// Convert to PDF
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		//utk menampilkan preview pdf
		$this->dompdf->stream("welcome.pdf",array('Attachment'=>0));
		//atau jika tidak ingin menampilkan (tanpa) preview di halaman browser
		//$this->dompdf->stream("welcome.pdf");
		
	}
}