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
        <form class="formCadastro" action="#">

            <div class="cardCadastro">
                <p>Informações da confeitaria</p>
                <div class="informacoesCadastro">
                    <label>Nome da sua confeitaria</label>
                    <input type="text" name="nomeConfeitaria" placeholder="Digite o nome de sua confeitaria" required>
                </div>

                <div class="informacoesCadastro">
                    <label>CNPJ</label>
                    <input type="text" name="cnpj" placeholder="Digite o CNPJ de sua empresa">
                </div>

                <p>Informações pessoais</p>
                <div class="informacoesCadastro">
                    <label>Nome</label>
                    <input type="text" name="nomeProprietario" placeholder="Digite seu nome" required>
                </div>

                <div class="informacoesCadastro">
                    <label>CPF</label>
                    <input type="text" name="cpf" placeholder="Digite seu CPF" required>
                </div>

                <div class="informacoesCadastro">
                    <label>E-mail</label>
                    <input type="text" name="email" placeholder="Digite seu e-mail" required>
                </div>

                <div class="informacoesCadastro">
                    <label>Telefone</label>
                    <input type="text" name="Telefone" placeholder="Digite seu telefone" required>
                </div>

                <div class="informacoesCadastro">
                    <label>Senha</label>
                    <input type="password" name="senha" placeholder="Digite sua senha" required>
                </div>

                <div class="informacoesCadastro">
                    <label>Confirme sua senha</label>
                    <input type="password" name="confirmeSenha" placeholder="Confirme sua senha" required>
                </div>

                <button class="informacoesLogin">Cadastrar</button>
            </div>



        </form>
    </main>

    <footer class="footerTelas">
        <p class="copyright">&copy; Copyright Candy System</p>
    </footer>

    <link rel="stylesheet" href="{{ asset('css/styleCadastro.css') }}">
@endsection
