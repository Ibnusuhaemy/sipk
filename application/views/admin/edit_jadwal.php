<?php
$p=0;
echo"
<h2> Edit Jadwal </h2><hr>

<form method=POST action='".base_url()."admin_proses_edit_jadwal'>
<input type=hidden name='id_jadwal' value='".$edit_jadwal[$p]['id_jadwal']."'>
<table>

<tr>
	<td> Pengajar </td> <td> "; 
	echo"<select name='pengajar' required='required' class='form-control'>";
	echo"<option> Pilih Pengajar</option>";
	$jumlah = count($guru);
	for($b=0;$b<$jumlah;$b++){
	if($guru[$b]['id_user'] == $edit_jadwal[$p]['pengajar']){	
	echo"<option value='".$guru[$b]['id_user']."' selected> ".$guru[$b]['username']." </option>";		
	}else{
	echo"<option value='".$guru[$b]['id_user']."'> ".$guru[$b]['username']." </option>";	
	}
	}
	echo"</select> </td>
</tr>
<tr>
<td> Siswa </td> <td> 
"; 
	echo"<select name='siswa' required='required' class='form-control'>";
	echo"<option> Pilih Siswa</option>";
	$jml = count($siswa);
	for($c=0;$c<$jml;$c++){
        if($siswa[$c]['id_user'] == $edit_jadwal[$p]['siswa']){	
            echo"<option value='".$siswa[$c]['id_user']."' selected> ".$siswa[$c]['username']." </option>";		
        }else{
            echo"<option value='".$siswa[$c]['id_user']."'> ".$siswa[$c]['username']." </option>";	
        }
	}
	echo"</select>";
echo"
</td>
<tr>
	<td> Kelas </td>
    <td>
";
echo"<select name='kelas' required='required' class='form-control'>";
	$jkelas = count($data_kelas);
	for($ik=0; $ik<$jkelas; $ik++){
        if($data_kelas[$ik]['kelas_alias'] == $edit_jadwal[$p]['kelas']){	
            echo"<option value='".$data_kelas[$ik]['kelas_alias']."' selected> ".$data_kelas[$ik]['kelas']." </option>";		
        }else{
            echo"<option value='".$data_kelas[$ik]['kelas_alias']."'> ".$data_kelas[$ik]['kelas']." </option>";	
        }
	}
echo "</td>    
</tr>
";

echo"
</td>
<tr>
	<td> Program </td>
    <td>
";
echo"<select name='program' required='required' class='form-control'>";
	$jprogram = count($data_program);
	for($ip=0; $ip<$jprogram; $ip++){
        if($data_program[$ip]['program_alias'] == $edit_jadwal[$p]['program']){	
            echo"<option value='".$data_program[$ip]['program_alias']."' selected> ".$data_program[$ip]['program']." </option>";		
        }else{
            echo"<option value='".$data_program[$ip]['program_alias']."'> ".$data_program[$ip]['program']." </option>";	
        }
	}
echo "</td>    
</tr>
";

echo"
<tr>
	<td> Nilai </td> <td> <input type='text' name='nilai' value='".$edit_jadwal[$p]['nilai']."' required='required' class='form-control'> </td>
</tr>

<tr>
	<td> </td> <td> <input type='submit' value='Simpan' class='button'> </td>
</tr>

</table>
</form>
";


?>