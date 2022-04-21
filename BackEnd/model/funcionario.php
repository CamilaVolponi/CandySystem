<?php

require_once "pessoa.php";

class Funcionario extends Pessoa {
    public $cargo;

    public function __construct(string $cargo, string $cpf, string $nome, string $telefone, string $email, string $senha ) {
        parent::__construct($cpf, $nome, $telefone, $email, $senha);
        $this->cargo = $cargo;
    }
}
?>
