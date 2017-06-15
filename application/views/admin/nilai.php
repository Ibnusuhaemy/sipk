<?php

$total = count($nilai);
echo
"<h2> Data nilai</h2> <hr>
<table width=100% border=1 cellpadding=4 cellspacing=0>
<tr bgcolor=silver>
	<td> No</td> <td> Siswa </td> <td> Kelas </td> <td> Program </td> <td> Nilai </td> <td> Edit </td> 
</tr>
";
for($i=0;$i<$total; $i++){
    $a = $i+1;
echo"
<tr>
	<td> ".$a." </td> <td> ".$nilai[$i]['username']." </td> <td> ".$nilai[$i]['kelas']." </td> <td> ".$nilai[$i]['program']." </td> <td> ".$nilai[$i]['nilai']." </td> <td> <a href='edit_nilai/".$nilai[$i]['id_jadwal']."'> Edit Nilai </a> </td> 
</tr>
";
}
echo"</table>";
echo"<p><b> Jumlah Data : ".$total,"</b></p>";


?>