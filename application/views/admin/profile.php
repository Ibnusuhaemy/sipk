<?php
$i = 0;
echo"
<h3>Edit Profile Perusahaan </h3>
<form method=POST action='update_profile' enctype='multipart/form-data'>
<input type='hidden' name='id_profile' value='".$profile[$i]['id_profile']."'>
<table>
<tr>
<td> Id Profile </td> <td> <input type='text' name='id_profile' value='".$profile[$i]['id_profile']."' size=1 disabled> </td>
</tr>

<tr>
<td valign=top> Isi  </td> <td> <textarea name='isi' cols=45 rows=15>".$profile[$i]['isi']."</textarea> </td>
</tr>

<tr>
<td valign=top> Foto </td> <td> <img src='".base_url()."img/".$profile[$i]['foto']."' width=250> </td>
</tr>


<tr>
<td> Foto </td> <td> <input type='file' name='foto'> </td>
</tr>

<tr>
<td>  </td> <td> <input type='submit' value='Simpan'> </td>
</tr>


</table>
</form>
";
?>