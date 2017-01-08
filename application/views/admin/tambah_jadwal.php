<?php
echo"
<h2> Tambah Jadwal </h2><hr>

<form method=POST action='".base_url()."admin_proses_tambah_jadwal'>
<table>

<tr>
	<td> Tanggal Mulai </td> <td> 
	";
	echo"<select name='tgl_mulai'>";
	echo"<option>Pilih Tanggal</option>";
	for($i=1;$i<32;$i++){
	echo"<option value='$i'>$i</option>";	
	}
	echo"</select>";
	
	echo"<select name='bln_mulai'>";
	echo"<option>Pilih Bulan</option>";
	for($j=1;$j<13;$j++){
	echo"<option value='$j'>$j</option>";	
	}
	echo"</select>";
	
	echo"<select name='thn_mulai'>";
	echo"<option>Pilih Tahun</option>";
	for($k=2000;$k<2020;$k++){
	echo"<option value='$k'>$k</option>";	
	}
	echo"</select>";
	
	echo"</td>
</tr>

<tr>
	<td> Tanggal Selesai </td> <td>  ";
	
	echo"<select name='tgl_selesai'>";
	echo"<option>Pilih Tanggal</option>";
	for($l=1;$l<32;$l++){
	echo"<option value='$l'>$l</option>";	
	}
	echo"</select>";
	
	echo"<select name='bln_selesai'>";
	echo"<option>Pilih Bulan</option>";
	for($l=1;$l<13;$l++){
	echo"<option value='$l'>$l</option>";	
	}
	echo"</select>";
	
	echo"<select name='thn_selesai'>";
	echo"<option>Pilih Tahun</option>";
	for($m=2000;$m<2020;$m++){
	echo"<option value='$m'>$m</option>";	
	}
	echo"</select>";
	
	
	echo"</td>
</tr>

<tr>
	<td> Pengajar </td> <td> "; 
	echo"<select name='pengajar'>";
	$jumlah = count($guru);
	for($b=0;$b<$jumlah;$b++){
	echo"<option value='".$guru[$b]['id_user']."'> ".$guru[$b]['username']." </option>";		
	}
	echo"</select> </td>
</tr> <tr><td> Pilih Siswa</td> <td>";
	
	echo"<select name='siswa'>";
	$jml = count($siswa);
	for($c=0;$c<$jml;$c++){
	echo"<option value='".$siswa[$c]['id_user']."'> ".$siswa[$c]['username']." </option>";		
	}
	echo"</select>";


echo"</td></tr><tr>
	<td> Tempat </td> <td> <input type='text' name='tempat'> </td>
</tr>

<tr>
	<td> Kelas </td> <td> <input type='text' name='kelas'> </td>
</tr>

<tr>
	<td> Nilai </td> <td> <input type='text' name='nilai'> </td>
</tr>

<tr>
	<td> </td> <td> <input type='submit' value='Simpan'> </td>
</tr>

</table>
</form>
";


?>