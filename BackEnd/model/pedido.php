<?php

require_once "pessoa.php";
require_once "cliente.php";
require_once "produtoPedido.php";

enum TipoFormaPagamento: string {
    case Pix = "Pix";
    case Dinheiro = "Dinheiro";
    case Debito = "Débito";
    case Credito = "Crédito";
    case Picpay = "PicPay";
}

class Pedido {
    private $dataEntrega, $horario, $formaPagamento;
    private $cliente, $produtosPedidos = [];
    private $resonsavel;

    public function __construct(string $dataEntrega, string $horario, TipoFormaPagamento $formaPagamento, Cliente $cliente, Pessoa $responsavel) {
        $this->dataEntrega = $dataEntrega;
        $this->horario = $horario;
        $this->formaPagamento = $formaPagamento;
        $this->cliente = $cliente;
        $this->responsavel = $responsavel;
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
        echo "Forma de Pagamento: " . var_dump($this->formaPagamento) . "\n";
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
