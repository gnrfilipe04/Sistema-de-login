<?php

session_start();

if (!isset($_SESSION['email'])){
	header('Location: index.php?erro=1');
}

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

			function Sair(){

				var sair = document.getElementById("sair");

				if (sair){

					window.location.href = "http://localhost/Sistema%20de%20login/sair.php";

				}

			}







		</script>


</head>
<body style = "font-family:Verdana, Geneva, sans-serif;">

	<div class="col-md-6">
	Usuário autenticado	
	<br>	
	<?= $_SESSION['email']; ?>
	<br>
	<?= $_SESSION['senha']; ?>		
	<button type="submit" id="sair" class="btn btn-primary form-control" onclick="Sair();">Sair</button>	
		
	</div>
	
	
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
		
	</script>
</body>
</html>