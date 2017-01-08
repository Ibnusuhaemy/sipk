<?php 

class Home extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	
	public function index()
	{
		$t['menu'] ="homepage";	
		$this->load->view('page/template',$t);
	}

	public function daftar(){
		
	$t['menu'] 	="pendaftaran";	
	$this->load->view('page/template',$t);	
	}
	
	public function proses_daftar(){
	$this->load->model('content_user','content_data');
	$this->content_data->insert_data();
	redirect(base_url().'sukses');
	//echo"<script>alert('pendaftaran sudah berhasil');window.location='javascript:history.go(-1)';</script>";
	}
	
	public function sukses(){
	$t['menu'] = "sukses";
	$this->load->view('page/template',$t);
	
	}
	
	
	public function profile(){
	$t['menu'] = "profile";	
	$this->load->model('content_user','content_data');
	$t['profile'] = $this->content_data->profile(1);
	//print_r($t['profile']);
	$this->load->view('page/template',$t);
		
	}
	
	public function layanan(){
	$t['menu'] = "layanan";	
	$this->load->model('content_user','content_data');
	$t['layanan'] = $this->content_data->layanan(1);
	$this->load->view('page/template',$t);
		
	}
	
	public function about(){
	$t['menu'] = "about";	
	$this->load->model('content_user','content_data');
	$t['about'] = $this->content_data->about(1);
	$this->load->view('page/template',$t);
		
	}
}
