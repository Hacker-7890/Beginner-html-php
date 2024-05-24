<?php
//echo "<h1>Mensagens</h1><h1>";
   @$pess=$_COOKIE['userLink'];
   $pessP=str_ireplace("{","",$pess);
   $pessA=str_ireplace("}","", $pessP)."msg";
   $verify=scandir("$pessA/");
   @$c= $_COOKIE['userP'];
   $cc=strrchr($c,"{");
   $ccc=str_ireplace("profile,profile.jpg", "", $cc);
   $ccc1=str_ireplace("{", "", $ccc);
   $ccc2=str_ireplace("}", "", $ccc1)."msg";
   @$arq=$_COOKIE['userLink']."-".$ccc.".txt";
   $arq2=$ccc."-".$_COOKIE['userLink'].".txt";
   @$arq3=$_COOKIE['mensa'];
   $fotoU="<img src="."'".$pess."profile/profile.jpg"."'"." id='fotoU'".">";
 
if (isset($_GET['content'])) {
   $contd=$_GET['content'];

  
   if (isset($_COOKIE['mensa'])) {

      $arqA=fopen("$pessA/"."$arq3","a+");
      fwrite($arqA,$fotoU. $contd."\n");
      fclose($arqA);
      copy("$pessA/".$arq3,"$ccc2/".$arq3);
      // code...
   }

   if (is_file("$pessA/".$arq2)) {
      $arqA=fopen("$pessA/"."$arq2","a+");
      fwrite($arqA,$fotoU. $contd."\n");
      fclose($arqA);
      copy("$pessA/".$arq2,"$ccc2/".$arq2);
   }
   else{

      $arqA=fopen("$pessA/"."$arq","a+");
      fwrite($arqA,$fotoU. $contd."\n");
      fclose($arqA);
      copy("$pessA/".$arq,"$ccc2/".$arq);
   }
   
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
   $arq2=$ccc."-".$_COOKIE['userLink'].".txt";

   if(is_file("$pessA/".$arq)){
      $txt=file("$pessA/".$arq);
      for ( $i=count($txt)-1 ;$i>=0; $i--) { 
         $txt1=wordwrap($txt[$i],100,"<br>",false);
         echo "<p>$txt1</p>";
      }
   }
   elseif(is_file("$pessA/".$arq2)){
      $txt=file("$pessA/".$arq2);
      for ( $i=count($txt)-1 ;$i>=0; $i--) { 
         $txt1=wordwrap($txt[$i],100,"<br>",false);
         echo "<p>$txt1</p>";
      }

   }
}
   ler();
  
//echo "<br>$arq2<br>";
//echo "$arq";




}

?>
