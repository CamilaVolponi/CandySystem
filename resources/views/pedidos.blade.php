@extends('templates.logado')

@section('title', 'Pedidos - Candy System')

@section('content')
	<main>
        <form class="search-container">
            <input type="text" id="search-bar" placeholder="Buscar pedido">
            <a href="#"><img class="search-icon" src="./imagens/busca.png"></a>
        </form>

        <table class="tabela">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Endereço</th>
                    <th>Data da entrega</th>
                    <th>Hora da entrega</th>
                    <th>Valor total</th>
                    <th>Forma de pagamento</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>João</td>
                <td>Rua Santos Dumont, n 76, Serra</td>
                <td>26/04/2022</td>
                <td>18:00</td>
                <td>10</td>
                <td>Dinheiro</td>
                <td>
                    <div class="dropdown">
                        <button class="dropbtn"><img class="imgAcoes" src="./imagens/acoes.png"></button>
                        <div class="dropdown-content">
                            <a href="#" class="editarPedido">Editar</a>
                            <a href="#" class="excluirPedido">Excluir</a>
                            <a href="#" class="visualizarPedido">Visualizar</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Maria</td>
                <td>Rua Avenida Brasil, n 90, Vitória</td>
                <td>28/05/2022</td>
                <td>19:00</td>
                <td>100</td>
                <td>Crédito</td>
                <td>
                    <div class="dropdown">
                        <button class="dropbtn"><img class="imgAcoes" src="./imagens/acoes.png"></button>
                        <div class="dropdown-content">
                            <a href="#" class="editarPedido">Editar</a>
                            <a href="#" class="excluirPedido">Excluir</a>
                            <a href="#" class="visualizarPedido">Visualizar</a>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>

        <div>
            <button class="botaoPedidos">Inserir Pedido</button>
        </div>
	</main>

    <!-- modal inserir pedido -->
    <div id="modal-inserir-pedido" class="modal-container">
        <div class="modalInserirPedido">
            <button class="fechar">X</button>

            <p class="tituloModal">Inserir Pedido</p>

            <form class="formModalInserirPedido">
                <!--div de dados do cliente-->
                <div>
                    <p class="subtituloModal">Informações do cliente</p>
                    <div>
                        <button class="buscarClientes"><img class="imgBuscarClientes" src="./imagens/busca.png">  Buscar cliente</button>

                        <label>Nome: <input type="text" name="nomeCliente" required></label>
                    </div>
                    <br>
                    <div>
                        <label>Telefone: <input type="text" name="telefoneCliente" required></label>
                    </div>
                    <br>
                    <div>
                        <label>Endereço:</label>
                        <br><br>
                        <label>CEP: <input type="text" name="cep" required></label>
                        <br><br>
                        <label>Rua: <input type="text" name="rua" required></label>

                        <label>Bairro: <input type="text" name="bairro" required></label>
                        <br><br>
                        <label>Cidade: <input type="text" name="cidade" required></label>

                        <label>Numero: <input type="text" name="numero" required></label>
                        <br><br>
                        <label>Complemento: <input type="text" name="complemento" required></label>

                        <label>Referencia: <input type="text" name="referencia" required></label>
                    </div>
                </div>

                <!--div de dados do Pedido-->
                <div>
                    <p class="subtituloModal">Informações do Pedido</p>

                        <label>Para o dia: <input type="date" name="data" required></label>

                        <label>Para o horário: <input type="time" name="horario" required></label>

                        <label>Forma de pagamento:
                            <select>
                                <option>Crédito</option>
                                <option>Dinheiro</option>
                                <option>PIX</option>
                            </select>
                        </label>
                </div>

                <!--div de produtos-->
                <div>
                    <p class="subtituloModal">Produtos</p>

                    <button class="inserirProdutoPedido">Inserir produto</button>

                    <table class="tabelaInserirPedido">
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th>Quantidade</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pão</td>
                                <td>2</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="dropbtn"><img class="imgAcoes" src="./imagens/acoes.png"></button>
                                        <div class="dropdown-content">
                                            <a href="#" class="EditarProdutoPedido">Editar</a>
                                            <a href="#" class="ExcluirProdutoPedido">Excluir</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <button class="cadastroPedido">Cadastrar pedido</button>
                </div>
            </form>
        </div>
    </div>

    <!-- modal editar pedido -->
    <div id="modal-editar-pedido" class="modal-container">
        <div class="modalEditarPedido">
            <button class="fechar">X</button>

            <p class="tituloModal">Inserir Pedido</p>

            <form class="formModalEditarPedido">
                <!--div de dados do cliente-->
                <div>
                    <p class="subtituloModal">Informações do cliente</p>
                    <div>
                        <button class="buscarClientes"><img class="imgBuscarClientes" src="./imagens/busca.png">  Buscar cliente</button>

                        <label>Nome: <input type="text" name="nomeCliente" required></label>
                    </div>
                    <br>
                    <div>
                        <label>Telefone: <input type="text" name="telefoneCliente" required></label>
                    </div>
                    <br>
                    <div>
                        <label>Endereço:</label>
                        <br><br>
                        <label>CEP: <input type="text" name="cep" required></label>
                        <br><br>
                        <label>Rua: <input type="text" name="rua" required></label>

                        <label>Bairro: <input type="text" name="bairro" required></label>
                        <br><br>
                        <label>Cidade: <input type="text" name="cidade" required></label>

                        <label>Numero: <input type="text" name="numero" required></label>
                        <br><br>
                        <label>Complemento: <input type="text" name="complemento" required></label>

                        <label>Referencia: <input type="text" name="referencia" required></label>
                    </div>
                </div>

                <!--div de dados do Pedido-->
                <div>
                    <p class="subtituloModal">Informações do Pedido</p>

                    <label>Para o dia: <input type="date" name="data" required></label>

                    <label>Para o horário: <input type="time" name="horario" required></label>

                    <label>Forma de pagamento:
                        <select>
                            <option>Crédito</option>
                            <option>Dinheiro</option>
                            <option>PIX</option>
                        </select>
                    </label>
                </div>

                <!--div de produtos-->
                <div>
                    <p class="subtituloModal">Produtos</p>

                    <button class="inserirProdutoPedido">Inserir produto</button>

                    <table class="tabelaInserirPedido">
                        <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Quantidade</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Pão</td>
                            <td>2</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropbtn"><img class="imgAcoes" src="./imagens/acoes.png"></button>
                                    <div class="dropdown-content">
                                        <a href="#" class="EditarProdutoPedido">Editar</a>
                                        <a href="#" class="ExcluirProdutoPedido">Excluir</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <button class="editarPedidoBotao">Editar pedido</button>
                </div>
            </form>
        </div>
    </div>

    <!-- modal inserir produto no pedido -->
    <div id="modal-inserir-produto-pedido" class="modal-container">
        <div class="modalInserirProdutoPedido">
            <button class="fechar">X</button>
            <p class="tituloModal">Adicionar Produto</p>

            <div>
                <label>Produto:
                    <select>
                        <option>Brigadeiro</option>
                        <option>Pudim</option>
                    </select></label>
            </div>
            <br>
            <div>
                <label>Quantidade: <input type="number" name="quantidade" min="1" required></label>
            </div>

            <button class="inserirProdutoEmPedido">Cadastrar pedido</button>
        </div>
    </div>


    <!-- modal excluir pedido -->
    <div id="modal-excluir-pedido" class="modal-container">
        <div class="modalExcluirPedido">
            <button class="fechar">X</button>
            <h1 class="centralizar">Confirma a exclusão deste pedido?</h1>
            <p class="centralizar"><a href="#">Sim</a>|<a href="#">Não</a></p>
        </div>
    </div>

    <!-- modal visualizar pedido -->
    <div id="modal-visualizar-pedido" class="modal-container">
        <div class="modalVisualizarPedido">
            <button class="fechar">X</button>
            <p class="tituloModal">Visualizar pedido</p>
            <button class="fechar">X</button>
            <p class="tituloVisualizar">Informações do Cliente</p>
            <div class="visualizarInformacoes">
                <p>Nome: João</p>
                <p>Telefone: 99999-9999</p>
                <p>Endereço: Rua Santos Dumont, n 76, Serra</p>
            </div>
            <p class="tituloVisualizar">Informações do pedido</p>
            <div class="visualizarInformacoes">
                <p>Data da entrega: 26/04/2022</p>
                <p>Hora da entrega: 18:00</p>
                <p>Valor total: 10</p>
                <p>Forma de pagamento: Dinheiro</p>
            </div>
            <p class="tituloVisualizar">Produtos do pedido</p>
            <div class="visualizarInformacoes">
                <p>Quantidade: 2</p>
                <p>Produto: Pão</p>
            </div>
        </div>
    </div>

    <!-- modal editar produto do pedido -->
    <div id="modal-editar-produto-pedido" class="modal-container">
        <div class="modalEditarProdutoPedido">
            <button class="fechar">X</button>
            <div>
                <label>Produto:
                    <select>
                        <option>Brigadeiro</option>
                        <option>Pudim</option>
                    </select></label>
            </div>
            <br>
            <div>
                <label>Quantidade: <input type="number" name="quantidade" min="1" required></label>
            </div>

            <button class="editarProdutoEmPedido">Editar pedido</button>
        </div>
    </div>

    <!-- modal excluir produto do pedido -->
    <div id="modal-excluir-produto-pedido" class="modal-container">
        <div class="modalExcluirProdutoPedido">
            <button class="fechar">X</button>
            <h1 class="centralizar">Confirma a exclusão deste produto no pedido?</h1>
            <p class="centralizar"><a href="#">Sim</a>|<a href="#">Não</a></p>
        </div>
    </div>

    <script src={{ asset('js/modaisPedido.js') }} ></script>
    <link rel="stylesheet" href="{{ asset('css/stylePedidos.css') }}">
@endsection
