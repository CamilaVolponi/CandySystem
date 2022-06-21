@extends('templates.logado')

@section('title', 'Home - Candy System')

@section('content')
	<main>
        <script>
            function add(){
                let main = document.getElementById("main");
                let firstChild = main.children[0].cloneNode(true);
                main.append(firstChild);
            }
        </script>
        <button onclick="add()">Add</button>
		<div id="main">
            <div class="notificacoesPedidos">
                <div class="titleNotificacao">
                    <h2>Pedido do/a Mario</h2>
                </div>
                <p>Produtos: Bolo de chocolate</p>
                <p>Dia da entrega: 23/04/2021</p>
                <p>Hora da entrega: 10:00</p>
            </div>
            <div class="notificacoesPedidos">
                <div class="titleNotificacao">
                    <h2>Pedido do/a Maria</h2>
                </div>
                <p>Produtos: Cento de brigadeiro</p>
                <p>Dia da entrega: 23/04/2021</p>
                <p>Hora da entrega: 10:00</p>
            </div>
            <div class="notificacoesPedidos">
                <div class="titleNotificacao">
                    <h2>Pedido do/a cliente</h2>
                </div>
                <p>Produtos: Cento de beijinho</p>
                <p>Dia da entrega: 23/04/2021</p>
                <p>Hora da entrega: 10:00</p>
            </div>
            <div class="notificacoesPedidos">
                <div class="titleNotificacao">
                    <h2>Pedido do/a cliente</h2>
                </div>
                <p>Produtos: Cento de beijinho</p>
                <p>Dia da entrega: 23/04/2021</p>
                <p>Hora da entrega: 10:00</p>
            </div>
            <div class="notificacoesPedidos">
                <div class="titleNotificacao">
                    <h2>Pedido do/a cliente</h2>
                </div>
                <p>Produtos: Cento de beijinho</p>
                <p>Dia da entrega: 23/04/2021</p>
                <p>Hora da entrega: 10:00</p>
            </div>
            <div class="notificacoesPedidos">
                <div class="titleNotificacao">
                    <h2>Pedido do/a cliente</h2>
                </div>
                <p>Produtos: Cento de beijinho</p>
                <p>Dia da entrega: 23/04/2021</p>
                <p>Hora da entrega: 10:00</p>
            </div>
            <div class="notificacoesPedidos">
                <div class="titleNotificacao">
                    <h2>Pedido do/a cliente</h2>
                </div>
                <p>Produtos: Cento de beijinho</p>
                <p>Dia da entrega: 23/04/2021</p>
                <p>Hora da entrega: 10:00</p>
            </div><div class="notificacoesPedidos">
                <div class="titleNotificacao">
                    <h2>Pedido do/a cliente</h2>
                </div>
                <p>Produtos: Cento de beijinho</p>
                <p>Dia da entrega: 23/04/2021</p>
                <p>Hora da entrega: 10:00</p>
            </div>
            <div class="notificacoesPedidos">
                <div class="titleNotificacao">
                    <h2>Pedido do/a cliente</h2>
                </div>
                <p>Produtos: Cento de beijinho</p>
                <p>Dia da entrega: 23/04/2021</p>
                <p>Hora da entrega: 10:00</p>
            </div>

		</div>
	</main>

    <link rel="stylesheet" href="{{ asset('css/styleMain.css') }}">
@endsection
