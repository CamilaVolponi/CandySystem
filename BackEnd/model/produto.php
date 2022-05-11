<?php
class Produto {
    private $nome, $preco;

    public function __construct(string $nome, float $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function printNome(): void {
        echo "Nome: " . $this->nome . "\n";
    }
    public function printPreco(): void {
        echo "Preço: " . $this->preco . "\n";
    }
    
    public function printAllInfos(): void {
        echo "<pre>";
        $this->printNome();
        $this->printPreco();
        echo "</pre>";
    }
    
}
?>
