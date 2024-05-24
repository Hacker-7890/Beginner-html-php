

<html>
<link rel="stylesheet" type="text/css" href="estilos.css">

<head>
	<script type="text/javascript">
		
		alert('12345678')
	</script>
</head>

<body> 
<div class="topo">
		<p>eu</p>
	<p>vc</p>
	<p>ele</p>
	<p>nos</p>
	<p>vos</p>
	<p>vos</p>
	<p>eles</p>
	<p>todos</p>
</div>
<h1>My-Comerce</h1>
<div class="userInfo">
	
	<p>HOME</p>
	<p>SHOP</p>
	<p>USERS</p>
	<p>FAVORITE</p>
	<p>CREDIT</p>
	<p>CREDENCIAL</p>
	<p>CHATS</p>
	<p>CONTACTS</p>


</div> 
<div class="destaques">
	
	<img src="006.png">

</div>
<div class="news">
<?php
echo("<br>");
$dir="uploads";
if(!is_dir($dir)){
mkdir($dir,0755,true);
}
$pasta=array_diff(scandir($dir),[".",".."]);
foreach($pasta as $pas){
echo("<p>"."<img src=$dir/$pas>"."</p>"."<br>");


}


?>	
</div>

<div class="sites">
<p>a</p>
<p>s</p>
<p>d</p>
<p>f</p>
<p>g</p>
<p>h</p>
<p>j</p>
<p>k</p>
<p>l</p>
<p>z</p>
<p>x</p>
<p> hgh</p>

	


</body>
</html>