<?php

require_once './model/pessoa.php';
require_once './model/cliente.php';
require_once './model/empresa.php';
require_once './model/endereco.php';
require_once './model/ingrediente.php';
require_once './model/pedido.php';
require_once './model/produto.php';
require_once './model/produtoPedido.php';

$base = [
    'produtos' => [],
    'produtosPedidos' => [],
];                                                          

$pessoa = new Pessoa("000.000.000-00", "Lucas","9999999999","lucas@email.com","123456");

$endereco = new Endereco("29.999-99", "Rua da Fusca", 66, "Indianápoles", "Tão Tão Distante", "Condomínio Sherek", "Onde Judas perdeu as botas");

$cliente = new Cliente("Ronaldo", "999999999", $endereco);

$empresa = new Empresa("00.000.000/0001-99", "Rush Doce Ltda");


$ingrediente = new Ingrediente("Farinha", 2, TipoUnidadeDeMedida::Quilos);

array_push($base["produtos"], new Produto("Bolo", 20.75), new Produto("Pão", 8.00));

array_push($base["produtosPedidos"], new ProdutoPedido(4, 20.75, $base["produtos"][0]));
array_push($base["produtosPedidos"], new ProdutoPedido(4, 20.75, $base["produtos"][1]));

$pedido = new Pedido("24/04/2022", "18:00", TipoFormaPagamento::Picpay, $cliente, $pessoa);
$pedido->addProdutoPedido($base["produtosPedidos"][0]);
$pedido->addProdutoPedido($base["produtosPedidos"][1]);

// TO-DO: Incluir método de Adicionar ingredientes 
?>

<head>
    <meta name="viewport" content="width=device-width;initial-scale=1">
</head>

<style>
    html {
        font-size: 80%;
    }
    pre {
        color: green;
        font-size: 105%;
    }
</style>

<h1>Pessoa:</h1>
<?= $pessoa->printAllInfos(); ?>
<hr>

<h1>Cliente:</h1>
<?= $cliente->printAllInfos(); ?>
<hr>

<h1>Empresa:</h1>
<?= $empresa->printAllInfos(); ?>
<hr>

<h1>Endereço:</h1>
<?= $endereco->printAllInfos(); ?>
<hr>

<h1>Ingrediente:</h1>
<?= $ingrediente->printAllInfos(); ?>
<hr>

<h1>Pedido:</h1>
<?= $pedido->printAllInfos(); ?>
<hr>