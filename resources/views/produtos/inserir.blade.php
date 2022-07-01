@extends('templates.logado')

@section('title', 'Produtos - Candy System')

@section('content')
	<main>
        <p class="titulo">INSERIR PRODUTO</p>

        <form class="formModalInserirProduto">
            <!--div de dados do produto-->
            <fieldset>
                <legend class="subtitulo">Informações do produto</legend>
                <label>Titulo do produto: <input type="text" name="tituloProduto" required></label>

                <label>Preço do produto: <input type="text" name="precoProduto" required></label>
            </fieldset>

            <script>
                function handleClick(event){
                    // event.preventDefault();
                    let prod = document.getElementById("ingredientes-1").cloneNode(true);

                    let body = document.getElementById("ingredientes-body");
                    prod.setAttribute("id", `ingredientes-${body.childElementCount+1}`);
                    body.append(prod);
                    console.log(body.childElementCount)
                }
            </script>
            <!--div de ingrediente-->
            <fieldset>
                <legend class="subtitulo">Ingrediente</legend>

                <button class="cadastroIngrediente">Inserir ingrediente</button>
                <table class="tabelaInserirProduto">
                    <thead>
                    <tr>
                        <th>Nome ingrediente</th>
                        <th>Quantidade</th>
                        <th>Unidade de medida</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody id="ingredientes-body">
                        <tr id="ingredientes-1">
                            <td><input type="text" name="nomeIngrediente" required></td>
                            <td><input type="number" name="quantidadeIngrediente" min="1" required></td>
                            <td><select name="tipoUnidadeMedida">
                                @foreach($unidadesDeMedida as $unidadeDeMedida)
                                    <option>{{ $unidadeDeMedida->value }}</option>
                                @endforeach
                            </select></td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropbtn"><img class="imgAcoes" src="{{ asset("imagens/acoes.png") }}"></button>
                                    <div class="dropdown-content">
                                        <a href="#" class="ExcluirIngrediente">Excluir</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <script>
                function handleClick(event){
                    // event.preventDefault();
                    let prod = document.getElementById("passo-1").cloneNode(true);

                    let body = document.getElementById("passo-body");
                    prod.setAttribute("id", `passo-${body.childElementCount+1}`);
                    body.append(prod);
                    console.log(body.childElementCount)
                }
            </script>
            <!--div de preparo-->
            <fieldset>
                <legend class="subtitulo">Modo de preparo</legend>

                <button class="cadastroPreparo">Inserir preparo</button>
                <div>
                    <table class="tabelaInserirProduto">
                        <thead>
                        <tr>
                            <th>Ordem</th>
                            <th>Passo</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody id="passo-body">
                        <tr id="passo-1">
                            <td>1</td>
                            <td><textarea cols="125" rows="3" id="passo"></textarea></td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropbtn"><img class="imgAcoes" src="{{ asset("imagens/acoes.png") }}"></button>
                                    <div class="dropdown-content">
                                        <a href="#" class="ExcluirPasso">Excluir</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </fieldset>
            <button class="cadastroProduto">Cadastrar produto</button>
        </form>

    </main>

    <!-- modal excluir ingrediente -->
    <div id="modal-excluir-ingrediente" class="modal-container">
        <div class="modalExcluirIngrediente">
            <button class="fechar">X</button>
            <h1 class="centralizar">Confirma a exclusão deste ingrediente?</h1>
            <p class="centralizar"><a href="#">Sim</a>|<a href="#">Não</a></p>
        </div>
    </div>

    <!-- modal editar ingrediente -->
    <div id="modal-editar-ingrediente" class="modal-container">
        <div class="modalEditarIngrediente">
            <button class="fechar">X</button>
            <h1 class="subtituloModal">Editar Ingrediente</h1>
            <form>
                <div>
                    <label>Nome do ingrediente: <input type="text" name="nomeIngrediente" required></label>
                </div>
                <br>
                <div>
                    <label>Quantidade: <input type="text" name="quantidadeIngrediente" required></label>
                </div>
                <br>
                <div>
                    <label>Unidade de medida: <input type="text" name="unidadeMedidaIngrediente" required></label>
                    <button class="cadastroIngrediente">Editar ingrediente</button>
                </div>
            </form>
        </div>
    </div>

    <!-- modal excluir passo -->
    <div id="modal-excluir-passo" class="modal-container">
        <div class="modalExcluirPasso">
            <button class="fechar">X</button>
            <h1 class="centralizar">Confirma a exclusão deste passo?</h1>
            <p class="centralizar"><a href="#">Sim</a>|<a href="#">Não</a></p>
        </div>
    </div>

    <!-- modal editar passo -->
    <div id="modal-editar-passo" class="modal-container">
        <div class="modalEditarPasso">
            <button class="fechar">X</button>
            <h1 class="subtituloModal">Editar Passo</h1>
            <form>
                <label>Passo: <textarea cols="125%" rows="5" id="passo"></textarea></label>
                <button class="cadastroPreparo">Editar passo</button>
            </form>
        </div>
    </div>

    <script src={{ asset('js/modaisProduto.js') }} ></script>
    <link rel="stylesheet" href="{{ asset('css/produtos/styleProdutosInserir.css') }}">
@endsection




