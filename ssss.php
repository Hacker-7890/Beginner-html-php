<?php
 session_start();
 //print_r($_SESSION);
 //echo $_SESSION["email"];
 //echo $_SESSION["number"];
 //echo $_SESSION["senha"];
 if (isset($_SESSION["email"]) && isset($_SESSION["number"]) && isset($_SESSION["senha"]) or isset($_COOKIE['userLink'])) {
 	echo "<script>alert('logado')</script>";
 	//echo "kkkkk";
 	# code...
 }
 else{
 	header("location:login.php");
 }
?>

<!DOCTYPE html>
<html>
	<meta  name="viewport" content="width">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
<head>
	<title>my_acount</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script type="text/javascript">
		window.onload=function(){

			function req(site,id){
  sys=new XMLHttpRequest()

  sys.onreadystatechange=function(){

    if(sys.readyState==4&&sys.status==200){


      document.getElementById(id).innerHTML = this.responseText

    }
  }
  sys.open("Get",site,true)
  sys.send()

}


			var pft=document.getElementById("perft")
			var my=document.getElementById("myUploads")
			my.style.display="none"
			var msBox=document.getElementById("msBox")

			var envi=document.getElementById("enviar")
         var mensa=document.getElementById("mensa")
         envi.addEventListener("click",function(event){
            event.preventDefault()
            
            var cont=mensa.value
            var http= new XMLHttpRequest()
            http.onreadystatechange=function(){
            if (this.readyState===4&&this.status==200) {

               document.getElementById("msBox1").innerHTML=this.responseText

            }
         }
          http.open("GET","post.php?content="+cont,true)
          http.send() 
          mensa.value=""; 
      
         })

			msBox.style.display="none"

			document.getElementById("home").onclick=()=>{
				window.location.href="initialpage.php"
			}
			document.getElementById("perfil").onclick=()=>{
		//

		        window.location.href="myPerfil.php"
		
	}
			pft.onclick=function(){
				window.location.href="upfil.php"
			}
			document.getElementById("eMSG").onclick=()=>{

				alert('mensagem')
			      msBox.style.display="block"
			      my.style.display="none"

			      //req("chatbox.php","msBox")

		}
		document.getElementById("msfotos").onclick=()=>{
			my.style.display="block"
			msBox.style.display="none"
		}
		}
	</script>
</head>
<body>
	
<h1><img src="icon/cmprs.png" id="h1"> FeedBusiness</h1>
<div class="tags">
    	<p id="home"><img src="icon/home-icon.png" alt="pagina inicial"></p>
    	<p><img src="icon/1250689.png" alt="pessoas"></p>
    	<p><img src="icon/Messaging-Message-Outline-icon.png" alt="mensagens"></p>
    	<p id="perfil"><img src="icon/6681204.png" alt="seu perfil"></p>
      <p id="upp"><img src="icon/upload2.png" alt="postar produto"></p>
    </div>
<div class="ftperfillute" id="perft"><?php
$profile=$_COOKIE['userLink']."profile/"."profile.jpg";
echo("<img src='$profile' id='img'>");
?>
</div>
<div class="dados">
<?php
$dd=$_SESSION["email"].$_SESSION["number"].$_SESSION["senha"].".db";
$dados=file("dbase/".$dd);
echo"<p>Nome:$dados[0]</p>";
echo"<p>Email:$dados[1]</p>";
echo"<p>Numero:$dados[2]</p>";
echo"<p>senha:$dados[3]</p>";
echo"<p>Male:$dados[4]</p>";
echo"<p>Female:$dados[5]</p>";
echo"<p>Idade:$dados[6]</p>";
echo"<p>Provincia:$dados[7]</p>";
echo"<p>Bairro:$dados[8]</p>";
echo "<button id='eMSG'>enviarMensagem</button>";
echo "<button id='msfotos'>Mais produtos</button>";


?>
</div>
<div class="msBox" id="msBox">
	<div id="msBox1"> 
		<?php
		 function ler(){
      $pess=$_COOKIE['userLink'];
   $pessP=str_ireplace("{","",$pess);
   $pessA=str_ireplace("}","", $pessP)."msg";

   $c= $_COOKIE['userP'];
   $cc=strrchr($c,"{");
   $ccc=str_ireplace("profile,profile.jpg", "", $cc);
   $ccc1=str_ireplace("{", "", $ccc);
   $ccc2=str_ireplace("}", "", $ccc1)."msg";
   $arq=$_COOKIE['userLink']."-".$ccc.".txt";

      $txt=file("$pessA/".$arq);
      for ( $i=count($txt)-1 ;$i>=0; $i--) { 
         $txt1=wordwrap($txt[$i],100,"<br>",false);
         echo "<p>$txt1</p>";
      }
   }
   ler();
		?>

	</div>
	<form method="post" action="" enctype="multipart/form-data" id="mens">
   <input type="text" name="content" id="mensa">
   <button name="enviar" id="enviar">enviar</button>
   
</form>
	
</div>
<div class="msup">
<div class="myUploads" id="myUploads">
	
	<?php
echo("<br>");
$dir="uploads";
if(!is_dir($dir)){
mkdir($dir,0755,true);
}
$pasta=array_diff(scandir($dir),[".",".."]);
foreach($pasta as $pas){
echo("<div class='myUploads1'><p id=$pas>"."<img src=$dir/$pas>"."</p></div>"."<br>");


}


?>	
</div>
</div>

</div>
</body>
</html>