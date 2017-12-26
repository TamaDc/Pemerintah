<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Mymodel');
	}

	public function index(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}
		else{
		 $this->load->view('dasboard');
		}
	}

	public function menu(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}else{
		$this->load->view('form_menu');
		}
	}	

	public function add(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}else{
		$this->load->view('form_input');
		}
	}

	public function template(){
		$this->load->view('form_template');
	}

	public function add_I(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}else{
		$this->load->view('form_input_gaji');
		}
	}

	//============================ data profile ==========================
	public function data_profile($NIP){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}else{
		$data['gaji'] = $this->Mymodel->Getgaji("where NIP = '$NIP' ");
		$data['pegawai'] = $this->Mymodel->Getpegawai("where NIP = '$NIP' ");
		$this->load->view('form_profil',$data);
		}
	}

	// // ========================== data print ============================
	// public function data_print($NIP){
	// 	if($this->session->userdata('status') != "login"){
	// 		$this->load->view('form_login');
	// 	}else{

	// 		$data['gaji'] = $this->Mymodel->Getgaji("where NIP = '$NIP' ");
	// 		$data['pegawai'] = $this->Mymodel->Getpegawai("where NIP = '$NIP' ");
	// 		$this->load->view('form_print',$data);
	// 	}
	// }
	public function cek_template(){
		$this->load->view('form_print');
	}

	public function data_prints($id  = NULL,$NIP = NULL){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}
		else if ($id != NULL and $NIP === NULL){
			$data['template'] = $this->Mymodel->Gettemplate("where id = '$id' ");
			$this->load->view('form_print',$data);
		}
		else{
			$data['template'] = $this->Mymodel->Gettemplate("where id = '$id' ");
			$data['gaji'] = $this->Mymodel->Getgaji("where NIP = '$NIP' ");
			$data['pegawai'] = $this->Mymodel->Getpegawai("where NIP = '$NIP' ");
			$this->load->view('form_prints',$data);
		//	$this->load->view('prints');
		// dapatkan output html
		
			// $html = $this->output->get_output();
			
			// // Load/panggil library dompdfnya
			// $this->load->library('dompdf_gen');
			
			// // Convert to PDF
			// $this->dompdf->load_html($html);
			// $this->dompdf->render();
			// //utk menampilkan preview pdf
			// $this->dompdf->stream("welcome.pdf",array('Attachment'=>0));
			// //atau jika tidak ingin menampilkan (tanpa) preview di halaman browser
			// //$this->dompdf->stream("welcome.pdf");
			
		}
	}

	public function kenaikan_gaji ($NIP){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}else{
		$data['gaji'] = $this->Mymodel->Getgaji("where NIP = '$NIP' ");
		$data['newgaji'] = $this->Mymodel->Getnewgaji("where NIP = '$NIP' ");
		
		$this->load->view('form_kenaikan',$data);
		}
	}	

	public function home(){
		$this->load->library('pagination');
		$this->load->model('Mymodel');
		$config = array();
		$config['base_url'] = base_url().'index.php/admin_pegawai/data';
		$config['total_rows'] = $this->Mymodel->count_actors();
		$config['per_page'] = 5;

		$config['full_tag_open'] = "<ul class = 'pagination'>";
		$config['full_tag_close'] = "</ul>";
		$config['num_tag_open'] = "<li>";
		$config['num_tag_close'] = "</li>";
		$config['cur_tag_open'] = "<li class='disable'</li> <a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only' ></span> </a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tag_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tag_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tag_close'] = "</li>";
		
		$this->pagination->initialize($config);
		$data['gaji'] = $this->Mymodel->fetch_actors($config['per_page'], $this->uri->segment(3));
		$data['link'] = $this->pagination->create_links();

		#$data = $this->Mymodel->Getpegawai();
		$this->load->view('Home',$data);
		
	}

	public function print_table(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}
		else{
		$this->load->model('Mymodel');
		$data = $this->Mymodel->Getpegawai();
		$this->load->view('form_print_pns',array('data' => $data));

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

	public function print_table_kenaikan(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}
		else{
		$this->load->model('Mymodel');
		$data = $this->Mymodel->Getgaji();
		$this->load->view('form_print_kenaikan',array('data' => $data));

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


	public function logout(){
		$this->session->sess_destroy();
		$this->load->view('form_login');
	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */