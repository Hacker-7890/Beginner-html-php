<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos.css">	
<title>home</title>
</head>

<body>
	<div class="topo">
		<p><img src="icon/5987462.png"></p>
	<p><img src="icon/person1.png"></p>
	<p><img src="icon/log.png"></p>
	<p><img src="icon/cash.png">
</p>
	<p><img src="icon/cmpr.png"></p>
	<p><img src="icon/Messaging-Message-Outline-icon.png"></p>
	<p><img src="icon/808730.png"></p>
	<p><img src="icon/OOjs_UI_icon_logOut-rtl.svg.png"></p>
</div>
<div class="userinfo">
	
	<p><img src="icon/home.png">HOME</p>
	<p><img src="icon/cmpr.png">SHOP</p>
	<p><img src="icon/5987462.png">USERS</p>
	<p>FAVORITE</p>
	<p><img src="icon/cash.png">CREDIT</p>
	<p><img src="icon/808730.png">CREDENCIAL</p>
	<p><img src="icon/Messaging-Message-Outline-icon.png">CHATS</p>
	<p><img src="icon/person.png">CONTACTS</p>


</div> 


<div class="re">teste
	
</div>
<div class="co">

	<?php
echo("<br>");
$dir="uploads";
if(!is_dir($dir)){
mkdir($dir,0755,true);
}
$pasta=array_diff(scandir($dir),[".",".."]);
foreach($pasta as $pas){
echo("<p id=$pas>"."<img src=$dir/$pas>"."</p>"."<br>");


}


?>	
</div>
</body>
<script type="text/javascript">
	
var pg=document.getElementsByTagName("p");
alert(pg)
pg.onmouseover=function(){
	confirm(pg.length)
}
</script>
</html>