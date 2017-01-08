<?php
echo"
<h2> Tambah user </h2><hr>

<form method=POST action='".base_url()."proses_tambah_user'>
<table>

<tr>
	<td> Username </td> <td> <input type='text' name='username'> </td>
</tr>

<tr>
	<td> Password </td> <td> <input type='password' name='password'> </td>
</tr>

<tr>
	<td> status </td> <td> <input type='text' name='status'> </td>
</tr>

<tr>
	<td> </td> <td> <input type='submit' value='Simpan'> </td>
</tr>

</table>
</form>
";


?>