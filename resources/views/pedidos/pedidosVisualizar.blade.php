@extends('templates.logado')

@section('title', 'Pedidos - Candy System')

@section('content')
	<main>
        <p class="titulo">VISUALIZAR PEDIDO</p>
        <fieldset>
            <legend class="subtitulo">Informações do Cliente</legend>
            <p>Nome: João</p>
            <p>Telefone: 99999-9999</p>
            <p>Endereço: Rua Santos Dumont, n 76, Serra</p>
        </fieldset>
        <fieldset>
            <legend class="subtitulo">Informações do pedido</legend>
            <p>Data da entrega: 26/04/2022</p>
            <p>Hora da entrega: 18:00</p>
            <p>Valor total: 10</p>
            <p>Forma de pagamento: Dinheiro</p>
        </fieldset>
        <fieldset>
            <legend class="subtitulo">Produtos do pedido</legend>
            <p>Quantidade: 2</p>
            <p>Produto: Pão</p>
        </fieldset>
	</main>

    <script src={{ asset('js/modaisPedido.js') }} ></script>
    <link rel="stylesheet" href="{{ asset('css/stylePedidos.css') }}">
@endsection
