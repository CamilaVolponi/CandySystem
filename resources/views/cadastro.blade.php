@extends('templates.template')

@section('title', 'Cadastro - Candy System')

@section('body')
    <header>
        <div>
            <img src="{{ asset('imagens/logo.png') }}" class="logoCadastro">
            <h1 class="titulo">Cadastre sua empresa!</h1>
        </div>
    </header>

    <main>
        <form class="formCadastro" method="POST">
            @csrf
            @php
                $error = session('error')
            @endphp
            <div class="cardCadastro">
                <p>Informações da confeitaria</p>
                <div class="informacoesCadastro">
                    <label>Nome da sua confeitaria</label>
                    <input type="text" name="nomeConfeitaria" placeholder="Digite o nome de sua confeitaria" required value="{{ old("nomeConfeitaria") ?? '' }}">
                </div>

                <div class="informacoesCadastro">
                    <label>CNPJ</label>
                    <input type="text" name="cnpj" placeholder="Digite o CNPJ de sua empresa" value="{{ old("cnpj") ?? '' }}">
                    @if($error == 1)
                        <p style="color:red;text-align: center;margin-bottom: 0.5em;">cnpj já cadastrado</p>
                    @endif
                </div>

                <p>Informações pessoais</p>
                <div class="informacoesCadastro">
                    <label>Nome</label>
                    <input type="text" name="nomeProprietario" placeholder="Digite seu nome" required value="{{ old("nomeProprietario") ?? '' }}">
                </div>

                <div class="informacoesCadastro">
                    <label>CPF</label>
                    <input type="text" name="cpf" placeholder="Digite seu CPF" required value="{{ old("cpf") ?? '' }}">
                </div>

                <div class="informacoesCadastro">
                    <label>E-mail</label>
                    <input type="text" name="email" placeholder="Digite seu e-mail" required value="{{ old("email") ?? '' }}">
                </div>

                <div class="informacoesCadastro">
                    <label>Telefone</label>
                    <input type="text" name="telefone" placeholder="Digite seu telefone" required value="{{ old("telefone") ?? '' }}">
                </div>

                <div class="informacoesCadastro">
                    <label>Senha</label>
                    <input type="password" name="senha" placeholder="Digite sua senha" required value="{{ old("senha") ?? '' }}">
                </div>

                <div class="informacoesCadastro">
                    <label>Confirme sua senha</label>
                    <input type="password" name="confirmeSenha" placeholder="Confirme sua senha" required value="{{ old("confirmeSenha") ?? '' }}">
                </div>
                @if($error == 2)
                    <p style="color:red;text-align: center;margin-bottom: 0.5em;">usuário já cadastrado</p>
                @endif

                <button class="informacoesLogin">Cadastrar</button>
            </div>
        </form>
    </main>

    <footer class="footerTelas">
        <p class="copyright">&copy; Copyright Candy System</p>
    </footer>

    <link rel="stylesheet" href="{{ asset('css/styleCadastro.css') }}">
@endsection
