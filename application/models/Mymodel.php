<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mymodel extends CI_Model {

	public function Getpegawai($where="" ){
		 $data = $this->db->query('select * from data_pegawai '.$where);
		 return $data->result_array();
	}

	public function Getjabatan($where=""){
		$data = $this->db->query('select * from jabatan '.$where);
		return $data->result_array();
	}

	public function Getgaji($where="" ){
		$data = $this->db->query('select * from gaji '.$where);
		return $data->result_array();
	}

	public function Getunitkerja($where="" ){
		$data = $this->db->query('select * from db_unit_kerja '.$where);
		return $data->result_array();
	}

	public function getjoin($where=""){
		$data=$this->db->query("SELECT * 
			FROM data_pegawai a
			LEFT JOIN gaji b ON a.NIP = b.NIP
			LEFT JOIN gaji_baru c ON a.NIP = c.NIP");
		return $data->result_array();
	}

	public function Gettemplate($where=""){
		$data = $this->db->query('select * from template '.$where);
		return $data->result_array();
	}

	public function Getuser(){
		$data = $this->db->query('select * from user');
		return $data->result_array();
	}


	public function InsertData($tablename,$data){
		$res = $this->db->insert($tablename,$data);
		return $res;
	}

	public function UpdateData($tablename,$data,$where){
		$res = $this->db->update($tablename,$data,$where);
		return $res;
	}

	public function UpdateGaji($tablename,$data,$where){
		$res = $this->db->update($tablename,$data,$where);
		return $res;
	}

	public function DeleteData($tablename,$where){
		$res = $this->db->delete($tablename,$where);
		return $res;
	}

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	

//========================== data pegawai =============================
	public function count_actor(){
		return $this->db->count_all('data_pegawai');
	}

	public function count_jabatan(){
		return $this->db->count_all('jabatan');
	}

	public function count_unit_kerja(){
		return $this->db->count_all('db_unit_kerja');
	}

	public function fetch_actor($limit,$offset){
		$this->db->limit($limit,$offset);
		$query = $this->db->get('data_pegawai');
		if ($query->num_rows()>0) {
			return $query->result();
		} 
		else{
			return $query->result();
		}

	}

	public function fetch_unit_kerja($limit,$offset){
		$this->db->limit($limit,$offset);
		$query = $this->db->get('db_unit_kerja');
		if ($query->num_rows()>0) {
			return $query->result();
		} 
		else{
			return $query->result();
		}

	}

	public function fetch_jabatan($limit,$offset){
		$this->db->limit($limit,$offset);
		$query = $this->db->get('jabatan');
		if ($query->num_rows()>0) {
			return $query->result();
		} 
		else{
			return $query->result();
		}

	}

	public function search_actor($NIP){
		$this->db->select('*');
		$this->db->from('data_pegawai');
		$this->db->like('NIP',$NIP);
		$query = $this->db->get();
		if($query->num_rows() > 0 ){
			return $query->result();
		}
		else{
			return $query->result();
		}
	}



//======================== untuk gaji ================== //
	public function count_actors(){
		return $this->db->count_all('gaji');
	}

	public function fetch_actors($limit,$offset){
		$this->db->limit($limit,$offset);
		$query = $this->db->get('gaji');
		if ($query->num_rows()>0) {
			return $query->result();
		} 
		else{
			return $query->result();
		}
	}
	public function search_actors($NIP){
		$this->db->select('*');
		$this->db->from('gaji');
		$this->db->like('NIP',$NIP);
		$query = $this->db->get();
		if($query->num_rows() > 0 ){
			return $query->result();
		}
		else{
			return $query->result();
		}
	}

//=============================================================

	public function fetch_actorss($limit,$offset){
		$this->db->limit($limit,$offset);
		$query = $this->db->get('gaji_baru');
		if ($query->num_rows()>0) {
			return $query->result();
		} 
		else{
			return $query->result();
		}
	}

// ===================== untuk template surat ===========================//
	public function count_actora(){
		return $this->db->count_all('template');
	}

	public function fetch_actora($limit,$offset){
		$this->db->limit($limit,$offset);
		$query = $this->db->get('template');
		if ($query->num_rows()>0) {
			return $query->result();
		} 
		else{
			return $query->result();
		}
	}

		public function search_actora($judul){
		$this->db->select('*');
		$this->db->from('template');
		$this->db->like('judul',$judul);
		$query = $this->db->get();
		if($query->num_rows() > 0 ){
			return $query->result();
		}
		else{
			return $query->result();
		}
	}	
	



}






/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */