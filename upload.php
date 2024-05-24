<html>
<head>
	<meta  name="viewport" content="width">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
</head>
<style type="text/css">
	

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
		<h1 id="hm">publicando</h1>
	<form action="" method="post" enctype="multipart/form-data" name="up" id="upp">
		<input type="number" placeholder="preco" required name="preco">
		<input type="file" name="arqui" id="file" >
		<input type="submit" name="up"value="publicar" id="publicar">
		
	</form>
</div>
<script type="text/javascript">
	window.onload=function(){
	var file=document.getElementById("file");
	var upload=document.getElementById("upload");
	var publicar=document.getElementById("publicar");
	//var bd=document.getElementById("bodyy");

	function oculto(){
		file.style.display="none"
        publicar.style.display="none"

}
 
  function up(){
      upload.style.width="100%"
        file.style.display="block"
        publicar.style.display="block" 
        //upI.style.display="none"
       	file.click()
  }
  oculto();
  up()
}
</script>
	<?php

if (isset($_POST["up"])) {
	//print_r($_FILES);	# code...
	 $arqui=$_FILES["arqui"];
	 $userLink=$_COOKIE['userLink'];
	 $profile=$userLink."profile,profile.jpg";

	 $arquiN=explode(".", $arqui["name"]);
	 if ($arquiN[sizeof($arquiN)-1]!="jpg") {
	 	die("upload sem sucesso");
	 		# code...
	} else {echo "<script>alert('sucessfull')</script>";

move_uploaded_file($arqui["tmp_name"], "uploads/".date("d-m-y_h-i-s")."-".$profile);


//header("location:initialpage.php");
}
}


	?>
</body>
</html>