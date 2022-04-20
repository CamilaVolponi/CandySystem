<?php
	class Pessoa {
		public $cpf, $nome, $telefone, $email, $senha;

		public function __construct($cpf, $nome, $telefone, $email, $senha) {
			$this->cpf = $cpf;
			$this->nome = $nome;
			$this->telefone = $telefone;
			$this->email = $email;
			$this->senha = $senha;
		}
	}
?>