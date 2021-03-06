@extends('templates.template')

@section('title')
@yield('title')
@endsection

@section('body')
    <div class="container">
        <aside>
            <nav class="menu">
                <ul>
                    <a href="{{ route('main.index') }}"><img src="{{ asset('imagens/logo.png') }}" class="logo"></a>
                    <h1 class="informacaoUsuario">
                        <img src="{{ asset('imagens/meusDados.png') }}" class="iconeInformacaoUsuario">
                        {{ auth()->user()->cpf }}
                    </h1>
                    <li>
                        <a href="{{ route('pedidos.index') }}">
                            <img src="{{ asset('imagens/pedido.png') }}" class="iconeMenu">
                            Pedidos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('produtos.index') }}">
                            <img src="{{ asset('imagens/produto.png') }}" class="iconeMenu">
                            Produtos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route("meusDados.index") }}">
                            <img src="{{ asset('imagens/meusDados.png') }}" class="iconeMenu">
                            Meus Dados
                        </a>
                    </li>
                    <li>
                        <a href="{{ route("dadosEmpresa.index") }}">
                            <img src="{{ asset('imagens/empresa.png') }}" class="iconeMenu">
                            Área da empresa
                        </a>
                    </li>
                    <li>
                        <a href="{{route("login.logout")}}">
                            <img src="{{ asset('imagens/logout.png') }}" class="iconeMenu">
                            Logout
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        @yield('content')

        <footer class="footerTelas" >
            <p class="copyright">&copy; Copyright Candy System</p>
        </footer>
    </div>
@endsection
