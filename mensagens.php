<?php
session_start();
if(!isset($_SESSION['email'])&&!isset($_SESSION['number'])&&!isset($_SESSION['senha'])){
	header("location:login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		inbox
	</title>
	<style>
		#hm{
			width: 30%;
			border-radius:10px;
		}
	</style>
</head>
<body>
	<h1 id="hm">Mensagens</h1>

	<div>
		<?php
		print_r($_SESSION);

		$arq=$_SESSION['email'].$_SESSION['number'].$_SESSION['senha'];
		$dir=base64_encode($arq).'msg/';
		echo "$dir<br>";
		$msg=scandir($dir);
		if (!is_dir($dir)) {
			mkdir($dir,0755,true);
			// code...
		}
		else{
			for ($i=2; $i<count($msg) ; $i++) { 
				$msgR=str_ireplace($_COOKIE['userLink'],"", $msg[$i]);
				$msgRR=str_ireplace("-","", $msgR);

				echo "<br><p class='"."msP"."'"."id='$msg[$i]'".'>'.$msgRR."</p>";
				// code...
			}
		}
		?>
	</div>

</body>
</html>