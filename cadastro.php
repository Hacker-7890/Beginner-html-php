<!DOCTYPE html>
<html lang="en">

<head>
	<meta  name="viewport" content="width">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<link rel="stylesheet" type="text/css" href="log.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<h1><img src="icon/cmprs.png" id="h1"> FeedBusiness</h1>
	<div class="box">
		<form action="inputUser.php" method="post">

			<fieldset>
				<legend>cadastro</legend>
				<br>
				<div class="inputs">
					<input type="text" name="nome" class="inputUser" required id="nome">
					<label for="nome" class="lput">nome completo</label>
					
				</div><br>
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
				<p>sexo</p>
				
				
				<div class="inputs">
					<input type="radio" name="genero1"  >
					<label>Masculino</label>
					
				</div>
				<div class="inputs">
					<input type="radio" name="genero2" >
					<label>Femenino</label>
					
				</div><br>
				<div class="inputs">
					<label>data de nascimento</label>
					<input type="date" name="data" class="data" required>
					
					
				</div><br>
				<div class="inputs">
					<input type="text" name="provincia" class="inputUser" required id="provincia">
					<label class="lput" for="provincia">provincia</label>
					
				</div><br>
				<div class="inputs">
					<input type="text" name="endereço" id="endereço" class="inputUser" required>
					<label class="lput" for="endereço">endereço</label>
					
				</div><br>
				<div class="inputs">
					<input type="submit" name="cadastrar" class="inputSu" value="cadastrar">
					</div>
			</fieldset>
		</form>
		
	</div>
</body>
</html>