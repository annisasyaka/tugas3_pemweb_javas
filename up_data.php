<title>Tambah Data</title>
<script type="text/javascript">
		function validateForm() {
			var str, error;
			str = "";
			error = 0;
    		var x = document.forms["myForm"]["email"].value;
    		var atpos = x.indexOf("@");
    		var dotpos = x.lastIndexOf(".");
    		var numbers = /^[0-9]+$/;
    		var umur = document.getElementById("usia").value;
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        str += "Alamat Email tidak valid \n";
        error++;
    }

    if(document.getElementById("password").value.length < 6) {
        str += "Password harus berisi 6 karakter atau lebih! \n";
        error++;
    }

    if(!document.getElementById("usia").value.match(numbers)) {
        str += "Usia Harus angka \n";
        error++;
    }

    if(error > 0){
	alert("Terdapat kesalahan : \n" + str);
	return false;
	} 

	else {
		return true;
	}


}
		function ckLogout(){
			if(confirm("Apakah anda benar-benar ingin logout?")){
				document.getElementById("logout").onClick = true;
			} else {
				document.getElementById("logout").href = "up_data.php";
			}
		}
	</script>
<head><link rel="stylesheet" type="text/css" href="up.css"></head>

<center>
<div id="box">
<div id="up">
<h3>Tambahkan data pengguna</h3>

<form name="myForm" action="proses_tambah.php" method="post" onSubmit="return validateForm();">
<center>
	<table cellpadding="5" cellspacing="2">
		<tr>
			<td>Hak Akses</td>
			<td>:</td>
			<td><input type="text" name='hak_akses' id='hak_akses' size="30" required></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name='username' size="30" id='username' required></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="text" name='password' size="30" id='password' required></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name='nama' size="30" id='nama' required></td>
		</tr>
		<tr>
			<td>Devisi</td>
			<td>:</td>
			<td><input type="text" name='devisi' size="30" id='devisi' required></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>:</td>
			<td><input type="text" name='jabatan' size="30" id='jabatan' required></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text" name='email' size="30" id='email' required></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name='alamat' size="30" id='alamat' required></td>
		</tr>
		<tr>
			<td>Usia</td>
			<td>:</td>
			<td><input name='usia' size="30" id='usia' required></td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td><input type="text" name='hobi' size="30" id='hobi' required></td>
		</tr>
	</table>
	</center>
	<br>
	<input id="tombol" type="submit" value="Tambah" name="tambah" id='tambah'>
</form>
<br>
<a href="homeadmin.php">Kembali</a>
<br>
<a href="logout.php" id="logout" onClick="ckLogout()">Logout</a>
</div>
</div>


</center>
</body>

