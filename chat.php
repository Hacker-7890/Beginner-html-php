<!DOCTYPE html>
<html>
<head>
	<title>papo</title>
	<style type="text/css">
		.chat{
			position: absolute;
			background: skyblue;
			height: 80%;
			width: 100%;
			overflow-y: scroll;
		}
		b{color: black;}
		.testo{

			position:absolute;
			top: 95%;
			width: 85%;
		}
        .env{
        	position: absolute;
        	top: 95%;
        	left: 86%;
        	width: 15%;
     
        }
      .ptxt{
      	content: inherit;
      	position: relative;
        color: white;

width: 200px;
background-color: pink;
border-radius: 20px;

        } 
        .chat1{position: relative;
        	color: white;
        }
	</style>
</head>
<body>
	<p>oopps</p>
	<div class="chat">
		<div>
			<script type="text/javascript">
				window.onload=function(){
				var chat1=document.getElementById("chat1")
				var ptxt=document.getElementsByClassName("ptxt")
				var p=document.getElementsByTagName("p");
				alert(ptxt.length) 

				for(i=0;i<p.length;i++){
					var arr=array(i);
					alert(arr)
				}

				p[0].onclick=function(){

					alert(111)

				}
			}
			</script>
		</div>
		<div id="chat1" class="chat1">
			<?php
          $arq="papo.chat";
if (!is_file($arq)) {
			
		
	# code...
	$arqA=fopen($arq,"w");
	fwrite($arqA,"...");
	
	
	fclose($arqA);

	

}


            function ler(){
    	$arqR=fopen("papo.chat","r");
    	$tam=filesize("papo.chat");

    	
    	


    	$arr=File("papo.chat");


for($i=count($arr);$i>=0;$i--){
	
echo "<p class='ptxt'>$arr[$i]<br><br></p>";

}

   
    	
    
      fclose($arqR);
     
    }
    ler();
			?>
		</div>
		
		
	</div>
<form action="chatconfig.php" method="post">

			<textarea name="testo" class="testo"></textarea>
			<input type="submit" name="enviar" class="env" value="enviar">			
		</form>
</body>
</html>