

<?php
echo"
<h2>Manajemen User </h2><hr>
<p><a href='".base_url()."admin_tambah_user'><input type=button value=Tambah></a></p>
<table border=1 cellpadding=4 cellspacing=0 width=100%>
<tr bgcolor=silver>
<td> Id User </td> <td> Username </td> <td> Password </td> <td> Status </td> <td> Edit </td> <td> Hapus </td>  
</tr>";
$jumlah = count($dt);
for($i=0;$i<$jumlah;$i++){
echo"<tr>
<td> ".$dt[$i]['id_user']." </td> <td> ".$dt[$i]['username']." </td> <td> ".$dt[$i]['password']." </td> <td> ".$dt[$i]['status']." </td> <td> <a href='admin_edit_user/".$dt[$i]['id_user']."'>Edit</a> </td> <td> <a href=\"admin_hapus_user/".$dt[$i]['id_user']."\" onclick=\"return confirm('Yakin Mau Hapus ".$dt[$i]['username']."?')\">Hapus</a> </td>  
</tr>";	
}
echo"</table><br>";
echo " Jumlah Data : <b>".$jumlah."</b>"; 
?>