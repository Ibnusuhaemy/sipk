<?php
$i = 0;
echo"
<h3>Tambah Data Pengumuman</h3>
<form method=POST action='insert_pengumuman' enctype='multipart/form-data'>
    <table>
        <tr>
            <td> Keterangan </td> <td> <input type='text' name='judul' value='' size='50' required='required' class='form-control'> </td>
        </tr>
        <tr>
            <td> Dokumen </td> <td> <input type='file' name='dokumen' required='required' class='form-control'> </td>
        </tr>

        <tr>
            <td>  </td> <td> <input type='submit' value='Simpan' class='button'> </td>
        </tr>


    </table>
</form>
";
?>