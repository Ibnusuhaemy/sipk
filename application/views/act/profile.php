<?php
$i = 0;
$foto = $profile[$i]['foto'];
$isi = nl2br($profile[$i]['isi']);
?>
<h2 align= "center">Profil Perusahaan</h2><hr>
<p align="center"><img src="<?= base_url()."img/".$foto.""?>" width=500 border=1 style="padding:10px;" align="center"></p>
<p><?= $isi; ?></p>