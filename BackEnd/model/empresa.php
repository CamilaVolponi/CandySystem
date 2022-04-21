<?php
class Empresa {
    private $cnpj, $nome;

    public function __construct(string $cnpj, string $nome) {
        $this->cnpj = $cnpj;
        $this->nome = $nome;
    }
}
?>
