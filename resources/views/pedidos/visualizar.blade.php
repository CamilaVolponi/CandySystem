@extends('templates.logado')

@section('title', 'Pedidos - Candy System')

@section('content')
	<main>
        <p class="titulo">VISUALIZAR PEDIDO</p>
        <fieldset>
            <legend class="subtitulo">Informações do Cliente</legend>
            <p>Nome: {{$cliente["nome"]}}</p>
            <p>Telefone: {{$cliente["telefone"]}}</p>
            <p>Endereço: {{$cliente["endereco"]}}</p>
        </fieldset>
        <fieldset>
            <legend class="subtitulo">Informações do pedido</legend>
            <p>Data da entrega: {{$pedido["data_entrega"]}}</p>
            <p>Hora da entrega: {{$pedido["hora_entrega"]}}</p>
            <p>Valor total: {{$pedido["valor_total"]}}</p>
            <p>Forma de pagamento: {{ $pedido["forma_pagamento"]}}</p>
        </fieldset>
        <fieldset>
            <legend class="subtitulo">Produtos do pedido</legend>
            @foreach($produtos as $produto)
                <div>
                    <p>Produto: {{$produto["nome"]}}</p>
                    <p>Quantidade: {{$produto["quantidade"]}}</p>
                    <p>Valor unitário: {{$produto["preco"]}}</p>
                    <br>
                </div>
            @endforeach
        </fieldset>
	</main>

    <script src={{ asset('js/modaisPedido.js') }} ></script>
    <link rel="stylesheet" href="{{ asset('css/stylePedidos.css') }}">
@endsection
