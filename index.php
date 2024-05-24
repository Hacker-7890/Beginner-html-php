<?php
 session_start();
 
 if (isset($_SESSION["email"]) && isset($_SESSION["number"]) && isset($_SESSION["senha"]) or isset($_COOKIE['userLink'])) {
 	echo "<script>alert('logado')</script>";
 	echo "kkkkk";
 	# code...
 	header("location:myPerfil.php");
 }

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta  name="viewport" content="width">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>initial</title>
</head>
<body >
	
<h1><img src="icon/cmprs.png" id="h1"> FeedBusiness</h1>
 
<div class="logs"> 
<a href="login.php">login</a>
<a href="cadastro.php">cadastro</a>
</div>

</body>
</html>