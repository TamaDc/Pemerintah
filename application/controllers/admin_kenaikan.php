<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Kenaikan extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Mymodel');
	}

		public function insert_kenaikan(){
		$new_golongan = $_POST['new_golongan'];
		$new_nomer_sk = $_POST['new_nomer_sk'];
		$new_tanggal_sk = $_POST['new_tanggal_sk'];
		$new_masa_kerja_tahun = $_POST['new_masa_kerja_tahun'];
		$new_masa_kerja_bulan = $_POST['new_masa_kerja_bulan'];
		//$gaji_pokok_baru = $_POST['gaji_pokok_baru'];
		$new_tanggal_berlaku = $_POST['new_tanggal_berlaku'];

		$nilai = 500000;

		if($new_masa_kerja_tahun == 2){
			 $gaji_pokok_baru = 100;
		}
		else{
			$gaji_pokok_baru  = 50;
		}	



		$data_insert = array(
			'new_golongan' => $new_golongan,
			'new_nomer_sk' => $new_nomer_sk,
			'new_tanggal_sk' => $new_tanggal_sk,
			'new_masa_kerja_tahun' => $new_masa_kerja_tahun,
			'new_masa_kerja_bulan' => $new_masa_kerja_bulan,
			'gaji_pokok_baru' => $gaji_pokok_baru,
			'new_tanggal_berlaku' => $new_tanggal_berlaku,
		);

		//print_r($data_insert);

		$res = $this->Mymodel->InsertData('gaji',$data_insert);
		if($res >=1){
			$this->session->set_flashdata('pesan','Tambah data sukses');
			redirect('admin_kenaikan/data_gaji');
		}
		else{
			echo "Im sorry !!!";
		}
	}

	public function data_gaji(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}
		else{
		$this->load->library('pagination');
		$this->load->model('Mymodel');
		$config = array();
		$config['base_url'] = base_url().'index.php/admin_kenaikan/data_gaji';
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
		//$data['gaji_baru'] = $this->Mymodel->fetch_actorss($config['per_page'], $this->uri->segment(3));
		$data['link'] = $this->pagination->create_links();

		#$data = $this->Mymodel->Getpegawai();
		$this->load->view('form_gaji',$data);
		}
	}

	public function kenaikan($ID){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}else{
		$data['gaji'] = $this->Mymodel->Getgaji("where ID = '$ID' ");
		$this->load->view('form_kenaikan',$data);
		}
	}

	public function edit_kenaikan($ID){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}else{
		$data['gaji'] = $this->Mymodel->Getgaji("where ID = '$ID' ");
		$this->load->view('form_edit_kenaikan',$data);
		}
	}


	public function update_kenaikan(){
		$ID = $_POST['ID'];
		$new_golongan = $_POST['new_golongan'];
		$new_periode = $_POST['new_periode'];
		$new_nomer_sk = $_POST['new_nomer_sk'];
		$new_tanggal_sk = $_POST['new_tanggal_sk'];
		$new_masa_kerja_tahun = $_POST['new_masa_kerja_tahun'];
		$new_masa_kerja_bulan = $_POST['new_masa_kerja_bulan'];
		//7$gaji_pokok_baru = $_POST['gaji_pokok_baru'];
		$new_tanggal_berlaku = $_POST['new_tanggal_berlaku'];



		if($new_golongan == 'I'){
			if($new_periode == 'A'){
				if($new_masa_kerja_tahun == 0){
					$gaji_pokok_baru = 1486500;
				}
				elseif ($new_masa_kerja_tahun == 2) {
					$gaji_pokok_baru = 1533400;	
				}
				elseif ($new_masa_kerja_tahun == 4) {
					$gaji_pokok_baru = 1581700;
				}
				elseif ($new_masa_kerja_tahun == 6) {
					$gaji_pokok_baru = 1631500;
				}
				elseif ($new_masa_kerja_tahun == 8) {
					$gaji_pokok_baru = 1682900;
				}
				elseif ($new_masa_kerja_tahun == 10) {
					$gaji_pokok_baru = 1735900;	
				}
				elseif ($new_masa_kerja_tahun == 12) {
					$gaji_pokok_baru = 1790500;
				}
				elseif ($new_masa_kerja_tahun == 14) {
					$gaji_pokok_baru = 1846900;
				}
				elseif ($new_masa_kerja_tahun == 16) {
					$gaji_pokok_baru = 1905100;
				}
				elseif ($new_masa_kerja_tahun == 18) {
					$gaji_pokok_baru = 1965100;	
				}
				elseif ($new_masa_kerja_tahun == 20) {
					$gaji_pokok_baru = 2027000;
				}
				elseif ($new_masa_kerja_tahun == 22) {
					$gaji_pokok_baru = 2090800;
				}
				elseif ($new_masa_kerja_tahun == 24) {
					$gaji_pokok_baru = 2156700;
				}
				elseif ($new_masa_kerja_tahun == 26) {
					$gaji_pokok_baru = 2224600;
				}
			}
			if($new_periode == 'B'){
				if($new_masa_kerja_tahun == 3){
					$gaji_pokok_baru = 1623400;
				}
				elseif ($new_masa_kerja_tahun == 5) {
					$gaji_pokok_baru = 1674500;
				}
				elseif ($new_masa_kerja_tahun == 7) {
					$gaji_pokok_baru = 1727300;
				}
				elseif ($new_masa_kerja_tahun == 9) {
					$gaji_pokok_baru = 1781700;
				}
				elseif ($new_masa_kerja_tahun == 11) {
					$gaji_pokok_baru = 1837800;
				}
				elseif ($new_masa_kerja_tahun == 13) {
					$gaji_pokok_baru = 1895700;
				}
				elseif ($new_masa_kerja_tahun == 15) {
					$gaji_pokok_baru = 1955400;
				}
				elseif ($new_masa_kerja_tahun == 17) {
					$gaji_pokok_baru = 2016900;
				}
				elseif ($new_masa_kerja_tahun == 19) {
					$gaji_pokok_baru = 2080500;
				}
				elseif ($new_masa_kerja_tahun == 21) {
					$gaji_pokok_baru = 2146000;
				}
				elseif ($new_masa_kerja_tahun == 23) {
					$gaji_pokok_baru = 2213600;
				}
				elseif ($new_masa_kerja_tahun == 25) {
					$gaji_pokok_baru = 2283300;
				}
				elseif ($new_masa_kerja_tahun == 27) {
					$gaji_pokok_baru = 2355200;
				}
			}
			elseif($new_periode == 'C'){
				if($new_masa_kerja_tahun == 3){
					$gaji_pokok_baru = 1692100;
				}
				elseif ($new_masa_kerja_tahun == 5) {
					$gaji_pokok_baru = 1745400;
				}
				elseif ($new_masa_kerja_tahun == 7) {
					$gaji_pokok_baru = 1800300;
				}
				elseif ($new_masa_kerja_tahun == 9) {
					$gaji_pokok_baru = 1857000;
				}
				elseif ($new_masa_kerja_tahun == 11) {
					$gaji_pokok_baru = 1915500;
				}
				elseif ($new_masa_kerja_tahun == 13) {
					$gaji_pokok_baru = 1975800;
				}
				elseif ($new_masa_kerja_tahun == 15) {
					$gaji_pokok_baru = 2038100;
				}
				elseif ($new_masa_kerja_tahun == 17) {
					$gaji_pokok_baru = 2102300;
				}
				elseif ($new_masa_kerja_tahun == 19) {
					$gaji_pokok_baru = 2168500;
				}
				elseif ($new_masa_kerja_tahun == 21) {
					$gaji_pokok_baru = 2236800;
				}
				elseif ($new_masa_kerja_tahun == 23) {
					$gaji_pokok_baru = 2307200;
				}
				elseif ($new_masa_kerja_tahun == 25) {
					$gaji_pokok_baru = 2379900;
				}
				elseif ($new_masa_kerja_tahun == 27) {
					$gaji_pokok_baru = 2454800;
				}
			}
			elseif($new_periode == 'D'){
				if($new_masa_kerja_tahun == 3){
					$gaji_pokok_baru = 1763600;
				}
				elseif ($new_masa_kerja_tahun == 5) {
					$gaji_pokok_baru = 1819200;
				}
				elseif ($new_masa_kerja_tahun == 7) {
					$gaji_pokok_baru = 1876500;
				}
				elseif ($new_masa_kerja_tahun == 9) {
					$gaji_pokok_baru = 1935600;
				}
				elseif ($new_masa_kerja_tahun == 11) {
					$gaji_pokok_baru = 1996500;
				}
				elseif ($new_masa_kerja_tahun == 13) {
					$gaji_pokok_baru = 2059400;
				}
				elseif ($new_masa_kerja_tahun == 15) {
					$gaji_pokok_baru = 2124300;
				}
				elseif ($new_masa_kerja_tahun == 17) {
					$gaji_pokok_baru = 2191200;
				}
				elseif ($new_masa_kerja_tahun == 19) {
					$gaji_pokok_baru = 2260200;
				}
				elseif ($new_masa_kerja_tahun == 21) {
					$gaji_pokok_baru = 2331400;
				}
				elseif ($new_masa_kerja_tahun == 23) {
					$gaji_pokok_baru = 2404800;
				}
				elseif ($new_masa_kerja_tahun == 25) {
					$gaji_pokok_baru = 2480500;
				}
				elseif ($new_masa_kerja_tahun == 27) {
					$gaji_pokok_baru = 2558700;
				}
			}
		}
		elseif($new_golongan == 'II'){
			if($new_periode == 'A'){
				if($new_masa_kerja_tahun == 0){
					$gaji_pokok_baru = 1926000;
				}
				elseif ($new_masa_kerja_tahun == 1) {
					$gaji_pokok_baru = 1956300;	
				}
				elseif ($new_masa_kerja_tahun == 3) {
					$gaji_pokok_baru = 2017900;
				}
				elseif ($new_masa_kerja_tahun == 7) {
					$gaji_pokok_baru = 2081500;
				}
				elseif ($new_masa_kerja_tahun == 9) {
					$gaji_pokok_baru = 2147000;
				}
				elseif ($new_masa_kerja_tahun == 11) {
					$gaji_pokok_baru = 1956300;	
				}
				elseif ($new_masa_kerja_tahun == 13) {
					$gaji_pokok_baru = 2017900;
				}
				elseif ($new_masa_kerja_tahun == 15) {
					$gaji_pokok_baru = 2081500;
				}
				elseif ($new_masa_kerja_tahun == 17) {
					$gaji_pokok_baru = 2147000;
				}
				elseif ($new_masa_kerja_tahun == 19) {
					$gaji_pokok_baru = 1956300;	
				}
				elseif ($new_masa_kerja_tahun == 21) {
					$gaji_pokok_baru = 2927600;
				}
				elseif ($new_masa_kerja_tahun == 23) {
					$gaji_pokok_baru = 3019800;
				}
				elseif ($new_masa_kerja_tahun == 25) {
					$gaji_pokok_baru = 3114900;
				}
				elseif ($new_masa_kerja_tahun == 27) {
					$gaji_pokok_baru = 3213000;
				}
			}
			if($new_periode == 'B'){
				if($new_masa_kerja_tahun == 3){
					$gaji_pokok_baru = 2103300;
				}
				elseif ($new_masa_kerja_tahun == 5) {
					$gaji_pokok_baru = 2169500;
				}
				elseif ($new_masa_kerja_tahun == 7) {
					$gaji_pokok_baru = 2237900;
				}
				elseif ($new_masa_kerja_tahun == 9) {
					$gaji_pokok_baru = 2308300;
				}
				elseif ($new_masa_kerja_tahun == 11) {
					$gaji_pokok_baru = 2381100;
				}
				elseif ($new_masa_kerja_tahun == 13) {
					$gaji_pokok_baru = 2456000;
				}
				elseif ($new_masa_kerja_tahun == 15) {
					$gaji_pokok_baru = 2533400;
				}
				elseif ($new_masa_kerja_tahun == 17) {
					$gaji_pokok_baru = 2613200;
				}
				elseif ($new_masa_kerja_tahun == 19) {
					$gaji_pokok_baru = 2695500;
				}
				elseif ($new_masa_kerja_tahun == 21) {
					$gaji_pokok_baru = 2780400;
				}
				elseif ($new_masa_kerja_tahun == 23) {
					$gaji_pokok_baru = 2867900;
				}
				elseif ($new_masa_kerja_tahun == 25) {
					$gaji_pokok_baru = 2958300;
				}
				elseif ($new_masa_kerja_tahun == 27) {
					$gaji_pokok_baru = 3051400;
				}
				elseif ($new_masa_kerja_tahun == 23) {
					$gaji_pokok_baru = 3147600;
				}
				elseif ($new_masa_kerja_tahun == 25) {
					$gaji_pokok_baru = 3246700;
				}
				elseif ($new_masa_kerja_tahun == 27) {
					$gaji_pokok_baru = 3348900;
				}
			}
			elseif($new_periode == 'C'){
				if($new_masa_kerja_tahun == 3){
					$gaji_pokok_baru = 2192300;
				}
				elseif ($new_masa_kerja_tahun == 5) {
					$gaji_pokok_baru = 2261300;
				}
				elseif ($new_masa_kerja_tahun == 7) {
					$gaji_pokok_baru = 2332500;
				}
				elseif ($new_masa_kerja_tahun == 9) {
					$gaji_pokok_baru = 2406000;
				}
				elseif ($new_masa_kerja_tahun == 11) {
					$gaji_pokok_baru = 2481800;
				}
				elseif ($new_masa_kerja_tahun == 13) {
					$gaji_pokok_baru = 2261300;
				}
				elseif ($new_masa_kerja_tahun == 15) {
					$gaji_pokok_baru = 2332500;
				}
				elseif ($new_masa_kerja_tahun == 17) {
					$gaji_pokok_baru = 2406000;
				}
				elseif ($new_masa_kerja_tahun == 19) {
					$gaji_pokok_baru = 2481800;
				}
				elseif ($new_masa_kerja_tahun == 21) {
					$gaji_pokok_baru = 2898000;
				}
				elseif ($new_masa_kerja_tahun == 23) {
					$gaji_pokok_baru = 2989300;
				}
				elseif ($new_masa_kerja_tahun == 25) {
					$gaji_pokok_baru = 3083400;
				}
				elseif ($new_masa_kerja_tahun == 27) {
					$gaji_pokok_baru = 3180500;
				}
				elseif ($new_masa_kerja_tahun == 29) {
					$gaji_pokok_baru = 3280700;
				}
				elseif ($new_masa_kerja_tahun == 31) {
					$gaji_pokok_baru = 3384000;
				}
				elseif ($new_masa_kerja_tahun == 33) {
					$gaji_pokok_baru = 3490600;
				}
			}
			elseif($new_periode == 'D'){
				if($new_masa_kerja_tahun == 3){
					$gaji_pokok_baru = 2285000;
				}
				elseif ($new_masa_kerja_tahun == 5) {
					$gaji_pokok_baru = 2357000;
				}
				elseif ($new_masa_kerja_tahun == 7) {
					$gaji_pokok_baru = 2431200;
				}
				elseif ($new_masa_kerja_tahun == 9) {
					$gaji_pokok_baru = 2507800;
				}
				elseif ($new_masa_kerja_tahun == 11) {
					$gaji_pokok_baru = 2586700;
				}
				elseif ($new_masa_kerja_tahun == 13) {
					$gaji_pokok_baru = 2668200;
				}
				elseif ($new_masa_kerja_tahun == 15) {
					$gaji_pokok_baru = 2752300;
				}
				elseif ($new_masa_kerja_tahun == 17) {
					$gaji_pokok_baru = 2838900;
				}
				elseif ($new_masa_kerja_tahun == 19) {
					$gaji_pokok_baru = 2928300;
				}
				elseif ($new_masa_kerja_tahun == 21) {
					$gaji_pokok_baru = 3020600;
				}
				elseif ($new_masa_kerja_tahun == 23) {
					$gaji_pokok_baru = 3115700;
				}
				elseif ($new_masa_kerja_tahun == 25) {
					$gaji_pokok_baru = 3213800;
				}
				elseif ($new_masa_kerja_tahun == 27) {
					$gaji_pokok_baru = 3315300;
				}
				elseif ($new_masa_kerja_tahun == 29) {
					$gaji_pokok_baru = 3419500;
				}elseif ($new_masa_kerja_tahun == 31) {
					$gaji_pokok_baru = 3527200;
				}
				elseif ($new_masa_kerja_tahun == 33) {
					$gaji_pokok_baru = 3638200;
				}
			}
		}
		elseif($new_golongan == 'III'){
			if($new_periode == 'A'){
				if($new_masa_kerja_tahun == 0){
					$gaji_pokok_baru = 2456700;
				}
				elseif ($new_masa_kerja_tahun == 2) {
					$gaji_pokok_baru = 2534000;	
				}
				elseif ($new_masa_kerja_tahun == 4) {
					$gaji_pokok_baru = 2613800;
				}
				elseif ($new_masa_kerja_tahun == 6) {
					$gaji_pokok_baru = 2696200;
				}
				elseif ($new_masa_kerja_tahun == 8) {
					$gaji_pokok_baru = 2781100;
				}
				elseif ($new_masa_kerja_tahun == 10) {
					$gaji_pokok_baru = 2868700;
				}
				elseif ($new_masa_kerja_tahun == 12) {
					$gaji_pokok_baru = 2959000;
				}
				elseif ($new_masa_kerja_tahun == 14) {
					$gaji_pokok_baru = 3052200;
				}
				elseif ($new_masa_kerja_tahun == 16) {
					$gaji_pokok_baru = 3148300;
				}
				elseif ($new_masa_kerja_tahun == 18) {
					$gaji_pokok_baru = 3247500;
				}
				elseif ($new_masa_kerja_tahun == 20) {
					$gaji_pokok_baru = 3349800;
				}
				elseif ($new_masa_kerja_tahun == 22) {
					$gaji_pokok_baru = 3455300;
				}
				elseif ($new_masa_kerja_tahun == 24) {
					$gaji_pokok_baru = 3564100;
				}
				elseif ($new_masa_kerja_tahun == 26) {
					$gaji_pokok_baru = 3676400;
				}
				elseif ($new_masa_kerja_tahun == 28) {
					$gaji_pokok_baru = 3792100;
				}
				elseif ($new_masa_kerja_tahun == 30) {
					$gaji_pokok_baru = 3911600;
				}
				elseif ($new_masa_kerja_tahun == 32) {
					$gaji_pokok_baru = 4034800;
				}
			}
			if($new_periode == 'B'){
				if($new_masa_kerja_tahun == 0){
					$gaji_pokok_baru = 2560600;
				}
				elseif ($new_masa_kerja_tahun == 2) {
					$gaji_pokok_baru = 2641200;
				}
				elseif ($new_masa_kerja_tahun == 4) {
					$gaji_pokok_baru = 2724400;
				}
				elseif ($new_masa_kerja_tahun == 6) {
					$gaji_pokok_baru = 2810200;
				}
				elseif ($new_masa_kerja_tahun == 8) {
					$gaji_pokok_baru = 2898700;
				}
				elseif ($new_masa_kerja_tahun == 10) {
					$gaji_pokok_baru = 2990000;
				}
				elseif ($new_masa_kerja_tahun == 12) {
					$gaji_pokok_baru = 3084200;
				}
				elseif ($new_masa_kerja_tahun == 14) {
					$gaji_pokok_baru = 3181300;
				}
				elseif ($new_masa_kerja_tahun == 16) {
					$gaji_pokok_baru = 3281500;
				}elseif ($new_masa_kerja_tahun == 18) {
					$gaji_pokok_baru = 3384900;
				}
				elseif ($new_masa_kerja_tahun == 20) {
					$gaji_pokok_baru = 3491500;
				}
				elseif ($new_masa_kerja_tahun == 22) {
					$gaji_pokok_baru = 3601400;
				}
				elseif ($new_masa_kerja_tahun == 24) {
					$gaji_pokok_baru = 3714900;
				}
				elseif ($new_masa_kerja_tahun == 26) {
					$gaji_pokok_baru = 3831900;
				}elseif ($new_masa_kerja_tahun == 28) {
					$gaji_pokok_baru = 3952600;
				}
				elseif ($new_masa_kerja_tahun == 30) {
					$gaji_pokok_baru = 4077000;
				}
				elseif ($new_masa_kerja_tahun == 32) {
					$gaji_pokok_baru = 4205400;
				}
			}
			elseif($new_periode == 'C'){
				if($new_masa_kerja_tahun == 0){
					$gaji_pokok_baru = 2668900;
				}
				elseif ($new_masa_kerja_tahun == 2) {
					$gaji_pokok_baru = 2752900;
				}
				elseif ($new_masa_kerja_tahun == 4) {
					$gaji_pokok_baru = 2839700;
				}
				elseif ($new_masa_kerja_tahun == 6) {
					$gaji_pokok_baru = 2929100;
				}
				elseif ($new_masa_kerja_tahun == 8) {
					$gaji_pokok_baru = 3021300;
				}
				elseif ($new_masa_kerja_tahun == 10) {
					$gaji_pokok_baru = 3116500;
				}
				elseif ($new_masa_kerja_tahun == 12) {
					$gaji_pokok_baru = 3214700;
				}
				elseif ($new_masa_kerja_tahun == 14) {
					$gaji_pokok_baru = 3315900;
				}
				elseif ($new_masa_kerja_tahun == 16) {
					$gaji_pokok_baru = 3420300;
				}
				elseif ($new_masa_kerja_tahun == 18) {
					$gaji_pokok_baru = 3528100;
				}
				elseif ($new_masa_kerja_tahun == 20) {
					$gaji_pokok_baru = 3639200;
				}
				elseif ($new_masa_kerja_tahun == 22) {
					$gaji_pokok_baru = 3753800;
				}
				elseif ($new_masa_kerja_tahun == 24) {
					$gaji_pokok_baru = 3872000;
				}
				elseif ($new_masa_kerja_tahun == 26) {
					$gaji_pokok_baru = 3994000;
				}
				elseif ($new_masa_kerja_tahun == 28) {
					$gaji_pokok_baru = 4119700;
				}
				elseif ($new_masa_kerja_tahun == 30) {
					$gaji_pokok_baru = 4249500;
				}
				elseif ($new_masa_kerja_tahun == 32) {
					$gaji_pokok_baru = 4383300;
				}
			}
			elseif($new_periode == 'D'){
				if($new_masa_kerja_tahun == 0){
					$gaji_pokok_baru = 2781800;
				}
				elseif ($new_masa_kerja_tahun == 2) {
					$gaji_pokok_baru = 2869400;
				}
				elseif ($new_masa_kerja_tahun == 4) {
					$gaji_pokok_baru = 2959800;
				}
				elseif ($new_masa_kerja_tahun == 6) {
					$gaji_pokok_baru = 3053000;
				}
				elseif ($new_masa_kerja_tahun == 8) {
					$gaji_pokok_baru = 3149100;
				}
				elseif ($new_masa_kerja_tahun == 10) {
					$gaji_pokok_baru = 3248300;
				}
				elseif ($new_masa_kerja_tahun == 12) {
					$gaji_pokok_baru = 3350600;
				}
				elseif ($new_masa_kerja_tahun == 14) {
					$gaji_pokok_baru = 3456200;
				}
				elseif ($new_masa_kerja_tahun == 16) {
					$gaji_pokok_baru = 3565000;
				}
				elseif ($new_masa_kerja_tahun == 18) {
					$gaji_pokok_baru = 3677300;
				}
				elseif ($new_masa_kerja_tahun == 20) {
					$gaji_pokok_baru = 3793100;
				}
				elseif ($new_masa_kerja_tahun == 22) {
					$gaji_pokok_baru = 3912600;
				}
				elseif ($new_masa_kerja_tahun == 24) {
					$gaji_pokok_baru = 4035800;
				}
				elseif ($new_masa_kerja_tahun == 26) {
					$gaji_pokok_baru = 4162900;
				}
				elseif ($new_masa_kerja_tahun == 28) {
					$gaji_pokok_baru = 4294000;
				}
				elseif ($new_masa_kerja_tahun == 30) {
					$gaji_pokok_baru = 4429300;
				}
				elseif ($new_masa_kerja_tahun == 32) {
					$gaji_pokok_baru = 4568800;
				}
			}
		}
		elseif($new_golongan == 'IV'){
			if($new_periode == 'A'){
				if($new_masa_kerja_tahun == 0){
					$gaji_pokok_baru = 2899500;
				}
				elseif ($new_masa_kerja_tahun == 2) {
					$gaji_pokok_baru = 2990800;	
				}
				elseif ($new_masa_kerja_tahun == 4) {
					$gaji_pokok_baru = 3085000;
				}
				elseif ($new_masa_kerja_tahun == 6) {
					$gaji_pokok_baru = 3182100;
				}
				elseif ($new_masa_kerja_tahun == 8) {
					$gaji_pokok_baru = 3282400;
				}
				elseif ($new_masa_kerja_tahun == 10) {
					$gaji_pokok_baru = 3385700;
				}
				elseif ($new_masa_kerja_tahun == 12) {
					$gaji_pokok_baru = 3492400;
				}
				elseif ($new_masa_kerja_tahun == 14) {
					$gaji_pokok_baru = 3602400;
				}
				elseif ($new_masa_kerja_tahun == 16) {
					$gaji_pokok_baru = 3715800;
				}
				elseif ($new_masa_kerja_tahun == 18) {
					$gaji_pokok_baru = 3832800;
				}
				elseif ($new_masa_kerja_tahun == 20) {
					$gaji_pokok_baru = 3953600;
				}
				elseif ($new_masa_kerja_tahun == 22) {
					$gaji_pokok_baru = 4078100;
				}
				elseif ($new_masa_kerja_tahun == 24) {
					$gaji_pokok_baru = 4206500;
				}
				elseif ($new_masa_kerja_tahun == 26) {
					$gaji_pokok_baru = 4339000;
				}
				elseif ($new_masa_kerja_tahun == 28) {
					$gaji_pokok_baru = 4475700;
				}
				elseif ($new_masa_kerja_tahun == 30) {
					$gaji_pokok_baru = 4616600;
				}
				elseif ($new_masa_kerja_tahun == 32) {
					$gaji_pokok_baru = 4762000;
				}
			}
			if($new_periode == 'B'){
				if($new_masa_kerja_tahun == 0){
					$gaji_pokok_baru = 3022100;
				}
				elseif ($new_masa_kerja_tahun == 2) {
					$gaji_pokok_baru = 3117300;
				}
				elseif ($new_masa_kerja_tahun == 4) {
					$gaji_pokok_baru = 3215500;
				}
				elseif ($new_masa_kerja_tahun == 6) {
					$gaji_pokok_baru = 3316700;
				}
				elseif ($new_masa_kerja_tahun == 8) {
					$gaji_pokok_baru = 3421200;
				}
				elseif ($new_masa_kerja_tahun == 10) {
					$gaji_pokok_baru = 3528900;
				}
				elseif ($new_masa_kerja_tahun == 12) {
					$gaji_pokok_baru = 3640100;
				}
				elseif ($new_masa_kerja_tahun == 14) {
					$gaji_pokok_baru = 3754700;
				}
				elseif ($new_masa_kerja_tahun == 16) {
					$gaji_pokok_baru = 3873000;
				}
				elseif ($new_masa_kerja_tahun == 18) {
					$gaji_pokok_baru = 3995000;
				}
				elseif ($new_masa_kerja_tahun == 20) {
					$gaji_pokok_baru = 4120800;
				}
				elseif ($new_masa_kerja_tahun == 22) {
					$gaji_pokok_baru = 4250600;
				}
				elseif ($new_masa_kerja_tahun == 24) {
					$gaji_pokok_baru = 4384400;
				}
				elseif ($new_masa_kerja_tahun == 26) {
					$gaji_pokok_baru = 4522500;
				}
				elseif ($new_masa_kerja_tahun == 28) {
					$gaji_pokok_baru = 4665000;
				}
				elseif ($new_masa_kerja_tahun == 30) {
					$gaji_pokok_baru = 4811900;
				}
				elseif ($new_masa_kerja_tahun == 32) {
					$gaji_pokok_baru = 4963400;
				}
			}
			elseif($new_periode == 'C'){
				if($new_masa_kerja_tahun == 0){
					$gaji_pokok_baru = 3149900;
				}
				elseif ($new_masa_kerja_tahun == 2) {
					$gaji_pokok_baru = 3249100;
				}
				elseif ($new_masa_kerja_tahun == 4) {
					$gaji_pokok_baru = 3351500;
				}
				elseif ($new_masa_kerja_tahun == 6) {
					$gaji_pokok_baru = 3457000;
				}
				elseif ($new_masa_kerja_tahun == 8) {
					$gaji_pokok_baru = 3656900;
				}elseif ($new_masa_kerja_tahun == 10) {
					$gaji_pokok_baru = 3678200;
				}
				elseif ($new_masa_kerja_tahun == 12) {
					$gaji_pokok_baru = 3794100;
				}
				elseif ($new_masa_kerja_tahun == 14) {
					$gaji_pokok_baru = 3913600;
				}
				elseif ($new_masa_kerja_tahun == 16) {
					$gaji_pokok_baru = 4036800;
				}
				elseif ($new_masa_kerja_tahun == 18) {
					$gaji_pokok_baru = 4146400;
				}
				elseif ($new_masa_kerja_tahun == 20) {
					$gaji_pokok_baru = 4295100;
				}
				elseif ($new_masa_kerja_tahun == 22) {
					$gaji_pokok_baru = 4430400;
				}
				elseif ($new_masa_kerja_tahun == 24) {
					$gaji_pokok_baru = 4569900;
				}
				elseif ($new_masa_kerja_tahun == 26) {
					$gaji_pokok_baru = 4713800;
				}
				elseif ($new_masa_kerja_tahun == 28) {
					$gaji_pokok_baru = 4862300;
				}
				elseif ($new_masa_kerja_tahun == 30) {
					$gaji_pokok_baru = 5015400;
				}
				elseif ($new_masa_kerja_tahun == 32) {
					$gaji_pokok_baru = 5173400;
				}
			}
			elseif($new_periode == 'D'){
				if($new_masa_kerja_tahun == 0){
					$gaji_pokok_baru = 3283200;
				}
				elseif ($new_masa_kerja_tahun == 2) {
					$gaji_pokok_baru = 3386600;
				}
				elseif ($new_masa_kerja_tahun == 4) {
					$gaji_pokok_baru = 3493200;
				}
				elseif ($new_masa_kerja_tahun == 6) {
					$gaji_pokok_baru = 3603300;
				}
				elseif ($new_masa_kerja_tahun == 8) {
					$gaji_pokok_baru = 3716700;
				}
				elseif ($new_masa_kerja_tahun == 10) {
					$gaji_pokok_baru = 3833800;
				}
				elseif ($new_masa_kerja_tahun == 12) {
					$gaji_pokok_baru = 3954600;
				}
				elseif ($new_masa_kerja_tahun == 14) {
					$gaji_pokok_baru = 4079100;
				}
				elseif ($new_masa_kerja_tahun == 16) {
					$gaji_pokok_baru = 4207600;
				}
				elseif ($new_masa_kerja_tahun == 18) {
					$gaji_pokok_baru = 4340100;
				}
				elseif ($new_masa_kerja_tahun == 20) {
					$gaji_pokok_baru = 4476800;
				}
				elseif ($new_masa_kerja_tahun == 22) {
					$gaji_pokok_baru = 4617800;
				}
				elseif ($new_masa_kerja_tahun == 24) {
					$gaji_pokok_baru = 4763200;
				}
				elseif ($new_masa_kerja_tahun == 26) {
					$gaji_pokok_baru = 4913200;
				}
				elseif ($new_masa_kerja_tahun == 28) {
					$gaji_pokok_baru = 5068000;
				}
				elseif ($new_masa_kerja_tahun == 30) {
					$gaji_pokok_baru = 5227600;
				}
				elseif ($new_masa_kerja_tahun == 32) {
					$gaji_pokok_baru = 5392200;
				}
			}
			elseif($new_periode == 'E'){
				if($new_masa_kerja_tahun == 0){
					$gaji_pokok_baru = 3422100;
				}
				elseif ($new_masa_kerja_tahun == 2) {
					$gaji_pokok_baru = 3529800;
				}
				elseif ($new_masa_kerja_tahun == 4) {
					$gaji_pokok_baru = 3641000;
				}
				elseif ($new_masa_kerja_tahun == 6) {
					$gaji_pokok_baru = 3755700;
				}
				elseif ($new_masa_kerja_tahun == 8) {
					$gaji_pokok_baru = 3874000;
				}
				elseif ($new_masa_kerja_tahun == 10) {
					$gaji_pokok_baru = 3996000;
				}
				elseif ($new_masa_kerja_tahun == 12) {
					$gaji_pokok_baru = 4212800;
				}
				elseif ($new_masa_kerja_tahun == 14) {
					$gaji_pokok_baru = 4251600;
				}
				elseif ($new_masa_kerja_tahun == 16) {
					$gaji_pokok_baru = 4385600;
				}
				elseif ($new_masa_kerja_tahun == 18) {
					$gaji_pokok_baru = 4523700;
				}
				elseif ($new_masa_kerja_tahun == 20) {
					$gaji_pokok_baru = 4666100;
				}
				elseif ($new_masa_kerja_tahun == 22) {
					$gaji_pokok_baru = 4813100;
				}
				elseif ($new_masa_kerja_tahun == 24) {
					$gaji_pokok_baru = 4964700;
				}
				elseif ($new_masa_kerja_tahun == 26) {
					$gaji_pokok_baru = 5121100;
				}
				elseif ($new_masa_kerja_tahun == 28) {
					$gaji_pokok_baru = 5282300;
				}
				elseif ($new_masa_kerja_tahun == 30) {
					$gaji_pokok_baru = 5448700;
				}
				elseif ($new_masa_kerja_tahun == 32) {
					$gaji_pokok_baru = 5620300;
				}
			}
		}
		else{
			$gaji_pokok_baru = 0 ; 
		}


		$data_update = array(
			'ID' => $ID,
			'new_golongan' => $new_golongan,
			'new_periode' => $new_periode,
			'new_nomer_sk' => $new_nomer_sk,
			'new_tanggal_sk' => $new_tanggal_sk,
			'new_masa_kerja_tahun' => $new_masa_kerja_tahun,
			'new_masa_kerja_bulan' => $new_masa_kerja_bulan,
			'gaji_pokok_baru' => $gaji_pokok_baru,
			'new_tanggal_berlaku' => $new_tanggal_berlaku,	
		);

		//print_r($data_update);

		$where = array('ID' => $ID);
		$res = $this->Mymodel->UpdateData('gaji',$data_update,$where);
		if($res >=1){
			$this->session->set_flashdata('pesan','Update data sukses');
			redirect('admin_kenaikan/data_gaji');
		}
		else{
			$this->session->set_flashdata('pesan','Data Gagal periksa Kembali');
			redirect('admin_kenaikan/data_gaji');
		}
	}

	public function search_actorS(){
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