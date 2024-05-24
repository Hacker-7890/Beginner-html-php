<?php
session_start();
//echo "confirm<br>";
print_r($_REQUEST);
echo "<br>";
 if (isset($_POST['submit'])) {
 	# code...
 	$email=$_POST["email"];
 	$number=$_POST["number"];
 	$senha=$_POST["password"];
 	$users=scandir("dbase");
 	$confirm=$email.$number.$senha.".db";
 	$userCript=$email.$number.$senha;
       $person1=base64_encode($userCript);
 	$person=$person1.".php";
 	echo "<br>";
 	echo "<br>";
 	echo "$confirm";
 	echo "<br>";
       setcookie("userLink","{".$person1."}", time()+10080);
 	$User=array_diff($users,[".",".."]);

 	if (is_file("dbase/".$confirm)) {

 		print_r($User);
 		$_SESSION['number']=$number;
 		$_SESSION['email']=$email;
        $_SESSION['senha']=$senha;
 		
        header("location:$person");
 		# code...
 	}

 	else{

 		header("location:cadastro.php");
 	}
 	
 }
 else{ 
header("location:login.php");
 }

?>