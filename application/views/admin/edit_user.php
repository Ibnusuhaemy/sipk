<?php
$i=0;
echo"
<h2>Admin Edit User </h2><hr>

<form method=POST action='".base_url()."proses_edit_user'>
<input type='hidden' name='id_user' value='".$edit_user[$i]['id_user']."' required='required' class='form-control'>
<table>

<tr>
	<td> Id_user </td> <td> <input type='text' name='id_user' value='".$edit_user[$i]['id_user']."' size='1' disabled required='required' class='form-control'> </td>
</tr>

<tr>
	<td> Username </td> <td> <input type='text' name='username' value='".$edit_user[$i]['username']."' required='required' class='form-control'> </td>
</tr>

<tr>
	<td> Password </td> <td> <input type='password' name='password' required='required' class='form-control'> </td>
</tr>

<tr>
	<td> status </td> <td> <input type='text' name='status' value='".$edit_user[$i]['status']."' required='required' class='form-control'> </td>
</tr>

<tr>
	<td> </td> <td> <input type='submit' value='Update' class='button'> </td>
</tr>

</table>
</form>
";


?>