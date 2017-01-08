<?php
echo"<h2>Form Pembayaran </h2><hr>";
echo"<form method=POST action='".base_url()."proses_pembayaran' enctype='multipart/form-data'>";
echo"<table width=100% cellpadding=4 cellspacing=0>
<tr>
	<td> No pendaftaran </td> <td> <input type=text name='no_pendaftaran'> </td>
</tr>

<tr>
	<td> Nama </td> <td> <input type=text name='nama'> </td>
</tr>

<tr>
	<td> Bukti Pembayaran </td> <td> <input type=file name='bukti'> </td>
</tr>

<tr>
	<td>  </td> <td> <input type=submit value='Simpan'> </td>
</tr>


</table>";
echo"</form>";
?>

<p><u><i> Note </i></u></p>
<p> &#187; Untuk Mendapatkan No Pendaftaran, Silahkan melihat di menu Pendaftaran !</p>
<p> &#187; Setelah Melakukan Pembayaran anda di harapkan datang ke lembaga untuk konfirmasi pelatihan !</p>