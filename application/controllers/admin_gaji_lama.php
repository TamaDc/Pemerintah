<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_gaji_lama extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Mymodel');
	}

	// ================== tambah data gaji ==========================================
	public function insert_II(){
		$Nama = $_POST['Nama'];
		$Golongan = $_POST['Golongan'];
		$periode = $_POST['periode'];
		$nomer_sk = $_POST['nomer_sk'];
		$tanggal_sk = $_POST['tanggal_sk'];
		$masa_kerja_tahun = $_POST['masa_kerja_tahun'];
		$masa_kerja_bulan = $_POST['masa_kerja_bulan'];
		$gaji_pokok_lama = $_POST['gaji_pokok_lama'];
		$tanggal_berlaku = $_POST['tanggal_berlaku'];
		$NIP = $_POST['NIP'];
		$NIP_pejabat = $_POST['NIP_pejabat'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
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
		$res = $this->Mymodel->InsertData('gaji',$data_insert);
		if($res >=1){
			$this->session->set_flashdata('pesan','Tambah data sukses');
			redirect('admin_pegawai/data');
		}
		else{
			echo "Im sorry !!!";
		}
	}


	//=============================== edit data gaji =======================

	public function edit_gaji($NIP){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}else{
		$data['gaji'] = $this->Mymodel->Getgaji("where NIP = '$NIP' ");
		$this->load->view('form_edit_gaji',$data);
		}
	}

	 // =========================== update data gaji =======================
	public function update_gaji(){
		$ID = $_POST['ID'];
		$Golongan = $_POST['Golongan'];
		$nomer_sk = $_POST['nomer_sk'];
		$tanggal_sk = $_POST['tanggal_sk'];
		$masa_kerja_tahun = $_POST['masa_kerja_tahun'];
		$masa_kerja_bulan = $_POST['masa_kerja_bulan'];
		$gaji_pokok_lama = $_POST['gaji_pokok_lama'];
		$tanggal_berlaku = $_POST['tanggal_berlaku'];
		$NIP = $_POST['NIP'];
		$NIP_pejabat = $_POST['NIP_pejabat'];
		$Nama = $_POST['Nama'];
			
			$data_update = array(
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
		$res = $this->Mymodel->UpdateGaji('gaji',$data_update,$where);
		if($res >=1){
			$this->session->set_flashdata('pesan','Update data sukses');
			redirect('admin_pegawai/data');
		}
		else{
			echo "gagal";
		}
	}

	


		public function search_actors(){
		$this->load->model('Mymodel');
		$NIP = $this->input->post('search');

		if(isset($NIP) and !empty($NIP)){
			$data['gaji'] = $this->Mymodel->search_actors($NIP);
			$data['link'] = '';
			$this->load->view('form_gaji',$data);

		}
		else{
			redirect($this->index());
		}
	}

}