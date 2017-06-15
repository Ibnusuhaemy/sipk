<?php
$i = 0;
echo"
<h3>Edit Profile Perusahaan </h3>
<form method=POST action='".base_url()."admin/act_edit_pengumuman' enctype='multipart/form-data'>
<input type='hidden' name='id_pengumuman' value='".$dt[$i]['id_pengumuman']."'>
<table>
<tr>
<td> ID Pengumuman </td> <td> <input type='text' name='id_peng' value='".$dt[$i]['id_pengumuman']."' size=1 disabled required='required' class='form-control'> </td>
</tr>

<tr>
<td> Keterangan </td> <td> <input type='text' name='judul' value='".$dt[$i]['nama_file']."' required='required' class='form-control'> </td>
</tr>

<tr>
<td> Dokumen </td> <td> <input type='file' name='dokumen' class='form-control'> </td>
</tr>

<tr>
<td>  </td> <td> <input type='submit' value='Simpan' class='button'> </td>
</tr>


</table>
</form>
";
?>