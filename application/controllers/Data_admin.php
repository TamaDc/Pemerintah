<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_admin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Mymodel');
	}

	public function admin_admin(){
		$this->load->model('Mymodel');
		$data = $this->Mymodel->Getuser();
		$this->load->view('form_admin',array('data' => $data));

	}

	public function tambah(){
		$this->load->view('form_input_admin');
	}
}