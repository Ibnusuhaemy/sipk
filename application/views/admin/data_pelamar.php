<?php
$total = count($pelamar);
echo
"<h2> Data Pelamar</h2> <hr>
<table width=100% border=1 cellpadding=4 cellspacing=0>
<tr bgcolor=silver>
	<td> Id </td> <td> Nama </td> <td> Alamat </td> <td> Telepon </td> <td> JK </td> <td> Foto </td> <td> Status </td> <td> Validasi </td> <td> Hapus </td>
</tr>
";
for($i=0;$i<$total; $i++){
echo"
<tr>
	<td> ".$pelamar[$i]['id']." </td> 
    <td> ".$pelamar[$i]['nama']." </td> 
    <td> ".$pelamar[$i]['alamat']." </td> 
    <td> ".$pelamar[$i]['telepon']." </td> 
    <td> ".$pelamar[$i]['jk']." </td> 
    <td> <img src=".base_url()."img/".$pelamar[$i]['foto']." width=100> </td> 
    <td> ".$pelamar[$i]['status_pelamar']. "</td> 
    <td> <a href='admin_validasi/".$pelamar[$i]['id']."'> Validasi </a></td> 
    <td> <a href='admin_hapus_pelamar/".$pelamar[$i]['id']."/".$pelamar[$i]['foto']."'> Hapus </a></td>
</tr>
";
}
echo"</table>";
echo"<p><b> Jumlah Data : ".$total,"</b></p>";


?>