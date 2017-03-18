<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="edit.css"></head>
	<title>Edit Data</title>

<body>


<center>
<div id="box">
<div id="up">

<title>Edit Data</title>
<h3>Edit Data Pengguna</h3>


<?php 

include('koneksi.php');

$id = $_GET['id'];

$show = mysql_query("SELECT * FROM pengguna WHERE id_pg='$id'");

if(mysql_num_rows($show)==0){
	echo '<script>window.history.back()</script>';
}
else{
	$data = mysql_fetch_assoc($show);
}

?>

<form action="edit-proses.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<center>
	<br>
	<table cellpadding="3" cellspacing="0">
		<tr>
			<td>Hak Akses</td>
			<td>:</td>
			<td><input type="text" name='hak_akses' value="<?php echo $data['hak_akses']; ?>" required></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name='username' value="<?php echo $data['username']; ?>" required></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="text" name='password' value="<?php echo $data['password']; ?>" required></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name='nama' value="<?php echo $data['nama']; ?>" required></td>
		</tr>
		<tr>
			<td>Devisi</td>
			<td>:</td>
			<td><input type="text" name='devisi' value="<?php echo $data['devisi']; ?>" required></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>:</td>
			<td><input type="text" name='jabatan' value="<?php echo $data['jabatan']; ?>" required></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text" name='email' value="<?php echo $data['email']; ?>" required></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name='alamat' value="<?php echo $data['alamat']; ?>" required></td>
		</tr>
		<tr>
			<td>Usia</td>
			<td>:</td>
			<td><input type="text" name='usia' value="<?php echo $data['usia']; ?>" required></td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td><input type="text" name='hobi' value="<?php echo $data['hobi']; ?>" required></td>
		</tr>
	</table>
	</center>
	<br>
	<input  type="submit" value="Simpan" name="simpan" id="tombol">
</form>
</div>
</div>
</center>
</body>
</html>