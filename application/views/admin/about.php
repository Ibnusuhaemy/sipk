<?php
$i=0;
echo"
<h2>Edit About </h2><hr>

<form method=POST action='proses_update_about'>
<input type='hidden' name='id_about' value='".$about[$i]['id_about']."'>
<table>

<tr>
	<td> Id about </td> <td> <input type='text' name='id_about' value='".$about[$i]['id_about']."' size='1' disabled> </td>
</tr>

<tr>
	<td valign=top> Isi </td> <td> <textarea name='isi' cols=45 rows=15>".$about[$i]['isi']."</textarea> </td>
</tr>

<tr>
	<td> </td> <td> <input type='submit' value='Update'> </td>
</tr>

</table>
</form>
";


?>