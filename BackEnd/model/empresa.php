<?php
class Empresa {
    private $cnpj, $nome;

    public function __construct(string $cnpj, string $nome) {
        $this->cnpj = $cnpj;
        $this->nome = $nome;
    }
    
    public function printNome(): void {
        echo "Nome: " . $this->nome . "<br>";
    }
    public function printCnpj(): void {
        echo "Cnpj: " . $this->cnpj . "<br>";
    }
    
    public function printAllInfos(): void {
        $this->printNome();
        $this->printCnpj();
    }
}
?>
