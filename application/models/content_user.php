<?php
class Content_user extends CI_Model{
		
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}		

	public function insert_data(){
	
        $nama_file      = $_FILES['foto']['name'];
        $lokasi_file    = $_FILES['foto']['tmp_name'];
        $dir = "\img\\";
        
        move_uploaded_file($lokasi_file,FCPATH.$dir.$nama_file);
        echo $this->input->post('jk');
        $jenis_kelamin = $this->input->post('jk');
        echo $jenis_kelamin;
        
        $data = array(
            'nama' => ''.$this->input->post('nama').'',
            'alamat' => ''.$this->input->post('alamat').'',
            'telepon' => ''.$this->input->post('telepon').'',
            'jk' => ''.$jenis_kelamin.'',
            'foto' => ''.$nama_file.''
        );		
        $this->db->insert('pendaftaran',$data);
        
        
        $data2 = array(
            'pengajar' => '0',
            'siswa' => '0',
            'kelas' => ''.$this->input->post('kelas').'',
            'program' => ''.$this->input->post('program').'',
            'nilai' => '0'
        );
        $this->db->insert('jadwal', $data2);
        
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
	
	public function pengumuman(){
		$sql = $this->db->query("SELECT * FROM pengumuman");	
        $data = $sql->result_array();
	   return $data;	
	}
	
	
	
}



?>