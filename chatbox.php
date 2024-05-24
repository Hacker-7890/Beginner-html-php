<?php
session_start()
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
   <style type="text/css">
      
      body{
         background:white;
         font-family: sans-serif ;
         overflow: hidden;
      }
      #contentbox1{
         height: 100%;
         width: 100%;
      }
      #contentbox{


         height: 60%;
         width: 70%;
         background: ghostwhite;
         overflow-y:auto;
         overflow:hidden;
         position: relative;

      }
#contentbox>p{
   border-radius: 30px;
   background: deeppink;
   width: 60%;
   height: 100px;
   padding: 10px;
   

}
      #mens{
         position:absolute;
         bottom: 2%;
      }
      #mens>input{
         border-radius: 25px;
         width: 450px;
         height:60px;
      }
      #mens>button{
         border-radius: 25px;
         width: 100px;
         height:60px;
         background: steelblue;
      }
      #fotoU{
         border-radius: 30px;
         height: 50px;
         width: 50px;
      }
   </style>
   <script type="text/javascript">
      window.onload=()=>{
      
         var envi=document.getElementById("enviar")
         var mensa=document.getElementById("mensa")
         envi.addEventListener("click",function(event){
            event.preventDefault()
            
            var cont=mensa.value
            var http= new XMLHttpRequest()
            http.onreadystatechange=function(){
            if (this.readyState===4&&this.status==200) {

               document.getElementById("contentbox").innerHTML=this.responseText

            }
         }
          http.open("GET","post.php?content="+cont,true)
          http.send() 
          mensa.value=""; 
      
         })
      }
   </script>
</head>
<body>
<h1>mensagens</h1>
<div id="contentbox1">
<div id="contentbox">
   <?php
   function ler(){
   @$pess=$_COOKIE['userLink'];
   $pessP=str_ireplace("{","",$pess);
   $pessA=str_ireplace("}","", $pessP)."msg";

   @$c= $_COOKIE['userP'];
   $cc=strrchr($c,"{");
   $ccc=str_ireplace("profile,profile.jpg", "", $cc);
   $ccc1=str_ireplace("{", "", $ccc);
   $ccc2=str_ireplace("}", "", $ccc1)."msg";
   @$arq=$_COOKIE['userLink']."-".$ccc.".txt";

   @$arq2=$ccc."-".$_COOKIE["userLink"]."txt";

   if(is_file("$pessA/".$arq2)){
      $txt=file("$pessA/".$arq2);
      for ( $i=count($txt)-1 ;$i>=0; $i--) { 
         $txt1=wordwrap($txt[$i],100,"<br>",false);
         echo "<p>$txt1</p>";
      }
   }
      else{
      if(is_file("$pessA/".$arq)){
      $txt=file("$pessA/".$arq);
      for ( $i=count($txt)-1 ;$i>=0; $i--) { 
         $txt1=wordwrap($txt[$i],100,"<br>",false);
         echo "<p>$txt1</p>";
      }
   }
   }
   }
   ler();
   ?>
</div>
</div>
<form method="post" action="" enctype="multipart/form-data" id="mens">
   <input type="text" name="content" id="mensa">
   <button name="enviar" id="enviar">enviar</button>
   
</form>
</body>
</html>
