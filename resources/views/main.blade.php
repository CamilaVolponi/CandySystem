@extends('templates.logado')

@section('title', 'Home - Candy System')

@section('content')		
	<main>
		<div class="containerNotificacoes">
			<div class="notificacoesPedidos">
				<div class="titleNotificacao">
					<h2>Notificações Pedidos</h2>
				</div>
				<div>
					<p>- Você possui um pedido do produto: Bolo para sábado, dia 23/04/2021.</p>
					<p>- Você possui um pedido do produto: 1 Cento de brigadeiros para domingo, dia 24/04/2021.</p>
					<p>- Você possui um pedido do produto: Bolo para domingo, dia 24/04/2021.</p>
				</div>
			</div>

			<div class="calendario">
				<div class="titleNotificacao">
					Calendário
				</div>
				<div>
					<img src="{{ asset('imagens/calendario.png') }}">
				</div>
			</div>
			
			<div class="notificacoes">
				<div class="titleNotificacao">
					Notificação (escolhendo)
				</div>
				<div>
					
				</div>
			</div>
		</div>
	</main>
@endsection