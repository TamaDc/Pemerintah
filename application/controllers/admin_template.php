<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_template extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Mymodel');
	}

public function form_surat(){
		$this->load->view('form_surat');
	}



public function add(){
	$this->load->view('form_edit_template');
}

	public function insert_template($NIP = NULL){
		$id = $_POST['id'];
		$judul = $_POST['judul'];
		$kepada = $_POST['kepada'];
		$peraturan = $_POST['peraturan'];
		$data_insert = array(
			'id' => $id,
			'judul' => $judul,
			'kepada' => $kepada,
			'peraturan' => $peraturan,
		);
		$res = $this->Mymodel->InsertData('template',$data_insert);
		$data['NIP'] = $NIP;
		if($res >=1){
			$this->session->set_flashdata('pesan','Tambah data sukses');
			redirect("admin_template/data_template/$NIP");
		}
		else{
			echo "Im sorry !!!";
		}
	}

	public function update_template($id = NULL){
		$id = $_POST['id'];
		$judul = $_POST['judul'];
		$kepada = $_POST['kepada'];
		$peraturan = $_POST['peraturan'];
		$data_update = array(
			'id' => $id,
			'judul' => $judul,
			'kepada' => $kepada,
			'peraturan' => $peraturan,
		);
		$where = array('id' => $id);
		$res = $this->Mymodel->UpdateData('template',$data_update,$where);
		if($res >=1){
			$this->session->set_flashdata('pesan','Update data sukses');
			redirect('admin_template/data_template');
		}
		else{
			echo "gagal";
		}
	}


	public function form_input_template(){
		$this->load->view('form_input_template');
	}

	public function data_template($NIP = NULL){
		if($this->session->userdata('status') != "login"){
			$this->load->view('login');
		}
		else{

		$this->load->library('pagination');
		$this->load->model('Mymodel');
		$config = array();
		$config['base_url'] = base_url().'index.php/template/data_template';
		$config['total_rows'] = $this->Mymodel->count_actora();
		$config['per_page'] = 10;

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
		$data['template'] = $this->Mymodel->fetch_actora($config['per_page'], false);
		$data['link'] = $this->pagination->create_links();
		$data['NIP'] = $NIP;
		#$data = $this->Mymodel->Getpegawai();
		$this->load->view('form_template',$data);

		
		
		}
	}

		public function search_actora(){
		$this->load->model('Mymodel');
		$NIP = $this->input->post('search');

		if(isset($judul) and !empty($judul)){
			$data['template'] = $this->Mymodel->search_actora($judul);
			$data['link'] = '';
			$this->load->view('form_template',$data);

		}
		else{
			redirect($this->index());
		}
	}

	public function edit_template($id){
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}else{
		$data['template'] = $this->Mymodel->Gettemplate("where id = '$id' ");
		$this->load->view('form_edit_template',$data);
		}
	}

}