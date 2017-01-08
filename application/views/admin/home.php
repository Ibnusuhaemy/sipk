<html>
<head>
<title> SIPK </title>
<style>
body{
	background-color:yellow;
	fonnt-family:calibri;	
}
.table{
	border:1px solid #006699;
	border-radius:10px;
	box-shadow:0px 5px 5px 5px #000000;
	background-color:white;
	padding:5px;
	
}

#nav{
	list-style:none;
	background-color:yellow;
	color:#000000;
	margin:0px;
	padding:0px;
	color:#000000;
	width:220px;
}
#nav li{
	margin:0px;
	padding:0px;
}
#nav li a{
	display:block;
	padding: 3 15px;
	border-bottom:1px solid #000;
	line-height:2.0;
	margin-left:10px;
	text-decoration:none;	
	color:black;
	font-family:calibri;
	font-size:18px;
}
#nav li a:hover{
	background-color:red;
	color:white;	
}

input,button{
	padding:10px;
}
tr,td{
	padding:3px;
}
</style>
</head>
<body>
<?php
if($this->session->userdata('id_user') == 0){
	redirect(base_url().'admin');
	}else{
?>
<table width="800px" align="center" border=0 class="table">

	<tr>
		<td height="200px" colspan="2"> <img src="<?= base_url()."img/header.jpg"?>" width=100% height=200> </td>
	</tr>	

	<tr>
		<td colspan="2" height="40px" bgcolor="yellow" align="right"> 
		<?php
		echo " Selamat Datang : ".ucwords($this->session->userdata('username')). " / <a href=\"logout\" onclick=\" return confirm('Yakin Mau Keluar Aplikasi?')\">Logout</a>";

		?>
		</td>
	</tr>	
	
	<tr>
		<td width="250" valign="top"> 
		<!-- START ADMIN -->
		<?php if($this->session->userdata('status') == 'admin') {?>
		<ul id="nav">
		<li><a href="<?= base_url();?>admin_home"> &#187; Home</a></li>
		<li><a href="<?= base_url();?>admin_profile"> &#187; Profile</a></li>
		<li><a href="<?= base_url();?>admin_layanan">&#187; Layanan</a></li>
		<li><a href="<?= base_url();?>admin_about">&#187; About</a></li>
		<li><a href="<?= base_url();?>admin_user">&#187; Manajemen User</a></li>
		<?php
		if($this->uri->segment(1) == 'admin_daftar'){
		?>	
		<li><a href="<?= base_url();?>admin_daftar"> &#187; Pendaftaran ( <span style="color:black;font-weight:bold"><?= $jumlah; ?> </span> ) </a></li>
		<?php 
		}else{
		?>
		<li><a href="<?= base_url();?>admin_daftar">&#187; Pendaftaran </a></li>
		<?php
		} 
		?>
		<li><a href="<?= base_url();?>admin_pembayaran">&#187; Pembayaran Kursus</a></li>
		<li><a href="<?= base_url();?>admin_jadwal">&#187; Jadwal Dan Nilai</a></li>
		</ul>
		<!-- END ADMIN -->
		
		<!-- START SISWA -->
		<?php }elseif($this->session->userdata('status') == 'siswa'){ ?>
		<ul id="nav">
		<li><a href="<?= base_url();?>admin_home">&#187; Home</a></li>
		<li><a href="<?= base_url();?>user_pembayaran"> &#187; Pembayaran Kursus </a></li>
		<li><a href="<?= base_url();?>user_pendaftaran"> &#187; Pendaftaran Kursus </a></li>
		<li><a href="<?= base_url();?>user_jadwal"> &#187; Jadwal Kursus </a></li>
		</ul>
		<!-- END SISWA -->
			<!-- START gURU-->
		<?php }else{ ?>
		<ul id="nav">
		<li><a href="<?= base_url();?>admin_home">&#187; Home</a></li>
		<li><a href="<?= base_url();?>guru_jadwal"> &#187; Jadwal dan Kelas </a></li>
		<li><a href="<?= base_url();?>guru_nilai"> &#187; Nilai </a></li>
		</ul>
		<?php } ?>
		<!-- -END gURU-->
		</td> <td width="600" valign="top"> <?php include"isi_admin.php"; ?></td>
	</tr>	

	<tr>
		<td colspan="2" height="40px" bgcolor="yellow" align="center"> copyright &copy; by Erna STIK </td>
	</tr>

</table>
	<?php } ?>
</body>
</html>	