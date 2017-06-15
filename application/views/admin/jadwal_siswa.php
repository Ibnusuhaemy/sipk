<?php

$total = count($jadwal);
echo "<h2> Data jadwal</h2> <hr>
<table width=100% border=1 cellpadding=4 cellspacing=0>
<tr bgcolor=silver>
	<td> Id Jadwal</td> 
    <td> Kode Siswa </td> 
    <td> Guru </td> 
    <td> Kelas </td> 
    <td> Program </td> 
    <td> Hari </td> 
    <td> Jam </td> 
</tr>
";

for($i=0;$i<$total; $i++){
    echo"
        <tr>
            <td> ".$jadwal[$i]['id_jadwal']." </td>
            <td> ".$jadwal[$i]['siswa']." </td> 
            <td> ".$jadwal[$i]['username']." </td> 
            <td> ".$jadwal[$i]['kelas']." </td> 
            <td> ".$jadwal[$i]['program']." </td>
            <td> ".$jadwal[$i]['hari']." </td> 
            <td> ".$jadwal[$i]['jam']." </td> 
        </tr>
    ";
}

echo "</table>";
echo "<p><b> Jumlah Data : ".$total,"</b></p>";


?>