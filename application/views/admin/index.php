<title>Login</title>
<style>
body{
background-color:yellow;	
}
table{
background-color:white;
color:black;
border-radius:10px;
box-shadow:0px 5px 5px 5px #000;
}
input,button{
	padding:10px;
}
tr,td{
	padding:10px;

}
table{
		border:1px solid #000;
}
</style>

<h2 align="center"> User Login </h2>
<form method=POST action='cek_login'>
<table align="center">
	<tr>
		<td> Nama </td> <td> <input type="text" name="username" required> </td>
	</tr>
	
	<tr>
		<td> Password </td> <td> <input type="password" name="password" required> </td>
	</tr>

	<tr>
		<td> </td> <td> <input type="submit"> </td>
	</tr>

</table>