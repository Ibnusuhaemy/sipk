<?php
echo"
<h2> Pembayaran Siswa </h2><hr>
<table border=1 cellpadding=4 cellspacing=0 width=100%>
<tr bgcolor=silver>
<td> Id </td> <td> No Pendaftaran </td> <td> Nama </td> <td> Bukti </td> <td> Hapus </td> 
</tr>";
$jumlah = count($pembayaran);
for($i=0;$i<$jumlah;$i++){
echo"<tr>
<td> ".$pembayaran[$i]['id_pembayaran']." </td> <td> ".$pembayaran[$i]['no_pendaftaran']." </td> <td> ".$pembayaran[$i]['nama']." </td> <td> <img src=".base_url().'struk/'.$pembayaran[$i]['bukti']." width=100> </td> <td> <a href='".base_url()."hapus_pembayaran_admin/".$pembayaran[$i]['id_pembayaran']."/".$pembayaran[$i]['bukti']."'>Hapus </a></td>   
</tr>";	
}
echo"</table><br>";
echo " Jumlah Data : <b>".$jumlah."</b>"; 
?>
