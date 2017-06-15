<p>
<h2 align="center">Form Pendafataran !</h2>
<hr>
</p>
<form method="POST" action="proses_daftar" enctype="multipart/form-data">
<table>
<tr>	
	<td height="50">Nama</td>
	<td><input type="text" name="nama" required="required" class="form-control"></td>
</tr>	


<tr>	
	<td height="50">Alamat</td>
	<td><textarea name="alamat" cols="45" rows="15" required="required" class="form-control"></textarea></td>
</tr>	

<tr>	
	<td height="50">No Telpon/HP</td>
	<td><input type="text" name="telepon" required="required" class="form-control"></td>
</tr>	

<tr>	
	<td height="50">Jenis Kelamin</td>
	<td>
	    <input type="radio" name="jk" id="jk1" value="L"> Laki laki 
	    <input type="radio" name="jk" id="jk1" value="P"> Perempuan 
    </td>
</tr>	

<tr>	
	<td height="50">Foto</td>
	<td><input type="file" name="foto"></td>
</tr>	

<tr>	
	<td height="50">Kelas</td>
	<td>
        <select name="kelas" class="form-control" required>
	        <option value="calabesar">Calistung A (Besar)</option>
	        <option value="calakecil">Calistung A (Kecil)</option>
	        <option value="calbbesar">Calistung B (Besar)</option>
	        <option value="calbkecil">Calistung B (Kecil)</option>
	        <option value="kelas1">Kelas 1</option>
	        <option value="kelas2">Kelas 2</option>
	        <option value="kelas3a">Kelas 3 (A)</option>
	        <option value="kelas3b">Kelas 3 (B)</option>
	        <option value="kelas4a">Kelas 4 (A)</option>
	        <option value="kelas4b">Kelas 4 (B)</option>
	        <option value="kelas5a">Kelas 5 (A)</option>
	        <option value="kelas5b">Kelas 5 (B)</option>
	        <option value="kelas6a">Kelas 6 (A)</option>
	        <option value="kelas6b">Kelas 6 (B)</option>
	        <option value="kelas6c">Kelas 6 (C)</option>
	        <option value="matkelas1">Matematika - B. Inggris Kelas 1</option>
	        <option value="matkelas2">Matematika - B. Inggris Kelas 2</option>
	        <option value="matkelas3">Matematika - B. Inggris Kelas 3</option>
	        <option value="matkelas4">Matematika - B. Inggris Kelas 4</option>
	        <option value="matkelas5">Matematika - B. Inggris Kelas 5</option>
	        <option value="smp7">SMP Kelas 7</option>
	        <option value="smp8">SMP Kelas 8</option>
	        <option value="smp9">SMP Kelas 9</option>
	    </select>
    </td>
</tr>

<tr>
	<td height="50">Program</td>
	<td>
        <select name="program" class="form-control" required>
            <option value="regulercal">Program Reguler TK/Calistung (Baca Tulis Hitung)</option>
            <option value="regulersd1">Program Reguler 1-5 SD</option>
            <option value="regulersd2">Program Reguler 6 SD</option>
            <option value="regulersmp1">Program Reguler 7-8 SMP</option>
            <option value="regulersmp2">Program Reguler 9 SMP</option>
        </select>
    </td>
</tr>		

<tr>	
	<td height="50"></td>
	<td><input type="submit" value="Simpan" class="button"></td>
</tr>	


</table>
</form>
