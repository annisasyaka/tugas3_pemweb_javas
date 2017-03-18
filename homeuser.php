<?php session_start();
if (isset($_SESSION['username'])){
	
?>
<head><link rel="stylesheet" type="text/css" href="homeadmin.css"></head>
<style>
	<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4C85B2;
    color: white;
}

body {
	background: #95B9C7;
	font-family: sans-serif;
}
</style>
</style>

<center>
<h3>Selamat datang User</h3>
<h3>Data Pengguna</h3>
	<div id="down">

<table cellpadding="5" cellspacing="0" border="1">
	<tr bgcolor="#95B9C7">
		<th>Hak Akses</th>
		<th>Username</th>
		<th>Nama</th>
		<th>Devisi</th>
		<th>Jabatan</th>
		<th>Email</th>
		<th>Alamat</th>
		<th>Usia</th>
		<th>Hobi</th>
	</tr>

<?php
include('koneksi.php');

$qry = mysql_query("SELECT * FROM pengguna;") or die(mysql_error());
while ($data = mysql_fetch_array($qry)) {
	echo '<tr>';
	
 	echo '<td>'.$data['hak_akses'].'</td>';
 	echo '<td>'.$data['username'].'</td>';
 	echo '<td>'.$data['nama'].'</td>';
 	echo '<td>'.$data['devisi'].'</td>';
 	echo '<td>'.$data['jabatan'].'</td>';
 	echo '<td>'.$data['email'].'</td>';
 	echo '<td>'.$data['alamat'].'</td>';
 	echo '<td>'.$data['usia'].'</td>';
 	echo '<td>'.$data['hobi'].'</td>';
 	echo '</tr>';
	

}


?>
</div>
</table>
<?php
}

else
{
 ?>Anda tidak boleh mengakses halaman ini. silahkan <a href="login.php">Login
dahulu</a><?php
}
?> 
</html>
