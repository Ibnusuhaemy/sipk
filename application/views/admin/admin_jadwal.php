<?php

$total = count($jadwal);
echo
"<h2> Data jadwal</h2> <hr>
<p> <a href='".base_url()."admin_tambah_jadwal'><input type=button value='Tambah' class='button'></a></p>
<table width=100% border=1 cellpadding=4 cellspacing=0>
<tr bgcolor=silver>
	<td> Id Jadwal</td> <td> Kode guru </td> <td> Kode Siswa </td> <td> Kelas </td> <td> Program </td> <td> Nilai </td> <td> Edit </td> <td> Hapus </td>
</tr>
";
for($i=0;$i<$total; $i++){
echo"
<tr>
	<td> ".$jadwal[$i]['id_jadwal']." </td> 
    <td> ".$jadwal[$i]['pengajar']." </td> 
    <td> ".$jadwal[$i]['siswa']." </td> 
    <td> ".$jadwal[$i]['kelas']." </td> 
    <td> ".$jadwal[$i]['program']." </td> 
    <td> ".$jadwal[$i]['nilai']." </td> 
    <td> <a href='admin_edit_jadwal/".$jadwal[$i]['id_jadwal']."'>Edit</a></td> 
    <td> <a href=\"admin_hapus_jadwal/".$jadwal[$i]['id_jadwal']."\" onclick=\"return confirm('Yakin Mau Hapus Jadwal ini ?')\"> Hapus </a></td>
</tr>
";
}
echo"</table>";
echo"<p><b> Jumlah Data : ".$total,"</b></p>";


?>