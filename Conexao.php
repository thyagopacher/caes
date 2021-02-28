<?php

class Conexao {
	
	public $host = "dbmy0040.whservidor.com";
	public $banco = "conteudoan";
	public $usuario = "conteudoan";
	public $senha = "viraweb10";
	public $conexao;
	
	public function __construct(){
		$this->conectar();
	}
	
    function __destruct() {
        mysqli_close($this->conexao);
    }
	
	public function conectar(){
		$this->conexao = mysqli_connect($this->host, $this->usuario, $this->senha, $this->banco);

		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}	
	}
}