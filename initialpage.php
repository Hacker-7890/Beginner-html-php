<?php
session_start();

?>
<!DOCTYPE html>

<html>
<head>

  <meta charset="utf-8">
<meta  name="viewport" content="width">
	<title>initialPage</title>
	<style type="text/css">
		
		body{
      
      scroll-behavior: fixed;

      font-famidly: "Helvetica", "Lucida Grande", sans-serif;

			background:white;

		}
		img{
			position: relative;
		}
		.psa{
			border-radius: 2px;
			right: 88%;
			height: 20%;
			width: 400px;
			position: absolute;


			border: none;
		}
		
		.psq{
			height: 13%;
			position: absolute;
			right: 10%;
			border-radius: 2px;
			border: none;
		}
		.ps{
			top: 8%;
          position:absolute;
          	right: 5%;
          	height: 20%;
          	display: none;
          	}
          	h1{
          		height: 12%;
          		color:white;
          		font-style: italic;
              background: crimson;
          	}
          	#h1{
          		height: 12%;
          		width: 5%;
          	}
          	#pq{
          		top: 8%;
          position:absolute;
          	right: 5%;
          	height: 50px;
          	width: 50px;
          		position: absolute;

          	}
            #pq:hover{
              background: royalblue;
              border-radius: 20px;
            }
          	.imgs{
              scroll-behavior:;
              overflow-y:auto;
              top: 40%;
              left:10%;
          		position: absolute;
          		width: 100%;
          		height: 80%;
              
          	}
          	.fotos{
              display:grid;
              grid-template-columns:auto auto;
          		
          		right: 65%;
          		border-radius: 20px;
          		
          		position: ;
          		height: 70%;
          		width: 35%;
          	}
            .fotos>img{
              height: 700px;
              width: 400px;
              border-radius: 20px;

              position: relative;

            }
            .fotos>p{
             
              border-radius: 20px;

              position: relative;
              left: 35%;
              color: dodgerblue;

            }
            .fotos>input{
              height: 15px;
              width: 400px;
              border-radius: 20px;

              position: relative;

            }
            .imglink{
              width: inherit;
              height: inherit;
            }
          	.perfil{
              display: flex;
          		position:absolut;
          		height: 60px;
          		width: 60px;
          		top:50%;
          		right:85%;
          		border-radius: 20px;
              border: solid crimson 1px;
          		background: white;
              align-content: center;

          	}
            .perfil>img{
              position: relative;
              height:inherit;
              width:inherit;
              border-radius: inherit;
            }
            #imginfo{

              color: gray;
              background:ghostwhite;
              border:none;
              width: 70%;
              border-radius: 20px;
              padding: 20px;
            }
            #ds{

              color:ghostwhite;
              position: relative;
              left:30%;
              top:14%;
              font-size:20px;

            }
            #imginfo:hover{

              color: white;
              background:crimson;
              border:none;
              width: 70%;
              border-radius: 20px;
              
            }
          	.tags{
          		text-align: center;
          		right:50%;
          		position: absolute;
          		background:;
          		width: 45%;
          		height: 10%;
          		border-radius: 20px;
          		display:grid;
          		grid-template-columns:auto auto auto auto auto; 
          	}
          	.tags>p{
          		border:solidg 1px white;
          		border-radius: 30px;
          	}
          	.tags>p>img{
          		position: relative;
          		height:30px;
          		width: 30px;
          	}
          .tags>p:hover{

            background:crimson;

          }
          .ft{
            font-size: 20px;
            position:relative;
            left:10%;
            top:10%;



          }
          .intera{
            

            position: relative;
            grid-template-columns: auto auto auto;
            display: grid;
            padding: 4px;
            width: 45%;
            left: 38%;
          }
          .fotos>#cst{
            position: relative;
            left: 5%;
            top:1px;
            font-size: 20px;
            font-style: italic;
            font-family: sans-serif;
            color:gold;
            background:inherit;
          }
          .intera>p>img{
            border-radius: 20px;
            background: gray;

            width: 30px;
            height: 30px;
          }
           .intera>p>img:hover{
            background: dodgerblue;
            border-radius: 20px;
            width: 40px;
            height: 40px;
          }
          .up1{
            

            position:absolute;
            width:60%;
            height:69%;
            top:30%;
            background: ghostwhite;
          }
          d{
              border:solidh 1px white;
              border-radius: 3px;
              position: absolute;
              height: 10px;
              width: 10px;
              font-size:10px;
              color: white;
              background: deeppink;

            }
            .msP:hover{
              border-radius: 10px;
              background: crimson;
              height: 40px;
              width: 60%;

            }
            #coment{
              font-size: 14px;
              color:white;
          
            }
            
	</style>
	<script type="text/javascript">
		window.onload=function(){
      var coment=document.getElementsByClassName("coment")
      var likes=document.getElementsByClassName("likes")
      var partilha=document.getElementsByClassName("partilha")
      var lk=document.getElementsByClassName("lk")
      var a=document.getElementsByClassName("imglink")
      var psqsa=document.getElementById("pq")
      var ps=document.getElementById("ps")
      var up1=document.getElementById("up1")
      var perfil=document.getElementsByClassName("pr")
      
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



for(i=0;i<coment.length;i++){
  perfil[i].onclick=function(){ 
    perfil[2].src="icon/home-icon.png"
  }
  likes[i].onclick=function(e){
    alert(e.target.id)

  }

  coment[i].onclick=function(e){

    document.cookie='coments'+'='+e.target.id
    alert(e.target.id)
    window.location.href="coments.php"

  }
   partilha[i].onclick=function(e){
    window.location.href= e.target.id
  }
  
  a[i].onclick=function(e){
    var vl=e.target.id
    document.cookie='userP'+'='+vl;
    var lt=vl.lastIndexOf("}")+1
    var li=vl.indexOf("{")+1
    var td= vl.substring(li,lt)
    var link= td.replace("}",".php")
    //alert(link)
    window.location.href= link;
  }
}


      psqsa.onclick=function(){

        ps.style.display="block"
      }
      up1.style.display="none"
      document.getElementById("upp").onclick=function(){

       //req("chat.php","up1")
      //window.location.href="upload.php"
       
       document.getElementById("imgs").style.display="none"
        req("upload.php","up1")
       up1.style.display="block"
      }
      document.getElementById("ms").onclick=function(){
        req("mensagens.php","up1")
      //window.location.href="upload.php"
       up1.style.display="block"
       document.getElementById("imgs").style.display="none"

      }

      document.getElementById("perfil").onclick=()=>{
    //

    window.location.href="myPerfil.php"
    
  }

    }
	</script>
