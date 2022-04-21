<?php
	class Pessoa {
		public $cpf, $nome, $telefone, $email, $senha;

		public function __construct(string $cpf, string $nome, string $telefone, string $email, string $senha) {
			$this->cpf = $cpf;
			$this->nome = $nome;
			$this->telefone = $telefone;
			$this->email = $email;
			$this->senha = $senha;
		}
	}
?>
