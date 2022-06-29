@extends('templates.logado')

@section('title', 'Meus dados - Candy System')

@section('content')
	<main>
        <fieldset class="dadosEmpresa">
            <p>Nome: ~NOME~</p>
            <br>
            <p>CPF: ~CPF~</p>
            <br>
            <p>Telefone: ~TELEFONE~</p>
            <br>
            <p>E-mail: ~EMAIL~</p>
            <br>
            <p>Cargo: ~CARGO~</p>
        </fieldset>
	</main>

    <link rel="stylesheet" href="{{ asset('css/styleMeusDados.css') }}">
@endsection
