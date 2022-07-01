@extends('templates.logado')

@section('title', 'Meus dados - Candy System')

@section('content')
	<main>
        <p class="titulo">INSERIR FUNCIONARIO</p>

        <form class="formModalInserirFuncionario" method="POST">
            @csrf
            @php
                $error = session('error')
            @endphp
            <div>
                <div>
                    <label>CPF: <input type="text" name="cpf" required value="{{ old("cpf") ?? '' }}"></label>
                </div>
                <br>
                <div>
                    <label>Nome: <input type="text" name="nome" required value="{{ old("nome") ?? '' }}"></label>
                </div>
                <br>
                <div>
                    <label>Telefone: <input type="text" name="telefone" required value="{{ old("telefone") ?? '' }}"></label>
                </div>
                <br>
                <div>
                    <label>E-mail: <input type="text" name="email" required value="{{ old("email") ?? '' }}"></label>
                </div>
                <br>
                <div>
                    <label>Senha: <input type="password" name="senha" required value="{{ old("senha") ?? '' }}"></label>
                </div>
                <br>
                <div>
                    <label>Confirme sua senha: <input type="password" name="confirmeSenha" required value="{{ old("confirmeSenha") ?? '' }}"></label>
                </div>
            </div>
            @if($error == 1)
                <p style="color:red;text-align: center;margin-bottom: 0.5em;">usuário já cadastrado</p>
            @endif

            <button  class="cadastroFuncionario">Cadastrar funcionário</button>
        </form>

	</main>

    <link rel="stylesheet" href="{{ asset('css/styleEmpresa.css') }}">
@endsection
