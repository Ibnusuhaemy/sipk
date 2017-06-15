<?php
$i=0;
echo"
<h2>Edit Layanan</h2><hr>

<form method=POST action='proses_update_layanan'>
<input type='hidden' name='id_layanan' value='".$layanan[$i]['id_layanan']."' required='required' class='form-control'>
<table>

<tr>
	<td> id Layanan </td> <td> <input type='text' name='id_layanan' value='".$layanan[$i]['id_layanan']."' size='1' disabled required='required' class='form-control'> </td>
</tr>

<tr>
	<td valign=top> Isi </td> <td> <textarea name='isi' cols=45 rows=15 required='required' class='form-control'>".$layanan[$i]['isi']."</textarea> </td>
</tr>

<tr>
	<td> </td> <td> <input type='submit' value='Update' class='button'> </td>
</tr>

</table>
</form>
";


?>