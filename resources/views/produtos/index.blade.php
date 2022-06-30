@extends('templates.logado')

@section('title', 'Produtos - Candy System')

@section('content')
	<main>
        <form class="search-container">
            <input type="text" id="search-bar" placeholder="Busca produto">
            <a href="#"><img class="search-icon" src="./imagens/busca.png"></a>
        </form>

        <table class="tabela">
            <thead>
                <tr>
                    <th>Nome produto</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($produtos as $produto)
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td>
                        <div class="dropdown">
                            <button class="dropbtn"><img class="imgAcoes" src="./imagens/acoes.png"></button>
                            <div class="dropdown-content">
                                <a href="#" class="editarProduto">Editar</a>
                                <a href="#" class="excluirProduto">Excluir</a>
                                <a href="{{ route('produtos.show', "$produto->id") }}" class="visualizarProduto">Visualizar</a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <a href="{{ route('produtos.create') }}"><button class="botaoProdutos">Inserir Produto</button></a>
    </main>

    <!-- modal editar produto -->
    <div id="modal-editar-produto" class="modal-container">
        <div class="modalEditarProduto">
            <button class="fechar">X</button>
            <p class="tituloModal">Editar Produto</p>

            <form class="formModalEditarProduto">
                <!--div de dados do produto-->
                <div>
                    <label>Titulo do produto: <input type="text" name="tituloProduto" required></label>

                    <label>Preço do produto: <input type="text" name="precoProduto" required></label>
                </div>

                <!--div de ingrediente-->
                <div>
                    <p class="subtituloModal">Ingrediente</p>
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
                            <button class="cadastroIngrediente">Inserir ingrediente</button>
                        </div>
                    </form>

                    <table class="tabelaInserirProduto">
                        <thead>
                            <tr>
                                <th>Nome ingrediente</th>
                                <th>Quantidade</th>
                                <th>Unidade de medida</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Ovo</td>
                            <td>3</td>
                            <td>Unidade</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropbtn"><img class="imgAcoes" src="./imagens/acoes.png"></button>
                                    <div class="dropdown-content">
                                        <a href="#" class="EditarIngrediente">Editar</a>
                                        <a href="#" class="ExcluirIngrediente">Excluir</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Açucar</td>
                            <td>2</td>
                            <td>Xícara de chá</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropbtn"><img class="imgAcoes" src="./imagens/acoes.png"></button>
                                    <div class="dropdown-content">
                                        <a href="#" class="EditarIngrediente">Editar</a>
                                        <a href="#" class="ExcluirIngrediente">Excluir</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <!--div de preparo-->
                <div>
                    <p class="subtituloModal">Modo de preparo</p>
                    <form>
                        <div>
                            <label>Passo: <textarea cols="125" rows="5" id="passo"></textarea></label>
                            <button class="cadastroPreparo">Inserir preparo</button>
                        </div>
                    </form>

                    <div>
                        <table class="tabelaInserirProduto">
                            <thead>
                                <tr>
                                    <th>Ordem</th>
                                    <th>Passo</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Bata todos os ingredientes no liquidifcador.</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="dropbtn"><img class="imgAcoes" src="./imagens/acoes.png"></button>
                                        <div class="dropdown-content">
                                            <a href="#" class="EditarPasso">Editar</a>
                                            <a href="#" class="ExcluirPasso">Excluir</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Coloque em uma forma untada e enfarinhada.</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="dropbtn"><img class="imgAcoes" src="./imagens/acoes.png"></button>
                                        <div class="dropdown-content">
                                            <a href="#" class="EditarPasso">Editar</a>
                                            <a href="#" class="ExcluirPasso">Excluir</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Leve ao forno preaquecido e deixe assar por cerca de 40 minutos.</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="dropbtn"><img class="imgAcoes" src="./imagens/acoes.png"></button>
                                        <div class="dropdown-content">
                                            <a href="#" class="EditarPasso">Editar</a>
                                            <a href="#" class="ExcluirPasso">Excluir</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <button class="editarProdutoModal">Editar produto</button>
                </div>
            </form>
        </div>
    </div>

    <!-- modal excluir produto -->
    <div id="modal-excluir-produto" class="modal-container">
        <div class="modalExcluirProduto">
            <button class="fechar">X</button>
            <h1 class="centralizar">Confirma a exclusão deste produto?</h1>
            <p class="centralizar"><a href="#">Sim</a>|<a href="#">Não</a></p>
        </div>
    </div>

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
    <link rel="stylesheet" href="{{ asset('css/styleProdutos.css') }}">
@endsection




