@extends('templates.logado')

@section('title', 'Meus dados - Candy System')

@section('content')
	<main>
        <p class="titulo">MEUS DADOS</p>

        <fieldset class="meusDados">
            @csrf
            <div>
                <div>
                    <label>Nome: <input type="text" name="nomeFuncionario" required></label>
                </div>
                <br>
                <div>
                    <label>CPF: <input type="text" name="telefoneFuncionario" required></label>
                </div>
                <br>
                <div>
                    <label>Telefone: <input type="text" name="telefoneFuncionario" required></label>
                </div>
                <br>
                <div>
                    <label>E-mail: <input type="text" name="enderecoFuncionario" required></label>
                </div>
                <br>
                <div>
                    <label>Senha: <input type="text" name="senhaFuncionario" required></label>
                </div>
                <br>
                <p>Cargo: {{ $funcionario["cargo"]->value }}</p>
            </div>

        </fieldset>
        <a href="#"><button class="atualizarFuncionario">Atualizar meus dados</button></a>
	</main>

    <link rel="stylesheet" href="{{ asset('css/styleMeusDados.css') }}">
@endsection
