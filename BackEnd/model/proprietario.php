<?php
require_once "pessoa.php";

class Proprietario extends Pessoa {
	public function __construct(string $cpf, string $nome, string $telefone, string $email, string $senha) {
		parent::__construct($cpf, $nome, $telefone, $email, $senha);
	}
}
?>
