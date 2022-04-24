<?php
class Empresa {
    private $cnpj, $nome;

    public function __construct(string $cnpj, string $nome) {
        $this->cnpj = $cnpj;
        $this->nome = $nome;
    }
    
    public function printNome(): void {
        echo "Nome: " . $this->nome . "\n";
    }
    public function printCnpj(): void {
        echo "Cnpj: " . $this->cnpj . "\n";
    }
    
    public function printAllInfos(): void {
        echo "<pre>";
        $this->printNome();
        $this->printCnpj();
        echo "</pre>";
    }
}
?>
