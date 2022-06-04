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
            <tr>
                <td>Brigadeiro</td>
                <td>
                    <div class="dropdown">
                        <button class="dropbtn"><img class="imgAcoes" src="./imagens/acoes.png"></button>
                        <div class="dropdown-content">
                            <a href="#" class="editarProduto">Editar</a>
                            <a href="#" class="excluirProduto">Excluir</a>
                            <a href="#" class="visualizarProduto">Visualizar</a>
                        </div>
                    </div>

                </td>
            </tr>
            <tr>
                <td>Pudim</td>
                <td>
                    <div class="dropdown">
                        <button class="dropbtn"><img class="imgAcoes" src="./imagens/acoes.png"></button>
                        <div class="dropdown-content">
                            <a href="#" class="editarProduto">Editar</a>
                            <a href="#" class="excluirProduto">Excluir</a>
                            <a href="#" class="visualizarProduto">Visualizar</a>
                        </div>
                    </div>

                </td>
            </tr>
            </tbody>
        </table>

        <div>
            <button class="botaoProdutos">Inserir Produto</button>
        </div>
    </main>

    <footer class="footerTelas" >
        <p class="copyright">&copy; Copyright Candy System</p>
    </footer>
    </div>

    <!-- modal inserir produto -->
    <div id="modal-inserir-produto" class="modal-container">
        <div class="modalInserirProduto">
            <button class="fechar">X</button>

            <p class="tituloModal">Inserir Produto</p>

            <form class="formModalInserirProduto">
                <!--div de dados do produto-->
                <div>
                    <label>Titulo do produto: <input type="text" name="tituloProduto" required></label>

                    <label>Preço do produto: <input type="text" name="precoProduto" required></label>
                </div>

                <!--div de ingrediente-->
                <div>
                    <form>
                        <p class="tituloModal">Ingrediente</p>

                        <div>
                            <label>Nome do ingrediente: <input type="text" name="nomeIngrediente" required></label>
                        </div>

                        <div>
                            <label>Quantidade: <input type="text" name="quantidadeIngrediente" required></label>
                        </div>

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
                                        <a href="#">Editar</a>
                                        <a href="#">Excluir</a>
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
                                        <a href="#">Editar</a>
                                        <a href="#">Excluir</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <!--div de preparo-->
                <div>
                    <form>
                        <p class="tituloModal">Modo de preparo</p>

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
                                            <a href="#">Editar</a>
                                            <a href="#">Excluir</a>
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
                                            <a href="#">Editar</a>
                                            <a href="#">Excluir</a>
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
                                            <a href="#">Editar</a>
                                            <a href="#">Excluir</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <button class="cadastroProduto">Cadastrar produto</button>
                </div>
            </form>
        </div>
    </div>

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
                    <p class="tituloModal">Ingrediente</p>
                    <form>
                        <div>
                            <label>Nome do ingrediente: <input type="text" name="nomeIngrediente" required></label>
                        </div>

                        <div>
                            <label>Quantidade: <input type="text" name="quantidadeIngrediente" required></label>
                        </div>

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
                                        <a href="#">Editar</a>
                                        <a href="#">Excluir</a>
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
                                        <a href="#">Editar</a>
                                        <a href="#">Excluir</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <!--div de preparo-->
                <div>
                    <p class="tituloModal">Modo de preparo</p>
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
                                            <a href="#">Editar</a>
                                            <a href="#">Excluir</a>
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
                                            <a href="#">Editar</a>
                                            <a href="#">Excluir</a>
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
                                            <a href="#">Editar</a>
                                            <a href="#">Excluir</a>
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
            <h1>Confirma a exclusão deste produto?</h1>
            <p class="centralizar"><a href="#">Sim</a>|<a href="#">Não</a></p>
        </div>
    </div>

    <!-- modal visualizar produto -->
    <div id="modal-visualizar-produto" class="modal-container">
        <div class="modalVisualizarProduto">
            <button class="fechar">X</button>
            <p class="tituloModal">Brigadeiro</p>
            <p class="tituloVisualizar">Ingredientes</p>
            <div class="visualizarInformacoes">
                <p>- 1 caixa de leite condensado</p>
                <p>- 1 colher (sopa) de margarina sem sal</p>
                <p>- 7 colheres (sopa) de achocolatado</p>
                <p>- 1 chocolate granulado</p>
            </div>
            <p class="tituloVisualizar">Modo de preparo</p>
            <div class="visualizarInformacoes">
                <p>1 - Em uma panela funda, acrescente o leite condensado, a margarina e o achocolatado (ou 4 colheres de
                    sopa de chocolate em pó).</p>
                <p>2 - Cozinhe em fogo médio e mexa até que o brigadeiro comece a desgrudar da panela.</p>
                <p>3 - Deixe esfriar e faça pequenas bolas com a mão passando a massa no chocolate granulado.</p>
            </div>
        </div>
    </div>
@endsection
