<?php

class Admin extends CI_Controller{
	
	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}		

	
public function index(){
	
$this->load->view('admin/index');
	
}	
	
public function cek_login() {
		
		$data = array('username' => $this->input->post('username'),
						'password' => md5($this->input->post('password'))
			);
		$this->load->model('content_admin','login'); 
		$hasil = $this->login->cek_user($data);
		if ($hasil->num_rows() > 0) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id_user'] = $sess->id_user;
				$sess_data['username'] = $sess->username;
				$sess_data['password'] = $sess->password;
				$sess_data['status'] = $sess->status;
				$this->session->set_userdata($sess_data);
			}
				header('location:admin_home');
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}
	
	


public function home(){
	
	$t['mn']	= "admin/home";
	$this->load->view('admin/home',$t);
	
}

public function logout(){
			$this->session->unset_userdata('id_user');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('password');
			$this->session->sess_destroy();
			header('location:admin');
		}	
		
public function profile(){
	
	$this->load->model('content_admin','content_data');
	$t['profile'] = $this->content_data->ambil_data_profile(1);
	$t['mn']	= "admin/profile";
	$this->load->view('admin/home',$t);
	
	
}

public function update_profile(){
	$this->load->model('content_admin','content_data');	
	$this->content_data->ubah_profile(1);	
	header('location:admin_profile');
}		
		
public function layanan(){
	
	$this->load->model('content_admin','content_data');
	$t['layanan']  = $this->content_data->update_layanan(1);
	//print_r($t['layanan']);
	$t['mn'] = "admin/layanan";
	$this->load->view('admin/home',$t);
}		

public function proses_layanan(){
	$this->load->model('content_admin','content_data');
	$this->content_data->proses_update_layanan(1);
	header('location:admin_layanan');
	
}


public function about(){
	$this->load->model('content_admin','content_data');	
	$t['about'] = $this->content_data->update_about(1);
	//print_r($t['about']);
	$t['mn']	= "admin/about";
	$this->load->view("admin/home",$t);
}

public function proses_about(){
	$this->load->model('content_admin','content_data');
	$this->content_data->proses_update_about(1);
	header('location:admin_about');
	
}

public function user(){
	$this->load->model('content_admin','user_data');
	$t['dt']	= $this->user_data->data_user();
	$t['mn']	= "admin/user";
	$this->load->view('admin/home',$t);
}

public function edit_user($id){
	$id = $this->uri->segment(2);
	$this->load->model('content_admin','content_data');
	$t['edit_user']	= $this->content_data->edit_data_user($id);
	$t['mn'] 	= "admin/edit_user";
	$this->load->view('admin/home',$t);
}

public function hapus_user(){
	$id = $this->uri->segment(2);	
	$this->load->model('content_admin','content_data');
	$this->content_data->hapus_data_user($id);
	redirect(base_url().'admin_user');
	
}
public function edit_users(){
	$this->load->model('content_admin','content_data');
	$this->content_data->edit_data_users();
	header('location:admin_user');
}

public function tambah_user(){
	$t['mn']	= "admin/tambah_user";
	$this->load->view('admin/home',$t);
	
}

public function proses_tambah_users(){
	$this->load->model('content_admin','content_data');
	$this->content_data->tambah_data_users();
	header('location:admin_user');
	
}

public function pelamar(){
	$this->load->model('content_admin','content_data');
	$t['jumlah'] = $this->content_data->notiv();
	$t['pelamar'] = $this->content_data->data_pelamar();	
	$t['mn'] = "admin/pelamar";
	$this->load->view('admin/home',$t);
}

public function validasi(){
	$id = $this->uri->segment(2);
	$this->load->model('content_admin','content_data');
	$this->content_data->validasi_pelamar($id);
	redirect(base_url().'admin_daftar');
}

public function pembayaran_admin(){
	$this->load->model('content_admin','content_data');
	$t['pembayaran'] = $this->content_data->data_pembayaran();
	$t['mn'] = "admin/pembayaran_admin";
	$this->load->view('admin/home',$t);
	
}
public function jadwal(){
	$this->load->model('content_admin','content_data');
	$t['jadwal'] = $this->content_data->data_jadwal();
	$t['mn']	= "admin/jadwal";
	$this->load->view('admin/home',$t);
}

public function admin_tambah_jadwal(){
	
	$t['mn']	="admin/tambah_jadwal";
	$this->load->model('content_admin','content_data');
	$t['guru'] = $this->content_data->pilih_pengajar();
	$t['siswa'] = $this->content_data->pilih_siswa();
	//print_r($t['guru']);
	$this->load->view('admin/home',$t);
}

public function admin_proses_tambah_jadwal(){
	
	$this->load->model('content_admin','content_data');
	$this->content_data->proses_tambah_jadwal();
	redirect(base_url().'admin_jadwal');

	
}
public function hapus_jadwal(){
	$id = $this->uri->segment(2);	
	$this->load->model('content_admin','content_data');
	$this->content_data->hapus_data_jadwal($id);
	redirect(base_url().'admin_jadwal');
	
}

public function admin_edit_jadwal(){
	$id=$this->uri->segment('2');
	$this->load->model('content_admin','content_data');
	$t['guru'] = $this->content_data->pilih_pengajar();
	$t['siswa'] = $this->content_data->pilih_siswa();
	$t['edit_jadwal'] = $this->content_data->edit_data_jadwal($id);
	//print_r($t['edit_jadwal']);
	$t['mn'] = "admin/edit_jadwal";
	$this->load->view("admin/home",$t);
}

public function admin_proses_edit_jadwal(){
	$this->load->model('content_admin','content_data');
	$this->content_data->proses_edit_jadwal();
	redirect(base_url().'admin_jadwal');
}

public function hapus_pembayaran_admin(){

	$id = $this->uri->segment(2);	
	$foto = $this->uri->segment(3);
	$this->load->model('content_admin','content_data');	
	$this->content_data->hapus_data_pembayaran($id);
	unlink(FCPATH."struk\\".$foto);
	redirect(base_url()."admin_pembayaran");	
	}
	
	public function admin_hapus_pelamar(){

	$id = $this->uri->segment(2);	
	$foto = $this->uri->segment(3);
	$this->load->model('content_admin','content_data');	
	$this->content_data->hapus_data_pelamar($id);
	unlink(FCPATH."img\\".$foto);
	redirect(base_url()."admin_daftar");	
	}
}
?>