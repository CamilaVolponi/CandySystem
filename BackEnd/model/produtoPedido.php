<?php
require_once 'produto.php';

class ProdutoPedido {
    private $quantidade, $preco, $produto;

    public function __construct(int $quantidade, float $preco, Produto $produto) {
        $this->quantidade = $quantidade;
        $this->preco = $preco;
        $this->produto = $produto;
    }

    public function printQuantidade(): void {
        echo "Quantidade: " . $this->quantidade . "\n";
    }
    public function printPreco(): void {
        echo "Preço: " . $this->preco . "\n";
    }
    public function printProduto(): void {
        echo "<fieldset>";
        echo "<legend>Produto:</legend>";
        $this->produto->printAllInfos();
        echo "</fieldset>";
    }
    
    public function printAllInfos(): void {
        echo "<pre>";
        $this->printQuantidade();
        $this->printPreco();
        echo "</pre>";
        $this->printProduto();
    }
}
?>
