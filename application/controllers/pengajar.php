<?php
class Pengajar extends CI_Controller{
	
	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}	
	
	public function jadwal(){
        $guru = $this->session->userdata('id_user');	
        $this->load->model('content_pengajar','content_data');	
        $t['jadwal'] = $this->content_data->jadwal($guru);
        $t['mn'] = "pengajar/jadwal";
        $this->load->view('admin/home',$t);	
	}
	
	public function nilai(){
        $guru = $this->session->userdata('id_user');	
        $this->load->model('content_pengajar','content_data');	
        $t['nilai'] = $this->content_data->nilai($guru);
        $t['mn'] = "pengajar/nilai";
        $this->load->view('admin/home',$t);
	}
	
	public function edit_nilai(){
        $id= $this->uri->segment(2);
        $this->load->model('content_pengajar','content_data');	
        $t['edit_nilai']	 = $this->content_data->edit_data_nilai($id);	
        $t['mn']="pengajar/edit_nilai";	
        $this->load->view('admin/home',$t);	
	}
	
	public function proses_edit_nilai(){
        $this->load->model('content_pengajar','content_data');	
        $this->content_data->proses_edit_nilai();	
        redirect(base_url()."guru_nilai");	
	}

}




?>