<?php
class Empresa {
    private $cnpj, $nome;

    public function __construct($cnpj, $nome) {
        $this->cnpj = $cnpj;
        $this->nome = $nome;
    }
}
?>