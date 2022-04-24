<?php

require_once "pessoa.php";
require_once "produtoPedido.php";

class Pedido {
    private $dataEntrega, $horario, $formaPagamento;
    private $pessoa, $produtosPedidos = [];

    public function __construct(string $dataEntrega, string $horario, string $formaPagamento, Pessoa $pessoa = null) {
        $this->dataEntrega = $dataEntrega;
        $this->horario = $horario;
        $this->formaPagamento = $formaPagamento;
        $this->pessoa = $pessoa;
    }

    public function addProdutoPedido(ProdutoPedido $novoProdutoPedido): void{
        array_push($this->produtosPedidos, $novoProdutoPedido);
    }

    public function printDataEntrega(): void {
        echo "Data de Entrega: " . $this->dataEntrega . "\n";
    }
    public function printHorario(): void {
        echo "Horario: " . $this->horario . "\n";
    }
    public function printFormaPagamento(): void {
        echo "Forma de Pagamento: " . $this->formaPagamento . "\n";
    }
    public function printPessoa(): void {
        echo "<fieldset>";
        echo "<legend>Pessoa:</legend>";
        $this->pessoa->printAllInfos();
        echo "</fieldset>";
    }
    public function printProdutosPedidos(): void {
        foreach($this->produtosPedidos as $chave => $produtoPedido){
            echo "<fieldset>";
            echo "<legend>Produto Pedido:</legend>";
            $produtoPedido->printAllInfos();
            echo "</fieldset>";
        }
    }
    
    public function printAllInfos(): void {
        echo "<pre>";
        $this->printDataEntrega();
        $this->printHorario();
        $this->printFormaPagamento();
        $this->printPessoa();
        $this->printProdutosPedidos();
        echo "</pre>";
    }
}
?>
