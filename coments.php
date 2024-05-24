<!DOCTYPE html>
<html>
<head>
	<meta  name="viewport" content="width">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>



<style type="text/css">
	body{
		height: 100%;
		width: 100%;
		background: indigo;
	}
	#back{

		width: 35px;
		height:30px;
	}
	#back:hover{
		background: dodgerblue;

		width: 30px;
		height: 20px;
	}
	img{
		border-radius: 20px;

		box-align: left;
		width:200px;
		height:250px;
		left: 3%;
	}
	#rq{
		padding: 6px;
		overflow-y:none;
		display: flex;
		position: absolute;
		bottom: 0.5%;
		width: 100%;
	}
	#btn{
		background:lightblue;

		border-radius:6px;
	}
	#btn:hover{
		background:yellow;

		border-radius:6px;
	}
	#rq>button>img{
		border-radius: inherit;
		width: inherit;
		height: inherit;
	}
	p{
		position: relative;
		background:mediumorchid;
		border-radius: 20px;
		height: 20px;
		width: 60%;
        text-align: left;
		display: flex;
		flex-wrap: wrap;
		word-spacing: 5px;
		font-family: sans-serif;
		color: white;
		padding: 2%;
		font-style: italic;
	}
	#coment{
		/*background:rosybrown;*/
		position: relative;

       height:40%;
       width:inherit;
		
	}
	#txto{
		position:absolute;
		height: 55%;
		width: 100%;
		overflow-y: scroll;
		/*overflow-y: hidden;*/
	}
	#txt{
		font-size: 16px;
		color: black;
		background: lightblue;
		padding-left: 60px;
		text-align: center;
		border-radius: 20px;
		width: 45%;
	}
	#txt:hover{
		
		background:yellow;
		padding-left: 60px;
		text-align: center;
		border-radius: 20px;
		width: 45%;
	}

</style>
</head>
<body>
<div id="coment">
<?php

echo "<a href='initialpage.php'><img src='icon/back.png' id='back'></a><h1>Pegado cometarios</h1>";
if (isset($_COOKIE['coments'])) {

	echo $_COOKIE['coments']."\r\n";

	$cookieR=$_COOKIE['coments'];

	$coment=str_ireplace(".jpg",".txt",$cookieR);
	$comentp=str_ireplace("uploads/","C",$coment);


	echo $coment."\n";
	echo $comentp."<br>";
	echo"<img src='$cookieR'>";
	@$txt=$_POST['comentxt'];

	$dirname="comentaries";

	if (!is_dir($dirname)) {
		
		mkdir($dirname,0755,true);
	}

	

		$crcoment=fopen("$dirname/"."$comentp","a");

		if(isset($_POST['coment'])){
		fwrite($crcoment, "$txt"."\r\n");

		fclose($crcoment);
	         }
	
	// code...

    
  

}
else{

	echo"nenhum cookie aida";

	//setcookie("coments","Eu sou um COOKIE");
	header("location:initialpage.php");
}


?>

</div>

<div id="txto">
	
<?php

 function read(){

     	$cookieR=$_COOKIE['coments'];

	$coment=str_ireplace(".jpg",".txt",$cookieR);
	$comentp=str_ireplace("uploads/","C",$coment);
	$dirname="comentaries";

$arq="$dirname/"."$comentp";
$arqA=fopen($arq,'r');

$arr=File($arq);

//print_r($arr);

for($i=count($arr)-1;$i>=0;$i--){
	echo "<p>$i.$arr[$i]"."</p>";
}


fclose($arqA);

}
read();

?>

</div>
<script type="text/javascript"> 
	window.onload=function(){
		alert(document.cookie)
		document.getElementById("btn").onclick=function() {
document.getElementById("rq").submit(function(e){

	e.preventDefault();

	alert("funciona");
})
}
	}

//document.cookie="coments=au javascript criou cookie"
</script>

<form name="cmt" method="post" id="rq">

	<input type="text" name="comentxt" id="txt" placeholder="comente aqui" maxlength="100" minlength="2">
	<button  name="coment" id="btn"><img src="icon/send.png" alt="comentar"></button>
	
</form>
</body>
</html>
