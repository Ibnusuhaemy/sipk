<?php
if(isset($menu)){
	
if($menu == "pendaftaran"){
	include"act/pendaftaran.php";
	
}if($menu == "profile"){
	include"act/profile.php";

}if($menu == "layanan"){
	include"act/layanan.php";	
}
if($menu == "about"){
	include"act/about.php";
	
}if($menu=="homepage"){
?>	
    <div class="owl-carousel">
        <div>
            <img src="<?= base_url()."img/front-office.jpg"?>">
        </div>
        <div>
            <img src="<?= base_url()."img/Lighthouse.jpg"?>">
        </div>
    </div>
    <h3 style="padding-left:15px;">Pengumuman</h3>
    <div class="pengumuman">
        <p>Diskon 10% bagi pendaftar pertama di bulan ini</p>
        <img src="<?= base_url()."img/pdficon.png"?>" width="300" height="300" alt="Ikon PDF">
    </div>
    <div class="pengumuman">
        <p>Kelas baru untuk jam kursus pukul 16.00 - 18.00</p>
        <img src="<?= base_url()."img/pdficon.png"?>" width="300" height="300" alt="Ikon PDF">
    </div>
    <div class="pengumuman">
        <p>Perubahan jadwal untuk kelas Matematika</p>
        <img src="<?= base_url()."img/pdficon.png"?>" width="300" height="300" alt="Ikon PDF">
    </div>
<?php
}
if($menu == "sukses"){
	echo "<h2 align=center> Sukses Medaftar </h2> <p align=center> Silahkan tunggu validasi dari admin, untuk melanjutkan ke tahap selanjutnya.</p>
	<p>untuk username dan password login silahkan gunakan nama sewaktu anda mendaftar dan password 12345</p>
	";	
}

}


?>