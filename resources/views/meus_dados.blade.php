@extends('templates.logado')

@section('title', 'Meus dados - Candy System')

@section('content')
	<style>
		main{
			display: flex;
			justify-content: center;
			align-items: center
		}
		h1 {
			color:black;
			font-size: 5em;
		}
        h4{
            color:black;
        }
	</style>
	<main>
{{--       <pre style="color: black">{{ var_dump($endereco) }}</pre>--}}
        @if(isset($endereco))
            <div>
                <h4>Cep: {{ $endereco["cep"] }}</h4>
                <h4>Rua: {{ $endereco["rua"] }}</h4>
                <h4>Bairro: {{ $endereco["bairro"] }}</h4>
                <h4>Cidade: {{ $endereco["cidade"] }}</h4>
                <h4>Número: {{ $endereco["numero"] }}</h4>
                <h4>Complemento: {{ $endereco["complemento"] }}</h4>
                <h4>Referência: {{ $endereco["referencia"] }}</h4>
            </div>
        @else
            <h1>Tela de Meus Dados</h1>
        @endif
	</main>
@endsection
