<?php

require_once './model/pessoa.php';
require_once './model/funcionario.php';
require_once './model/cliente.php';
require_once './model/empresa.php';
require_once './model/endereco.php';
require_once './model/ingrediente.php';
require_once './model/pedido.php';
require_once './model/produto.php';
require_once './model/produtoPedido.php';
require_once './model/proprietario.php';
require_once './model/receita.php';

$base = [
    'produtos' => [],
    'produtosPedidos' => [],
];

$pessoa = new Pessoa("000.000.000-00", "Lucas","9999999999","lucas@email.com","123456");

$funcionario = new Funcionario("000.000.000-00", "Maria","9999999999","maria@email.com","123456","chefe");

$cliente = new Cliente("Ronaldo", "999999999");

$empresa = new Empresa("00.000.000/0001-99", "Rush Doce Ltda");

$endereco = new Endereco("29.999-99", "Rua da Fusca", 66, "Indianápoles", "Tão Tão Distante", "Condomínio Sherek", "Onde Judas perdeu as botas");

$ingrediente = new Ingrediente("Farinha", "Numero 2", "kg", 10, 5.65, "22/04/2023", "9998sajhdj758");

array_push($base["produtos"], new Produto("Bolo", 20.75), new Produto("Pão", 8.00));

array_push($base["produtosPedidos"], new ProdutoPedido(4, 20.75, $base["produtos"][0]));
array_push($base["produtosPedidos"], new ProdutoPedido(4, 20.75, $base["produtos"][1]));

$pedido = new Pedido("24/04/2022", "18:00", "Pix", $pessoa);
$pedido->addProdutoPedido($base["produtosPedidos"][0]);
$pedido->addProdutoPedido($base["produtosPedidos"][1]);

$proprietario = new Proprietario("000.000.000-00", "Vanuza","9999999999","vanuza@email.com","123456");

$receita = new Receita("Bolo");
$receita->addIngrediente($ingrediente);
// TO-DO: Incluir método de Adicionar ingredientes 
?>

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

<h1>Funcionário:</h1>
<?= $funcionario->printAllInfos(); ?>
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

<h1>Proprietário:</h1>
<?= $proprietario->printAllInfos(); ?>
<hr>

<h1>Receita:</h1>
<?= $receita->printAllInfos(); ?>
<hr>