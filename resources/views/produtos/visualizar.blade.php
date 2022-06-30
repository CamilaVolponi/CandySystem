@extends('templates.logado')

@section('title', 'Produtos - Candy System')

@section('content')
	<main>
        <p class="titulo">VISUALIZAR PRODUTO</p>
        <fieldset>
            <legend class="subtitulo">Informações do produto</legend>
            <p>Nome: {{$produto["nome"]}}</p>
            <p>Preço: {{$produto["preco"]}}</p>
        </fieldset>
        <fieldset>
            <legend class="subtitulo">Ingredientes</legend>
            @foreach($ingredientes as $ingrediente)
                <p>- {{$ingrediente["quantidade"]}} {{$ingrediente["unidadeDeMedida"]}} de {{$ingrediente["descricao"]}}</p>
                <br>
            @endforeach
        </fieldset>

        <fieldset>
            <legend class="subtitulo">Modo de preparo</legend>
            @foreach($modos_de_preparos as $modo_de_preparo)
                <p>- {{$modo_de_preparo["ordem"]}} - {{$modo_de_preparo["descricao_do_passo"]}}</p>
                <br>
            @endforeach
        </fieldset>
    </main>

    <script src={{ asset('js/modaisProduto.js') }} ></script>
    <link rel="stylesheet" href="{{ asset('css/styleProdutos.css') }}">
@endsection




