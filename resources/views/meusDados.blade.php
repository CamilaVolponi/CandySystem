@extends('templates.logado')

@section('title', 'Meus dados - Candy System')

@section('content')
	<main>
        <fieldset class="dadosEmpresa">
            <p>Nome: {{ $funcionario["nome"] }}</p>
            <br>
            <p>CPF: {{ $funcionario["cpf"] }}</p>
            <br>
            <p>Telefone: {{ $funcionario["telefone"] }}</p>
            <br>
            <p>E-mail: {{ $funcionario["email"] }}</p>
            <br>
            <p>Cargo: {{ $funcionario["cargo"]->value }}</p>
        </fieldset>
        <a href="#"><button class="logout">Editar meus dados</button></a>
	</main>

    <link rel="stylesheet" href="{{ asset('css/styleMeusDados.css') }}">
@endsection
