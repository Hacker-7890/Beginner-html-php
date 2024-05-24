<?php
session_start();

if (isset($_POST['enviar'])) {
	# code...

 print_r($_REQUEST);
$arq="papo.chat";
if (!is_file($arq)) {
	# code...
	$arqA=fopen($arq,"w");
	
	
	
	fclose($arqA);

	

}
$assu=$_POST["testo"];
$assuR=str_ireplace("<", ":", $assu);
$arqA=fopen($arq,"a");
$cara=$_SESSION["number"];
    fwrite($arqA,"<b>$cara</b>".":".$assuR."\r\n");
	
	$tam=filesize("$arq");
   //$com=file_get_contents($arq);

   
     
    fclose($arqA);

    function ler(){
    	$arqR=fopen("papo.chat","r");
    	$tam=filesize("papo.chat");

    	 while (!feof($arqR)) {
    	# code...
    	$linha=fgets($arqR,"$tam");
    	echo "<p>$linha</p>";
    }
      fclose($arqR);
     
    }
    ler();
     header("location:chat.php");
}
?>
<script>
<?php
echo "stringA";
?>

</script>