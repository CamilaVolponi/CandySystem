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

$pessoa = new Pessoa("000.000.000-00", "Lucas","9999999999","lucas@email.com","123456");
$funcionario = new Funcionario("000.000.000-00", "Maria","9999999999","maria@email.com","123456","chefe");
$cliente = new Cliente("Ronaldo", "999999999");
$empresa = new Empresa("00.000.000/0001-99", "Rush Doce Ltda");
$endereco = new Endereco("29.999-99", "Rua da Fusca", 66, "Indianápoles", "Tão Tão Distante", "Condomínio Sherek", "Onde Judas perdeu as botas");
$ingrediente = null;
$pedido = new Pedido("24/04/2022", "18:00", "Pix");
$produto = new Produto("Bolo", 20.75);
$produtoPedido = new ProdutoPedido(4, 20.75);
$proprietario = new Proprietario("000.000.000-00", "Vanuza","9999999999","vanuza@email.com","123456");
$receita = new Receita("Bolo");
// TO-DO: Incluir método de Adicionar ingredientes 
?>

<style>
    h2 {
        color: green;
    }
</style>

<h1>Pessoa:</h1>
<h2><?= $pessoa->printAllInfos(); ?></h2>
<hr>

<h1>Funcionário:</h1>
<h2><?= $funcionario->printAllInfos(); ?></h2>
<hr>

<h1>Cliente:</h1>
<h2><?= $cliente->printAllInfos(); ?></h2>
<hr>

<h1>Empresa:</h1>
<h2><?= $empresa->printAllInfos(); ?></h2>
<hr>

<h1>Endereço:</h1>
<h2><?= $endereco->printAllInfos(); ?></h2>
<hr>

<h1>Pedido:</h1>
<h2><?= $pedido->printAllInfos(); ?></h2>
<hr>

<h1>Produto:</h1>
<h2><?= $produto->printAllInfos(); ?></h2>
<hr>

<h1>Produto Pedido:</h1>
<h2><?= $produtoPedido->printAllInfos(); ?></h2>
<hr>

<h1>Proprietário:</h1>
<h2><?= $proprietario->printAllInfos(); ?></h2>
<hr>

<h1>Receita:</h1>
<h2><?= $receita->printAllInfos(); ?></h2>
<hr>