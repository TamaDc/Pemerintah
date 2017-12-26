<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_jabatan extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Mymodel');
	}

//=============insert data pegawai ========================

	public function insert(){
		$nama_jabatan = $_POST['nama_jabatan'];
		$level = $_POST['level'];
		$data_insert = array(
			'nama_jabatan' => $nama_jabatan,
			'level' => $level,
		);
		$res = $this->Mymodel->InsertData('jabatan',$data_insert);
		if($res >=1){
			$this->session->set_flashdata('pesan','Tambah data sukses');
			redirect('admin_jabatan/data_jabatan');
		}
		else{
			echo "Im sorry !!!";
		}
	}

	public function insert_unit(){
		$nama_unit_kerja = $_POST['nama_unit_kerja'];
		$esselon = $_POST['esselon'];
		$data_insert = array(
			'nama_unit_kerja' => $nama_unit_kerja,
			'esselon' => $esselon,
		);
		$res = $this->Mymodel->InsertData('db_unit_kerja',$data_insert);
		if($res >=1){
			$this->session->set_flashdata('pesan','Tambah data sukses');
			redirect('admin_jabatan/data');
		}
		else{
			echo "Im sorry !!!";
		}
	}


	//===================== edit data pegawai ==============================

	public function edit($kd_jabatan){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}else{
		$data['jabatan'] = $this->Mymodel->Getjabatan("where kd_jabatan = '$kd_jabatan' ");
		
		$this->load->view('form_edit_jabatan',$data);
		}
	}

	public function edit_unit($id_unit_kerja){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}else{
		$data['db_unit_kerja'] = $this->Mymodel->Getunitkerja("where id_unit_kerja = '$id_unit_kerja' ");
		
		$this->load->view('form_edit_unit',$data);
		}
	}

	public function prints(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}
		else{
		$this->load->model('Mymodel');
		$data = $this->Mymodel->Getjabatan();
		$this->load->view('form_print_jabatan',array('data' => $data));

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

	public function prints_unit(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}
		else{
		$this->load->model('Mymodel');
		$data = $this->Mymodel->Getunitkerja();
		$this->load->view('form_print_unit',array('data' => $data));

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
	// ==================== update data pegawai ===========================
	public function update(){
		$kd_jabatan = $_POST['kd_jabatan'];
		$nama_jabatan = $_POST['nama_jabatan'];
		$level = $_POST['level'];

		$data_update = array(
			'kd_jabatan' => $kd_jabatan,
			'nama_jabatan' => $nama_jabatan,
			'level' => $level,
		);
		
		$where = array('kd_jabatan' => $kd_jabatan);
		$res = $this->Mymodel->UpdateGaji('jabatan',$data_update,$where);
		if($res >=1){
			$this->session->set_flashdata('pesan','Update data sukses');
			redirect('admin_jabatan/data_jabatan');
		}
		else{
			echo "gagal";
		}
	}

	public function update_unit(){
		$id_unit_kerja = $_POST['id_unit_kerja'];
		$nama_unit_kerja = $_POST['nama_unit_kerja'];
		$esselon = $_POST['esselon'];

		$data_update = array(
			'id_unit_kerja' => $id_unit_kerja,
			'nama_unit_kerja' => $nama_unit_kerja,
			'esselon' => $esselon,
		);
		
		$where = array('id_unit_kerja' => $id_unit_kerja);
		$res = $this->Mymodel->UpdateGaji('db_unit_kerja',$data_update,$where);
		if($res >=1){
			$this->session->set_flashdata('pesan','Update data sukses');
			redirect('admin_jabatan/data');
		}
		else{
			echo "gagal";
		}
	}

	public function tambah(){
		$this->load->view('form_input_jabatan');
	}

	public function tambah_unit(){
		$this->load->view('form_input_unit');
	}


	// ============================ delete data ========================
	public function delete($kd_jabatan){
		$where = array('kd_jabatan' => $kd_jabatan);
		$res = $this->Mymodel->DeleteData('jabatan',$where);
		if($res>=1){
			redirect('admin_jabatan/data_jabatan');
		}
		else{
			echo "Data Gagal diHapus!!!";
		}

	}

	public function delete_unit($id_unit_kerja){
		$where = array('id_unit_kerja' => $id_unit_kerja);
		$res = $this->Mymodel->DeleteData('db_unit_kerja',$where);
		if($res>=1){
			redirect('admin_jabatan/data');
		}
		else{
			echo "Data Gagal diHapus!!!";
		}

	}
	//========================================================

	/*function proses data*/	
	public function data_jabatan(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}
		else{
		$this->load->library('pagination');
		$this->load->model('Mymodel');
		$config = array();
		$config['base_url'] = base_url().'index.php/admin_jabatan/data_jabatan';
		$config['total_rows'] = $this->Mymodel->count_jabatan();
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
		$data['jabatan'] = $this->Mymodel->fetch_jabatan($config['per_page'], $this->uri->segment(3));
		$data['link'] = $this->pagination->create_links();

		#$data = $this->Mymodel->Getpegawai();
		$this->load->view('form_data_jabatan',$data);
		}
	}


	public function data(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}
		else{
		$this->load->library('pagination');
		$this->load->model('Mymodel');
		$config = array();
		$config['base_url'] = base_url().'index.php/admin_jabatan/data';
		$config['total_rows'] = $this->Mymodel->count_unit_kerja();
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
		$data['db_unit_kerja'] = $this->Mymodel->fetch_unit_kerja($config['per_page'], $this->uri->segment(3));
		$data['link'] = $this->pagination->create_links();

		#$data = $this->Mymodel->Getpegawai();
		$this->load->view('form_data_unit',$data);
		}
	}

		public function laporan_data_jabatan(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}
		else{
		$this->load->library('pagination');
		$this->load->model('Mymodel');
		$config = array();
		$config['base_url'] = base_url().'index.php/admin_jabatan/data_jabatan';
		$config['total_rows'] = $this->Mymodel->count_jabatan();
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
		$data['jabatan'] = $this->Mymodel->fetch_jabatan($config['per_page'], $this->uri->segment(3));
		$data['link'] = $this->pagination->create_links();

		#$data = $this->Mymodel->Getpegawai();
		$this->load->view('form_laporan_jabatan',$data);
		}
		}

		public function laporan_data_unit(){
			if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}
		else{
		$this->load->library('pagination');
		$this->load->model('Mymodel');
		$config = array();
		$config['base_url'] = base_url().'index.php/admin_jabatan/data';
		$config['total_rows'] = $this->Mymodel->count_unit_kerja();
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
		$data['db_unit_kerja'] = $this->Mymodel->fetch_unit_kerja($config['per_page'], $this->uri->segment(3));
		$data['link'] = $this->pagination->create_links();

		#$data = $this->Mymodel->Getpegawai();
		$this->load->view('form_laporan_unit',$data);
		}
	}
	

	



}