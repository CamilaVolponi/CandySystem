<?php
class Proprietario extends Pessoa {
	public function __construct() {
		parent::__construct($cpf, $nome, $telefone, $email, $senha);
	}
}
?>
