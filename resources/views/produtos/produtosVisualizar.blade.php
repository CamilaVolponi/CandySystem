@extends('templates.logado')

@section('title', 'Produtos - Candy System')

@section('content')
	<main>
        <p class="titulo">VISUALIZAR PRODUTO</p>
        <fieldset>
            <legend class="subtitulo">Informações do produto</legend>
            <p>Cento de brigadeiro</p>
            <p>Preço: 50 reais</p>
        </fieldset>
        <fieldset>
            <legend class="subtitulo">Ingredientes</legend>
            <p>- 1 caixa de leite condensado</p>
            <p>- 1 colher (sopa) de margarina sem sal</p>
            <p>- 7 colheres (sopa) de achocolatado</p>
            <p>- 1 chocolate granulado</p>
        </fieldset>

        <fieldset>
            <legend class="subtitulo">Modo de preparo</legend>
            <p>1 - Em uma panela funda, acrescente o leite condensado, a margarina e o achocolatado (ou 4 colheres de
                sopa de chocolate em pó).</p>
            <p>2 - Cozinhe em fogo médio e mexa até que o brigadeiro comece a desgrudar da panela.</p>
            <p>3 - Deixe esfriar e faça pequenas bolas com a mão passando a massa no chocolate granulado.</p>
        </fieldset>
    </main>

    <script src={{ asset('js/modaisProduto.js') }} ></script>
    <link rel="stylesheet" href="{{ asset('css/styleProdutos.css') }}">
@endsection




