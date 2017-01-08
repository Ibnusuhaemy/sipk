<?php

$total = count($nilai);
echo
"<h2> Data nilai</h2> <hr>
<table width=100% border=1 cellpadding=4 cellspacing=0>
<tr bgcolor=silver>
	<td> Id nilai</td> <td> Tgl Mulai </td> <td> Tgl Selesai </td> <td> Kode guru </td> <td> Kode Siswa </td> <td> Tempat </td> <td> Kelas </td> <td> Nilai </td> <td> Edit </td> 
</tr>
";
for($i=0;$i<$total; $i++){
echo"
<tr>
	<td> ".$nilai[$i]['id_jadwal']." </td> <td> ".$nilai[$i]['tgl_mulai']." </td> <td> ".$nilai[$i]['tgl_selesai']." </td> <td> ".$nilai[$i]['pengajar']." </td> <td> ".$nilai[$i]['siswa']." </td> <td> ".$nilai[$i]['tempat']." </td> <td> ".$nilai[$i]['kelas']." </td> <td> ".$nilai[$i]['nilai']." </td> <td> <a href='edit_nilai/".$nilai[$i]['id_jadwal']."'> Edit Nilai </a> </td> 
</tr>
";
}
echo"</table>";
echo"<p><b> Jumlah Data : ".$total,"</b></p>";


?>