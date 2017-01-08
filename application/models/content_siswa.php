<?php
class Content_siswa extends CI_Model{ 
		
		public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		}	
	
		public function pembayaran_kursus(){
		$no = $this->input->post('no_pendaftaran');
		$nama = $this->input->post('nama');
		$nama_file = $_FILES['bukti']['name'];
		$lokasi_file = $_FILES['bukti']['tmp_name'];
		$dir = "\struk\\";
		move_uploaded_file($lokasi_file,FCPATH.$dir.$nama_file);
		$data = array(
		'no_pendaftaran'=>$no,
		'nama'=>$nama,
		'bukti'=>$nama_file
		);
		$this->db->insert("pembayaran",$data);
		}
		
		public function user_pendaftaran($nama){
		$sql = $this->db->query("select * from pendaftaran where nama='".$nama."' and status_pelamar='Y'");	
		$data = $sql->result_array();	
		return $data;	
		}
		
		public function jadwal_siswa($siswa){
		$sql = $this->db->query("select * from jadwal where siswa='".$siswa."'");	
		$data = $sql->result_array();	
		return $data;	
		}
}		
?>