<?php

$erro = isset($_GET['erro']) ? ($_GET['erro']) : 0;

?>

<!DOCTYPE html>
<html>

<meta charset="utf-8">
<head>
	<title>Login</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
		</script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<script type="text/javascript">
			//código JS

			$(document).ready( function(){

				var campo_vazio = false;

				$('#btnLogin').click( function(){

					if ($(campo_email).val() == ''){
						$(campo_email).css({'border-color': '#A94442'});

						campo_vazio = true;
					}else {

						$(campo_email).css({'border-color': '#CCC'});
					}

					if ($(campo_senha).val() == ''){
						$(campo_senha).css({'border-color': '#A94442'});

						campo_vazio = true;
					}else {

						$(campo_senha).css({'border-color': '#CCC'});
					}

					if (campo_vazio) return false;
				});

			});


		</script>


</head>
<body style = "font-family:Verdana, Geneva, sans-serif;">

	<div class="container">
		
		<div class="col-md-4">
			<p>Logar</p>
			<form method="post" action="valida_acesso.php" id="formLogin">
				
				<label>E-mail</label>
				
					<div class="form-goup">
						<input type="email" class="form-control" name="email" id="campo_email" placeholder="email" required="true">			
					</div>
				
				<label>Senha</label>
				
					<div class="form-goup">
						<input type="password" class="form-control" name="senha" id="campo_senha" placeholder="senha" required="true">			
					</div>
					<br>
				
				<button type="submit" id="btnLogin" class="btn btn-primary form-control">Login</button>	
			
			</form>	

			<a href="inscreva-se.php" style="text-decoration: none; color: grey;">Registrar-se</a>

			<?php

				if ($erro == 1){
					echo '<font color="#FF0000">Usuário e ou senha inválido(s)</color>';
				}
			?>

		</div>
	</div>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
		
	</script>
</body>
</html>