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
                <input type="text" name="cpf" placeholder="Digite seu CPF" required value="{{old('cpf')}}">
            </div>
            
            <div class="informacoesLogin">
                <label>Senha</label>
                <input type="password" name="senha" placeholder="Digite sua senha" required value="{{old('senha')}}"> 
            </div>
            
            @if ($errors->all())
                <p style="color:red;text-align: center;margin-bottom: 0.5em;">cpf ou senha inválidos</p>
            @endif

            <button class="informacoesLogin">ENTRAR</button>
            <a href="telaCadastro.html" class="informacoesLogin">Não possui cadastro?</a>
        </div>
        <p class="copyright">&copy; Copyright Candy System</p>
    </form>
@endsection