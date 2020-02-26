<?php

require_once('db_class.php');

 $email = $_POST['email'];
 $usuario = $_POST['usuario'];
 $senha = $_POST['senha'];

 $Db = new Db;
 $link = $Db->conecta_mysql();

 $email_existe = false;

 $sql= "SELECT * FROM formulario_login WHERE email = '$email'";

 if ($resultado_id = mysqli_query($link, $sql)){
 	
 	$dados_usuario = mysqli_fetch_array($resultado_id);
 	
 	if (isset($dados_usuario['email'])) {
 		$email_existe = true;
 	}	

 }

 if ($email_existe){
 
 	header('Location: inscreva-se.php?erro_email=1');

 	die();
}

 $sql = "INSERT INTO formulario_login (email, usuario, senha) VALUES ('$email', '$usuario', '$senha')";
 

 if (mysqli_query($link, $sql)){
 	echo 'Usuario registrado com sucesso';
 }else {
 	echo 'Erro ao registrar usuario';
 }

 
?>