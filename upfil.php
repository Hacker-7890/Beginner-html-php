<html>
<head>
	<meta  name="viewport" content="width">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
</head>
<style type="text/css">
	body{
		width:10px;
		height:10px;
		background: crimson;
	}
	

	div{
		position: relative;
		height: 70px;
		width: 70px;
	}
	img{
		position: relative;
		height: 100%;
		width: 100%;
	}
</style>
<body id="bodyy">
	<div id="upload">
	<form action="" method="post" enctype="multipart/form-data" name="up">
		<input type="file" name="arqui" id="file" value="escolha uma foto">
		<input type="submit" name="up"value="publicar" id="publicar">
		
	</form>
</div>
<script type="text/javascript">
	window.onload=function(){
		alert("mudaperfil")
	var im=document.getElementById("file")
	var postar=document.getElementById("publicar")
	im.onchange=function(){

		alert("mudei")
		postar.click()
	}
}
</script>
	<?php

if (isset($_POST["up"])) {
	//print_r($_FILES);	# code...
	 $arqui=$_FILES["arqui"];
	 $userLink=$_COOKIE['userLink'];
	 if (!is_dir($userLink."profile")) {
	 	mkdir($userLink."profile/",0755,true);
	 	// code...
	 }

	 $arquiN=explode(".", $arqui["name"]);
	 if ($arquiN[sizeof($arquiN)-1]!="jpg") {
	 	die("upload sem sucesso");
	 		# code...
	} else {echo "<script>alert('sucessfull')</script>";

move_uploaded_file($arqui["tmp_name"], $userLink."profile/"."profile.jpg");
header("location: myPerfil.php");
}
}


	?>
</body>
</html>