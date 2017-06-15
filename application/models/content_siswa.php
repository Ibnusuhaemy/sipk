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
		$sql = $this->db->query("SELECT * FROM jadwal
                                INNER JOIN kursus
                                ON kursus.kelas_alias = jadwal.kelas
                                INNER JOIN program
                                ON program.program_alias = jadwal.program
                                INNER JOIN user
                                ON user.id_user = jadwal.pengajar
                                WHERE jadwal.siswa='".$siswa."'
                                ");	
		$data = $sql->result_array();	
		return $data;	
		}
}		
?>