<?php

$email_existe = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0;

?>

<!DOCTYPE html>
<html>

<meta charset="utf-8">
<head>
	<title>Cadastre-se</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
		</script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<script type="text/javascript">
			//código JS
		</script>


</head>
<body style = "font-family:Verdana, Geneva, sans-serif;">
	

	<div class="container">
		<div class="col-md-6">
			<p>Cadastre-se</p>
			<form method="post" action="registra_usuario.php" id="formLogin">
				
				<label>E-mail</label>
				
					<div class="form-goup">
						<input type="email" class="form-control" name="email" id="campo_email" placeholder="email" required="true">			
					</div>
				
				<label>Usuário</label>
				
					<div class="form-goup">
						<input type="text" class="form-control" name="usuario" id="campo_usuario" placeholder="usuario" required="true">
						<?php
						if ($email_existe){
							echo '<font color="#FF0000">Email já cadastrado</font>';
						}

						?>

					</div>
				
				<label>Senha</label>
				
					<div class="form-goup">
						<input type="password" class="form-control" name="senha" id="campo_senha" placeholder="senha" required="true">			
					</div>
				
					<br><br>
				<button type="submit" class="btn btn-primary form-control">Registrar</button>	
			
			</form>

			<a href="index.php" style="text-decoration: none; color: grey;">Logar</a>
			
		</div>
	</div>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
		
	</script>
</body>
</html>