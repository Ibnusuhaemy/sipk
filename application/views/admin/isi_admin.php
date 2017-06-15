<?php
if(isset($mn)){

if($mn == "admin/home"){
	echo"<br> <h3>Selamat Datang : ".ucwords($this->session->userdata('username'))." <br> Status Anda Sebagai : ".ucwords($this->session->userdata('status'))."</h3> Untuk Mengelola Web App Silahkan Pilih Menu Disamping";	

}	
if($mn == "admin/profile"){
	include"profile.php";	

}if($mn == "admin/layanan"){
	include"layanan.php";
}

if($mn == "admin/about"){
	include"about.php";	
}

if($mn == "admin/user"){
	include"user.php";	
}

if($mn == "admin/edit_user"){
	include"edit_user.php";	
}

if($mn == "admin/tambah_user"){
	include"tambah_user.php";	
}

if($mn == "admin/pelamar"){
	include"data_pelamar.php";	
}

if($mn == "user/pembayaran"){
	include"pembayaran.php";	
}

if($mn == "admin/pembayaran_admin"){
	include"pembayaran_admin.php";	
}

if($mn == "user/pendaftaran"){
	include"pendaftaran_user.php";	
}

if($mn == "admin/jadwal"){
	include"admin_jadwal.php";	
}

if($mn == "admin/tambah_jadwal"){
	include"tambah_jadwal.php";	
}

if($mn == "admin/edit_jadwal"){
	include"edit_jadwal.php";	
}

if($mn == "user/jadwal"){
	include"jadwal_siswa.php";	
}

if($mn == "pengajar/jadwal"){
	include"jadwal_pengajar.php";	
}

if($mn == "pengajar/nilai"){
	include"nilai.php";	
}

if($mn == "pengajar/edit_nilai"){
	include"edit_data_nilai.php";	
}

if($mn == "admin/admin_pengumuman"){
	include "pengumuman.php";	
}

if($mn == "admin/tambah_pengumuman"){
	include "tambah_pengumuman.php";	
}
    
if($mn == "admin/edit_pengumuman"){
	include "edit_pengumuman.php";	
}

}


?>