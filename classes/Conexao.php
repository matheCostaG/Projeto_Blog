<?php
  class Conexao{
  private $host = 'localhost';
	private $usuario = 'root';
	private $senha = '170s6612';
	private $database = 'blog';

	public function conecta_mysql(){
		$conn = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
		mysqli_set_charset($conn, 'utf8');
		if(mysqli_connect_errno()){
			echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();
		}

		return $conn;
	}
  }
 ?>
