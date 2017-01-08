<?php
class Content_user extends CI_Model{
		
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}		

	public function insert_data(){
	
	$nama_file = $_FILES['foto']['name'];
	$lokasi_file = $_FILES['foto']['tmp_name'];
	$dir = "\img\\";
	move_uploaded_file($lokasi_file,FCPATH.$dir.$nama_file);
	$data = array(
	'nama' => ''.$this->input->post('nama').'',
	'alamat' => ''.$this->input->post('alamat').'',
	'email' => ''.$this->input->post('email').'',
	'jk' => ''.$this->input->post('jk').'',
	'foto' => ''.$nama_file.''
	);		
	$this->db->insert('pendaftaran',$data);	
	
	}
	
	public function profile($id_profile){
		$sql = $this->db->query("select * from profil where id_profile = ".$id_profile."");	
		$data = $sql->result_array();
	return $data;	
	}
	
	public function layanan($id_layanan){
		$sql = $this->db->query("select * from layanan where id_layanan = ".$id_layanan."");	
		$data = $sql->result_array();
	return $data;	
	}
	
	public function about($id_about){
		$sql = $this->db->query("select * from about where id_about = ".$id_about."");	
		$data = $sql->result_array();
	return $data;	
	}
	
	
	
}



?>