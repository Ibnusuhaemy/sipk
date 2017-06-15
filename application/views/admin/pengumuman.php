<?php
    echo "
    <h2>Manajemen Pengumuman</h2>
    <hr>
    <p><a href='".base_url()."admin/tambah_pengumuman'><input type=button value=Tambah class=button></a></p>
    <table border=1 cellpadding=4 cellspacing=0 width=100%>
    <tr bgcolor=silver>
        <td> Id Pengumuman </td> <td> Keterangan </td> <td> Direktori </td> <td> Edit </td> <td> Hapus </td>  
    </tr>";
    
    $jumlah = count($dt);

    for($i=0; $i<$jumlah; $i++){
        echo"
        <tr>
                <td> ".$dt[$i]['id_pengumuman']." </td>
                <td> ".$dt[$i]['nama_file']." </td>
                <td> ".$dt[$i]['direktori_file']." </td>
                <td> <a href='edit_pengumuman/".$dt[$i]['id_pengumuman']."'>Edit</a> </td> 
                <td> <a href=\"hapus_pengumuman/".$dt[$i]['id_pengumuman']."\" onclick=\"return confirm('Yakin Mau Hapus ".$dt[$i]['id_pengumuman']."?')\">Hapus</a> </td>  
        </tr>";	
    }

    echo"</table><br>";
    echo " Jumlah Data : <b>".$jumlah."</b>"; 
?>