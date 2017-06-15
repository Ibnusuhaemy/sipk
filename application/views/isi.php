<?php
if(isset($menu)){
	
if($menu == "pendaftaran"){
	include "act/pendaftaran.php";
	
}if($menu == "profile"){
	include "act/profile.php";

}if($menu == "layanan"){
	include"act/layanan.php";	
}
if($menu == "about"){
	include "act/about.php";
	
}if($menu=="homepage"){
?>	
    <div class="owl-carousel">
        <div>
            <img src="<?= base_url()."img/slider-1.jpg"?>">
        </div>
        <div>
            <img src="<?= base_url()."img/slider-2.jpg"?>">
        </div>
        <div>
            <img src="<?= base_url()."img/slider-3.JPG"?>">
        </div>
        <div>
            <img src="<?= base_url()."img/slider-4.JPG"?>">
        </div>
        <div>
            <img src="<?= base_url()."img/slider-5.JPG"?>">
        </div>
    </div>
    <h3 style="padding-left:15px;">Pengumuman</h3>
    
    <?php
        $jumlah = count($dt);
        if($jumlah<>0){
        for($i=0; $i<$jumlah; $i++){
    ?>
    <div class="pengumuman">
        <p><?php echo $dt[$i]['nama_file']; ?></p>
        <a href="<?= base_url()."doc/".$dt[$i]['direktori_file'].""?>">
            <img src="<?= base_url()."img/pdficon.png"?>" width="300" height="300" alt="Ikon PDF">
        </a>
    </div>
    <?php
        }
        }else{
            echo "<div class=pengumuman>pengumuman kosong.</div>";
        }

}
if($menu == "sukses"){
	echo "<h2 align=center> Sukses Medaftar </h2> <p align=center> Silahkan tunggu validasi dari admin, untuk melanjutkan ke tahap selanjutnya.</p>
	<p>untuk username dan password login silahkan gunakan nama sewaktu anda mendaftar dan password 12345</p>
	";	
}

}


?>