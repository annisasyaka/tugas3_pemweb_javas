<html>
<head><link rel="stylesheet" type="text/css" href="login.css">
	<title>Login</title>
	<script type="text/javascript">
		function ckForm(){
			var str, error;
			str = "";
			error = 0;

	if(document.getElementById("username").value.length <= 0){
	str += " Username tidak boleh kosong.\n";
	error++;
	}

	if(document.getElementById("password").value.length <= 0){
		str += " Password tidak boleh kosong.\n";
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
	</script>
</head>
<body>
<center>
<div id="box">
<div id="up">



		<h3>Login<h3>
		<form method="post" action="input_log.php" onSubmit="return ckForm()">
			<input class="inputs" type="text" autocomplete="off" placeholder="Username" name="username" id="username"></br>
			<input class= "inputs" type="password" placeholder="Password" name="password" id="password"></br>
			<input id="tombol" type="submit" value="Login" name="masuk">
		</form>
	
</div>
</div>
</center>

</body>
</html>