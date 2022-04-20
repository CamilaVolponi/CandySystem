<?php
class Funcionario extends Pessoa {
    public $cargo;

    public function __construct($cargo) {
        parent::__construct($cpf, $nome, $telefone, $email, $senha);
        $this->cargo = $cargo;
    }
}
?>