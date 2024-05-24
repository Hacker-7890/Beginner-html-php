<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ttt</title>
	<script type="text/javascript">
		window.onload=function(){
			document.getElementById('btn').onclick=function(){
				//window.body.style.bgColor="dodgerblue"
				var a=document.getElementById("ass").value
				document.getElementById("ass").value=""

				var http=new XMLHttpRequest()
				http.onreadystatechange=function(){

					if (this.readyState==4&&this.status==200) {

						document.write("<h1>"+this.responseText+"</h1>")
					}
					else{
						alert("pagina nao encontrada")
					}
				}
				http.open("POST","post.php",true)
				http.send(a)
			}

		}
	</script>
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
	<input type="text" name="ass" id="ass">
	<input type="button" name="btn" id="btn" value="enviar">
	
</form>
</body>
</html>
<?php

if (isset($_POST['ass'])) {
	echo $_POST['ass'];
	// code...
}
	?>