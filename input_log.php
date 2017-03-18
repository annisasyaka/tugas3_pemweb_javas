<?php session_start();

include "koneksi.php";
$username=$_POST['username'];
$password=($_POST['password']);

$query=mysql_query("select * from pengguna where username='$username' and password='$password'");
$cek=mysql_num_rows($query);
$ambil=mysql_fetch_array($query);

if($cek){
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	if($ambil['hak_akses']=="user"){
	header("location:homeuser.php");
	}
	if($ambil['hak_akses']=="admin"){
	header("location:homeadmin.php");
	}
	
}
else{
 	?>Anda gagal login. silahkan <a href="login.php">Login kembali</a><?php
 	echo mysql_error();
}
?>