</head>
<body>
	<h1><img src="icon/cmprs.png" id="h1"> FeedBusiness</h1>
	<img src="icon/psqsas.png" id="pq">
	<form method="post" action="result.php" class="ps" id="ps">
	<input type="text" name="pesqisa" class="psa">
	<input type="submit" name="pesquisar" value="pesquisar" class="psq">
    </form>
    <div class="tags">
    	<p><img src="icon/home-icon.png"></p>
    	<p><img src="icon/1250689.png"></p>
    	<p id="ms"><img src="icon/Messaging-Message-Outline-icon.png">
<?php

$arq=$_SESSION['email'].$_SESSION['number'].$_SESSION['senha'];
    $dir=base64_encode($arq).'msg/';
    //echo "$dir";
    $msg=scandir($dir);
    if (is_dir($dir)) {
      $msgC=count($msg)-2;

    echo "<d id='mN'>$msgC</d>";
    }

?>
      </p>
    	<p id="perfil"><img src="icon/6681204.png"></p>
      <p id="upp"><img src="icon/upload2.png"></p>
    </div>
    <div id="up1" class="up1"></div>
    <div class="imgs" id="imgs">
      <?php
 
 if (!isset($_SESSION["email"]) && !isset($_SESSION["number"]) && !isset($_SESSION["senha"])||!isset($_COOKIE['userLink'])) {
  echo "<script>alert('login or create new acount')
  window.location.href='login.php'
  </script>";
  @header("location:index.php");
 }
    else{
echo("<br>");
$dir="uploads";
if(!is_dir($dir)){
mkdir($dir,0755,true);
}
$pasta=array_diff(scandir($dir),[".",".."]);
foreach($pasta as $pas){
  $pas1=str_ireplace(",", "/", $pas);
  $pos=strrpos($pas1, "[");
  $profile=strstr($pas1,"{");

  //pegando comentarios;

  $cmt="C".str_ireplace("jpg","txt", $pas);
  
  if (is_file("comentaries/".$cmt)) {
    // code...
  $comts=file("comentaries/".$cmt);
      $vcmt=count($comts);
  echo $pos;
  echo $profile;
echo("<div id='imginfo' id='$dir/$pas'><div class='perfil' id='$dir/$pas'><img src='$profile' class='pr'><p class='ft' id='$dir/$pas'>$pas</p></div>"."<br>"."  <div class='fotos' id='$dir/$pas'>"."<img src=$dir/$pas id='$dir/$pas' class='imglink'><p id="."ds".">descricao dos rodutos malucos tipo nao tem mais nada pra niguem</p><p id="."cst".">150mt</p></div><div class='intera'id='$dir/$pas'><p class='lk' id='$dir/$pas'><img src='icon/like.png' class='likes' id='$dir/$pas'></p><p id='coment'><img src='icon/coment.png' class='coment' id='$dir/$pas'>".$vcmt."</p><p><img src='icon/partilha.png' class='partilha' id='$dir/$pas'></p></div></div>  ");

}
else{
  echo $pos;
  echo $profile;
echo("<div id='imginfo' id='$dir/$pas'><div class='perfil' id='$dir/$pas'><img src='$profile' class='pr'><p class='ft' id='$dir/$pas'>$pas</p></div>"."<br>"."  <div class='fotos' id='$dir/$pas'>"."<img src=$dir/$pas id='$dir/$pas' class='imglink'><p id="."ds".">descricao da puta e dos meus vicios que nao me deixam viver em paz</p><p id="."cst".">150mt</p></div><div class='intera'id='$dir/$pas'><p class='lk' id='$dir/$pas'><img src='icon/like.png' class='likes' id='$dir/$pas'></p><p><img src='icon/coment.png' class='coment' id='$dir/$pas'></p><p><img src='icon/partilha.png' class='partilha' id='$dir/$pas'></p></div></div>  ");

}
}
}

?>  
    	
    </div>
    
</body>
</html>
  <?php

if (isset($_POST["up"])) {
  //print_r($_FILES); # code...
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
