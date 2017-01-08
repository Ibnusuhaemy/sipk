<p>
<h2 align="center">Form Pendafataran !</h2>
<hr>
</p>
<form method="POST" action="proses_daftar" enctype="multipart/form-data">
<table>
<tr>	
	<td height="50">Nama</td>
	<td><input type="text" name="nama" required="required"></td>
</tr>	


<tr>	
	<td height="50">Alamat</td>
	<td><textarea name="alamat" cols="45" rows="15" required="required"></textarea></td>
</tr>	

<tr>	
	<td height="50">Email</td>
	<td><input type="email" name="email" required="required"></td>
</tr>	

<tr>	
	<td height="50">Jenis Kelamin</td>
	<td><input type="radio" name="jk" value="L" checked> Laki laki <input type="radio" name="jk" value="P"> Perempuan </td>
</tr>	

<tr>	
	<td height="50">Foto</td>
	<td><input type="file" name="foto"></td>
</tr>	

<tr>	
	<td height="50"></td>
	<td><input type="submit" value="Simpan"></td>
</tr>	


</table>
</form>
