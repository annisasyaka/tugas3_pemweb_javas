<?php
if(isset($_POST['tambah'])){
	include('koneksi.php');

	$hak_akses	= $_POST['hak_akses'];
	$username 	= $_POST['username'];
	$password	= $_POST['password'];
	$nama		= $_POST['nama'];
	$devisi		= $_POST['devisi'];
	$jabatan	= $_POST['jabatan'];
	$email		= $_POST['email'];
	$alamat		= $_POST['alamat'];
	$usia		= $_POST['usia'];
	$hobi		= $_POST['hobi'];


	$input = mysql_query("INSERT INTO pengguna VALUES(NULL, '$hak_akses', '$username', '$password', '$nama', '$devisi', '$jabatan', '$email','$alamat','$usia', '$hobi')") or die(mysql_error());

	if ($input) {
		 header("location:homeadmin.php");
	}

	else
		echo "Gagal input data";
}

else
	echo '<script>window.history.back()</script>';

?>