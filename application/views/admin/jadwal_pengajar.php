<?php

$total = count($jadwal);
echo
"<h2> Data jadwal</h2> <hr>
<table width=100% border=1 cellpadding=4 cellspacing=0>
<tr bgcolor=silver>
	<td> No</td> <td> Siswa </td> <td> Kelas </td> <td> Program </td> <td> Hari </td> <td> Jam </td> 
</tr>
";
for($i=0;$i<$total; $i++){
    $a = $i+1;
echo"
<tr>
	<td> ".$a." </td> 
    <td> ".$jadwal[$i]['username']." </td> 
    <td> ".$jadwal[$i]['kelas']." </td> 
    <td> ".$jadwal[$i]['program']." </td> 
    <td> ".$jadwal[$i]['hari']." </td> 
    <td> ".$jadwal[$i]['jam']." </td> 
</tr>
";
}
echo"</table>";
echo"<p><b> Jumlah Data : ".$total,"</b></p>";


?>