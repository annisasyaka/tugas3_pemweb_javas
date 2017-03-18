<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "tugas3";

$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi database gagal");
mysql_select_db($name, $koneksi) or die("Tidak ada databese yang dipilih");

?>