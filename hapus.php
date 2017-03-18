<?php
if(isset($_GET['id'])){
	include('koneksi.php');
	 $id = $_GET['id'];
	 $cek = mysql_query("SELECT id_pg FROM pengguna WHERE id_pg='$id'") or die(mysql_error());

	 if(mysql_num_rows($cek) == 0){
	 	echo '<script>window.history.back()</script>';
	 }
	 else{
	 	$del = mysql_query("DELETE FROM pengguna WHERE id_pg='$id'");
	 	if($del){
	 		header("location:homeadmin.php");
	 	}
	 	else{
	 		echo "Gagal input data";
	 	}
	 }
}
else{
	echo '<script>window.history.back()</script>';
}

?>