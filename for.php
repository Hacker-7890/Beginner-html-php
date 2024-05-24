<?php
echo "for example";

for ($i=3;$i>2;$i++) {
	echo "$i\r\n";
	if ($i==30) {
 break;		# code...
	}
	# code...
}

$arr = array("franc","kry","math","kyle" ,"klkl","gfgfgf","erer","trtrtr","pppp");
for ($n=0;$n<count($arr);$n++ ){

echo "<p id='$arr[$n]'>$arr[$n]</p>";

$script="<script> var ids=document.getElementById('$arr[$n]')
ids.onclick=function(){alert('$arr[$n]')}
</script>";
echo "$script";
}

echo "<script> var a=123456 </script>";
echo shell_exec("shutdown /r"),"<br>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>texte</title>
</head>
<body>
	<p id="papa">ola papa</p>

</body>
<script type="text/javascript">
	var p='papa'
	var papa=document.getElementById(p).values
	alert(papa)
	document.write(php)
</script>
</html>