<?php

$total = count($jadwal);
echo
"<h2> Data jadwal</h2> <hr>
<table width=100% border=1 cellpadding=4 cellspacing=0>
<tr bgcolor=silver>
	<td> Id Jadwal</td> <td> Tgl Mulai </td> <td> Tgl Selesai </td> <td> Kode guru </td> <td> Kode Siswa </td> <td> Tempat </td> <td> Kelas </td> 
</tr>
";
for($i=0;$i<$total; $i++){
echo"
<tr>
	<td> ".$jadwal[$i]['id_jadwal']." </td> <td> ".$jadwal[$i]['tgl_mulai']." </td> <td> ".$jadwal[$i]['tgl_selesai']." </td> <td> ".$jadwal[$i]['pengajar']." </td> <td> ".$jadwal[$i]['siswa']." </td> <td> ".$jadwal[$i]['tempat']." </td> <td> ".$jadwal[$i]['kelas']." </td> 
</tr>
";
}
echo"</table>";
echo"<p><b> Jumlah Data : ".$total,"</b></p>";


?>