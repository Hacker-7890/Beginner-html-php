<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php
echo "<h1 text-align='center'>LENDO ARQUIVOS</h1>";
function write(){

	$arq="arquivo.txt";
	$arqA=fopen($arq,'a');
	fwrite($arqA,random_int(0,10000000)."\r\n");
	fclose($arqA);

}
function read(){
$arq="arquivo.txt";
$arqA=fopen($arq,'r');

$arr=File($arq);


print_r($arr);

for($i=count($arr);$i>=0;$i--){
	echo "<p>$arr[$i]</p><br>";
}


fclose($arqA);

}


write();
read();
?>		