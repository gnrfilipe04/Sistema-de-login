<?php

session_start();

require_once('db_class.php');

 $email = $_POST['email'];
 $senha = $_POST['senha'];
 

 $Db = new Db;
 $link = $Db->conecta_mysql();

 $sql = "SELECT * FROM formulario_login WHERE email = '$email' AND senha = '$senha'";

 $resultado = mysqli_query($link, $sql);
 
 if ($resultado){
 	
 	$dados_usuario = mysqli_fetch_array($resultado);

 	if (isset($dados_usuario['email'])) {
 		
 		$_SESSION['email'] = $dados_usuario['email'];
 		$_SESSION['senha'] = $dados_usuario['senha'];

 		header('Location: home.php');
 	
 	}else {
 		header('Location: index.php?erro=1');
 	}
 }else {
 	echo "Erro na execução da consulta, favor entrar em contato com o admin do site";
 }
?>