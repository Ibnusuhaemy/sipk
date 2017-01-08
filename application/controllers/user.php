<?php
class User extends CI_Controller{
	
	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}	
	
	public function pembayaran(){
	$t['mn'] = "user/pembayaran";
	$this->load->view('admin/home',$t);	
	}
	
	public function proses_pembayaran(){
		$this->load->model('content_siswa','content_data');
		$this->content_data->pembayaran_kursus();
		//redirect(base_url().'user_pembayaran');
		echo"<script>alert('pembayaran sudah berhasil');window.location='javascript:history.go(-1)';</script>";
		
	}
	
	public function pendaftaran(){
		$nama = $this->session->userdata('username');
		$this->load->model('content_siswa','content_data');
		$t['pendaftaran'] = $this->content_data->user_pendaftaran($nama);
		$t['mn'] = "user/pendaftaran";
		$this->load->view('admin/home',$t);
	}
	
	public function user_jadwal(){
	$siswa = $this->session->userdata('id_user');
	$this->load->model('content_siswa','content_data');
	$t['jadwal'] = $this->content_data->jadwal_siswa($siswa);	
	$t['mn']	= "user/jadwal";
	$this->load->view('admin/home',$t);	
		
	}
	
}




?>