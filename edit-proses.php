<?php

if(isset($_POST['simpan'])){
	include('koneksi.php');

	$id         = $_POST['id'];
	$hak_akses	= $_POST['hak_akses'];
	$username 	= $_POST['username'];
	$password	= $_POST['password'];
	$nama	    = $_POST['nama'];
	$devisi		= $_POST['devisi'];
	$jabatan	= $_POST['jabatan'];
	$email		= $_POST['email'];
	$alamat		= $_POST['alamat'];
	$usia		= $_POST['usia'];
	$hobi		= $_POST['hobi'];

	$update = mysql_query("UPDATE pengguna SET hak_akses='$hak_akses', username='$username', password='$password', nama='$nama', devisi='$devisi', jabatan='$jabatan', email='$email', alamat='$alamat', usia='$usia', hobi='$hobi' WHERE id_pg='$id'") or die(mysql_error());

	if ($update) {
		 header("location:homeadmin.php");
	}

	else
		echo "Gagal input data";
}

else
	echo '<script>window.history.back()</script>';

?>