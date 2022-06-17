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
                        123.456.789-00
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
                        <a href="{{ route('relatorios.index') }}">
                            <img src="{{ asset('imagens/relatorio.png') }}" class="iconeMenu">
                            Relatórios
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('meusDadosProprietario.index') }}">
                            <img src="{{ asset('imagens/meusDados.png') }}" class="iconeMenu">
                            Meus Dados
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
