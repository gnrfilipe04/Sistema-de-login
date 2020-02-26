<?php

class db{

	private $host = 'localhost'; 

	private $usuario = 'root';

	private $senha = '';

	private $database = 'sistema_login';

	public function conecta_mysql(){

		$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

		mysqli_set_charset($con, 'utf-8');

		if (mysqli_connect_errno()){
			echo 'Erro ao conectar com o Banco de dados: '. mysqli_connect_error();
		}
		return $con;
	}
}

?>