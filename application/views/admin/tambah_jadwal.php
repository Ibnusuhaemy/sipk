<?php
echo"
<h2> Tambah Jadwal </h2><hr>

<form method=POST action='".base_url()."admin_proses_tambah_jadwal'>
<table>

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
	<td> Kelas </td> 
    <td>
        <select name='kelas' class='form-control' required>
	        <option value='calabesar'>Calistung A (Besar)</option>
	        <option value='calakecil'>Calistung A (Kecil)</option>
	        <option value='calbbesar'>Calistung B (Besar)</option>
	        <option value='calbkecil'>Calistung B (Kecil)</option>
	        <option value='kelas1'>Kelas 1</option>
	        <option value='kelas2'>Kelas 2</option>
	        <option value='kelas3a'>Kelas 3 (A)</option>
	        <option value='kelas3b'>Kelas 3 (B)</option>
	        <option value='kelas4a'>Kelas 4 (A)</option>
	        <option value='kelas4b'>Kelas 4 (B)</option>
	        <option value='kelas5a'>Kelas 5 (A)</option>
	        <option value='kelas5b'>Kelas 5 (B)</option>
	        <option value='kelas6a'>Kelas 6 (A)</option>
	        <option value='kelas6b'>Kelas 6 (B)</option>
	        <option value='kelas6c'>Kelas 6 (C)</option>
	        <option value='matkelas1'>Matematika - B. Inggris Kelas 1</option>
	        <option value='matkelas2'>Matematika - B. Inggris Kelas 2</option>
	        <option value='matkelas3'>Matematika - B. Inggris Kelas 3</option>
	        <option value='matkelas4'>Matematika - B. Inggris Kelas 4</option>
	        <option value='matkelas5'>Matematika - B. Inggris Kelas 5</option>
	        <option value='smp7'>SMP Kelas 7</option>
	        <option value='smp8'>SMP Kelas 8</option>
	        <option value='smp9'>SMP Kelas 9</option>
	    </select>
    </td>
</tr>

<tr>
	<td> Program </td> 
    <td>
        <select name='program' class='form-control' required>
            <option value='regulercal'>Program Reguler TK/Calistung (Baca Tulis Hitung)</option>
            <option value='regulersd1'>Program Reguler 1-5 SD</option>
            <option value='regulersd2'>Program Reguler 6 SD</option>
            <option value='regulersmp1'>Program Reguler 7-8 SMP</option>
            <option value='regulersmp2'>Program Reguler 9 SMP</option>
        </select>
    </td>
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