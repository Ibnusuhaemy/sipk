<?php
$i=0;

echo"<h2></h2><hr>
<form method=POST action='".base_url()."proses_edit_nilai'>
<input type=hidden name='id_jadwal' value='".$edit_nilai[$i]['id_jadwal']."'>
<table>

<tr>
	<td> Nilai </td> <td> <input type=text name='nilai' value='".$edit_nilai[$i]['nilai']."'> </td>
</tr>

<tr>
	<td>  </td> <td> <input type=submit value='submit'> </td>
</tr>



</table>
</form>
";
?>