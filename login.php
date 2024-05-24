<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<link rel="stylesheet" type="text/css" href="log.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<h1><img src="icon/cmprs.png" id="h1"> FeedBusiness</h1>
	<div class="box">
		<form action="confirm.php" method="post">

			<fieldset>
				<legend>LOGIN</legend>
				<br>
				
				<div class="inputs">
					<input type="email" id="email" name="email" class="inputUser" required>
					<label for="email" class="lput">email</label>
					
				</div><br>
				<div class="inputs">
					<input type="number" id="telefone" name="number" class="inputUser" required>
					<label for="telefone" class="lput">telefone</label>
					
				</div> <br>
				<div class="inputs">
					<input type="password" id="senha" name="password" class="inputUser" required>
					<label for="senha" class="lput">senha</label>
				</div><br>
				
				

				<div class="inputs">
					<input type="submit" name="submit" class="inputSu" value="logar">
					</div>
			</fieldset>
		</form>
		
	</div>
	<p>caso nao tenhas uma conta<a href="cadastro.php">cria nova conta</a> </p>
</body>
</html>