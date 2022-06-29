@extends('templates.template')

@section('title', 'Login - Candy System')

@section('body')
    <form class="formLogin" action="{{ route('login.sign_in') }}" method="POST">
        @csrf
        <div class="cardLogin">
            <div>
                <img src="{{ asset('imagens/logo.png') }}" class="logoLogin">
                <h1>Login</h1>
            </div>

            <div class="informacoesLogin">
                <label>Usuário</label>
                <input type="text" name="cpf" placeholder="Digite seu CPF" required value="{{$cpf ?? ''}}">
            </div>

            <div class="informacoesLogin">
                <label>Senha</label>
                <input type="password" name="senha" placeholder="Digite sua senha" required>
            </div>

            @if (isset($errors) && $errors)
                <p style="color:red;text-align: center;margin-bottom: 0.5em;">cpf ou senha inválidos</p>
            @endif

            <button type="submit" class="informacoesLogin">ENTRAR</button>
            <a href={{ route("cadastro.index") }} class="informacoesLogin">Não possui cadastro?</a>
        </div>
        <p class="copyright">&copy; Copyright Candy System</p>
    </form>

    <link rel="stylesheet" href="{{ asset('css/styleLogin.css') }}">
@endsection
