<?php
echo"
<h2> Pendaftaran Siswa </h2><hr>
<table border=1 cellpadding=4 cellspacing=0 width=100%>
<tr bgcolor=silver>
<td> No </td> <td> Nama </td>  <td> Alamat </td> <td> Email </td> <td> JK </td> <td> Foto </td> <td> Status </td> 
</tr>";
$jumlah = count($pendaftaran);
for($i=0;$i<$jumlah;$i++){
echo"<tr>
<td> ".$pendaftaran[$i]['id']." </td> <td> ".$pendaftaran[$i]['nama']." </td> <td> ".$pendaftaran[$i]['alamat']." </td> <td> ".$pendaftaran[$i]['email']." </td> <td> ".$pendaftaran[$i]['jk']." </td> <td> <img src=".base_url().'img/'.$pendaftaran[$i]['foto']." width=100> </td> <td> ".$pendaftaran[$i]['status_pelamar']." </td>  
</tr>";	
}
echo"</table><br>";
echo " Jumlah Data : <b>".$jumlah."</b>"; 
?>

