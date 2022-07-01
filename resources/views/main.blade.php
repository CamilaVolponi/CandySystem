@extends('templates.logado')

@section('title', 'Home - Candy System')

@section('content')
	<main>
		<div id="main">
            @foreach($pedidos as $pedido)
                @php
                    $p = $pedidos->find($pedido->id);
                    $client = $p->cliente;
                @endphp
                    <div class="notificacoesPedidos">
                        <div class="titleNotificacao">
                            <h2>Pedido do/a {{ $client->nome }}</h2>
                        </div>
                        <p>Dia da entrega: {{$pedido->data_entrega}}</p>
                        <p>Hora da entrega: {{$pedido->hora_entrega}}</p>
                        <a href="{{ route('pedidos.show', "$pedido->id")}}" class="visualizarPedido">Visualizar</a>
                    </div>
            @endforeach
		</div>
	</main>

    <link rel="stylesheet" href="{{ asset('css/styleMain.css') }}">
@endsection
