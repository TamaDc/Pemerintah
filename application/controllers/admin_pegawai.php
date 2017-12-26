<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_pegawai extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Mymodel');
	}

//=============insert data pegawai ========================

	public function insert(){
		$NIP = $_POST['NIP'];
		$Nama = $_POST['Nama'];
		$Golongan = $_POST['Golongan'];
		$periode = $_POST['periode'];
		$skpd = $_POST['skpd'];
		$unit_kerja = $_POST['unit_kerja'];
		$jabatan = $_POST['jabatan'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$loker = $_POST['loker'];
		$pangkat = $_POST['pangkat'];
		$nomer_sk = $_POST['nomer_sk'];
		$tanggal_sk = $_POST['tanggal_sk'];
		$masa_kerja_tahun = $_POST['masa_kerja_tahun'];
		$masa_kerja_bulan = $_POST['masa_kerja_bulan'];
		$gaji_pokok_lama = $_POST['gaji_pokok_lama'];
		$tanggal_berlaku = $_POST['tanggal_berlaku'];
		$NIP_pejabat = $_POST['NIP_pejabat'];
		$data_insert = array(
			'NIP' => $NIP,
			'Nama' => $Nama,
			'Golongan' => $Golongan,
			'periode' => $periode,
			'nomer_sk' => $nomer_sk,
			'tanggal_sk' => $tanggal_sk,
			'masa_kerja_tahun' => $masa_kerja_tahun,
			'masa_kerja_bulan' => $masa_kerja_bulan,
			'gaji_pokok_lama' => $gaji_pokok_lama,
			'tanggal_berlaku' => $tanggal_berlaku,
			'NIP'=> $NIP,
			'NIP_pejabat' => $NIP_pejabat,	
			'tanggal_lahir' => $tanggal_lahir,			
		);
		$res_gaji = $this->Mymodel->InsertData('gaji',$data_insert);
		
		$data_insert2 = array(
			'NIP' => $NIP,
			'Nama' => $Nama,
			'Golongan' => $Golongan,
			'periode' => $periode,
			'skpd' => $skpd,
			'unit_kerja' => $unit_kerja,
			'jabatan' => $jabatan,
			'tanggal_lahir'=> $tanggal_lahir,
			'loker' => $loker,
			'pangkat' => $pangkat,
		);
		$res = $this->Mymodel->InsertData('data_pegawai',$data_insert2);
		$res_gaji = $this->Mymodel->InsertData('gaji',$data_insert);
		if($res >=1 && $res_gaji>=1){
			$this->session->set_flashdata('pesan','Tambah data sukses');
			redirect('admin_pegawai/data');
		}
		else{
			echo "Im sorry !!!";
		}
	}

	//===================== edit data pegawai ==============================

	public function edit($NIP){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}else{
		$data['pegawai'] = $this->Mymodel->Getpegawai("where NIP = '$NIP' ");
		$data['gaji'] = $this->Mymodel->Getgaji("where NIP = '$NIP' ");
		$this->load->view('form_edit',$data);
		}
	}

	// ==================== update data pegawai ===========================
	public function update(){
		$NIP = $_POST['NIP'];
		$Nama = $_POST['Nama'];
		$Golongan = $_POST['Golongan'];
		$periode = $_POST['periode'];
		$skpd = $_POST['skpd'];
		$unit_kerja = $_POST['unit_kerja'];
		$jabatan = $_POST['jabatan'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$loker = $_POST['loker'];
		$pangkat = $_POST['pangkat'];
		$nomer_sk = $_POST['nomer_sk'];
		$tanggal_sk = $_POST['tanggal_sk'];
		$masa_kerja_tahun = $_POST['masa_kerja_tahun'];
		$masa_kerja_bulan = $_POST['masa_kerja_bulan'];
		$gaji_pokok_lama = $_POST['gaji_pokok_lama'];
		$tanggal_berlaku = $_POST['tanggal_berlaku'];
		$NIP_pejabat = $_POST['NIP_pejabat'];
		$data_insert = array(
			'NIP' => $NIP,
			'Nama' => $Nama,
			'Golongan' => $Golongan,
			'periode' => $periode,
			'nomer_sk' => $nomer_sk,
			'tanggal_sk' => $tanggal_sk,
			'masa_kerja_tahun' => $masa_kerja_tahun,
			'masa_kerja_bulan' => $masa_kerja_bulan,
			'gaji_pokok_lama' => $gaji_pokok_lama,
			'tanggal_berlaku' => $tanggal_berlaku,
			'NIP_pejabat' => $NIP_pejabat,	
			'tanggal_lahir' => $tanggal_lahir,			
		);
		$data_insert2 = array(
			'NIP' => $NIP,
			'Nama' => $Nama,
			'Golongan' => $Golongan,
			'periode' => $periode,
			'skpd' => $skpd,
			'unit_kerja' => $unit_kerja,
			'jabatan' => $jabatan,
			'tanggal_lahir'=> $tanggal_lahir,
			'loker' => $loker,
			'pangkat' => $pangkat,
		);
		$where = array('NIP' => $NIP);
		$res = $this->Mymodel->UpdateData('data_pegawai',$data_insert2,$where);
		$res_gaji = $this->Mymodel->UpdateData('gaji',$data_insert,$where);
		if($res >=1 && $res_gaji >=1){
			$this->session->set_flashdata('pesan','Update data sukses');
			redirect('admin_pegawai/data');
		}
		else{
			echo "gagal";
		}

	}


	public function update_1(){
		$NIP = $_POST['NIP'];
		$Nama = $_POST['Nama'];
		$Golongan = $_POST['Golongan'];
		$skpd = $_POST['skpd'];
		$unit_kerja = $_POST['unit_kerja'];
		$jabatan = $_POST['jabatan'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$loker = $_POST['loker'];
		$pangkat = $_POST['pangkat'];
		$ID = $_POST['ID'];
		$nomer_sk = $_POST['nomer_sk'];
		$tanggal_sk = $_POST['tanggal_sk'];
		$masa_kerja_tahun = $_POST['masa_kerja_tahun'];
		$masa_kerja_bulan = $_POST['masa_kerja_bulan'];
		$gaji_pokok_lama = $_POST['gaji_pokok_lama'];
		$tanggal_berlaku = $_POST['tanggal_berlaku'];
		$NIP_pejabat = $_POST['NIP_pejabat'];

		$data_update = array(
			'NIP' => $NIP,
			'Nama' => $Nama,
			'Golongan' => $Golongan,
			'skpd' => $skpd,
			'unit_kerja' => $unit_kerja,
			'jabatan' => $jabatan,
			'tanggal_lahir' => $tanggal_lahir,	
			'loker' => $loker,
			'pangkat' => $pangkat,
		);
		$update_kenaikan = array(
				'ID' => $ID,
				'Golongan' => $Golongan,
				'nomer_sk' => $nomer_sk,
				'tanggal_sk' => $tanggal_sk,
				'masa_kerja_tahun' => $masa_kerja_tahun,
				'masa_kerja_bulan' => $masa_kerja_bulan,
				'gaji_pokok_lama' => $gaji_pokok_lama,
				'tanggal_berlaku' => $tanggal_berlaku,
				'NIP' => $NIP,
				'NIP_pejabat' => $NIP_pejabat,
				'Nama' => $Nama,
			);
			
		$where = array('NIP' => $NIP);
		$res = $this->Mymodel->UpdateData('data_pegawai',$data_update,$where);
		$res = $this->Mymodel->UpdateGaji('gaji',$update_kenaikan,$where);
		if($res >=1){
			$this->session->set_flashdata('pesan','Update data sukses');
			redirect('admin_pegawai/data');
		}
		else{
			echo "gagal";
		}
	}

	// ============================ delete data ========================
	public function delete($NIP){
		$where = array('NIP' => $NIP);
		$res = $this->Mymodel->DeleteData('data_pegawai',$where);
		$res1 = $this->Mymodel->DeleteData('gaji',$where);
		if(($res>=1) && ($res1>=1)){
			redirect('admin_pegawai/data');
		}
		else{
			echo "Data Gagal diHapus!!!";
		}

	}
	//========================================================

	/*function proses data*/
	public function data(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}
		else{
		$this->load->library('pagination');
		$this->load->model('Mymodel');
		$config = array();
		$config['base_url'] = base_url().'index.php/admin_pegawai/data';
		$config['total_rows'] = $this->Mymodel->count_actor();
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
		$data['gaji'] = $this->Mymodel->fetch_actor($config['per_page'], $this->uri->segment(3));
		$data['link'] = $this->pagination->create_links();

		#$data = $this->Mymodel->Getpegawai();
		$this->load->view('form_table',$data);
		}
	}
	public function search_actor(){
		$this->load->model('Mymodel');
		$NIP = $this->input->post('search');

		if(isset($NIP) and !empty($NIP)){
			$data['gaji'] = $this->Mymodel->search_actor($NIP);
			$data['link'] = '';
			$this->load->view('form_table',$data);

		}
		else{
			redirect($this->index());
		}
	}

	public function laporan_data(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}
		else{
		$this->load->library('pagination');
		$this->load->model('Mymodel');
		$config = array();
		$config['base_url'] = base_url().'index.php/admin_pegawai/data';
		$config['total_rows'] = $this->Mymodel->count_actor();
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
		$data['gaji'] = $this->Mymodel->fetch_actor($config['per_page'], $this->uri->segment(3));
		$data['link'] = $this->pagination->create_links();

		#$data = $this->Mymodel->Getpegawai();
		$this->load->view('form_laporan_data',$data);
		}
	}

}