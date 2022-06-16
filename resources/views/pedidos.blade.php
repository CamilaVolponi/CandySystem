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
                    <th>Status</th>
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
                <td>Em preparo</td>
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
                <td>Em preparo</td>
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

            <form class="formModalInserirFuncionario">
                <!--div de dados do cliente-->
                <div>
                    <p class="tituloModal">Informações do cliente</p>
                    <div>
                        <label>Nome: <input type="text" name="nomeCliente" required></label>

                        <label>Telefone: <input type="text" name="telefoneCliente" required></label>
                    </div>
                    <div>
                        <label>Endereço: <input type="text" name="enderecoCliente" required></label>
                    </div>
                </div>

                <!--div de dados do Pedido-->
                <div>
                    <p class="tituloModal">Informações do Pedido</p>

                    <label>Para o dia: <input type="date" name="data" required></label>

                    <label>Para o horário: <input type="text" name="horario" required></label>

                    <legend>Forma de pagamento:
                    <select>
                        <option>Crédito</option>
                        <option>Dinheiro</option>
                        <option>PIX</option>
                    </select></legend>
                </div>


                <!--div de produtos-->
                <div>
                    <p class="tituloModal">Produtos</p>

                    <button class="inserirProdutoPedido">Inserir produto</button>

                    <table class="tabelaInserirProduto">
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
                                        <a href="#" class="EditarPasso">Editar</a>
                                        <a href="#" class="ExcluirPasso">Excluir</a>
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

    <!-- modal inserir produto -->
    <div id="modal-inserir-produto-pedido" class="modal-container">
        <div class="modalInserirProdutoPedido">
            <button class="fechar">X</button>
            <p class="tituloModal">Adicionar Produto</p>

            <div>
                <legend>Produto:
                <select>
                    <option>Crédito</option>
                    <option>Dinheiro</option>
                    <option>PIX</option>
                </select></legend>
            </div>

            <div>
                <label>Quantidade: <input type="number" name="quantidade" min="1" required></label>
            </div>

            <button class="InserirProdutoEmPedido">Cadastrar pedido</button>
        </div>
    </div>

    <!-- modal editar pedido -->
    <div id="modal-editar-pedido" class="modal-container">
        <div class="modalEditarPedido">
            <button class="fechar">X</button>
            <p class="tituloModal">Editar Pedidos</p>
        </div>
    </div>

    <!-- modal excluir pedido -->
    <div id="modal-excluir-pedido" class="modal-container">
        <div class="modalExcluirPedido">
            <button class="fechar">X</button>
            <h1>Confirma a exclusão deste pedido?</h1>
            <p class="centralizar"><a href="#">Sim</a>|<a href="#">Não</a></p>
        </div>
    </div>

    <!-- modal visualizar pedido -->
    <div id="modal-visualizar-pedido" class="modal-container">
        <div class="modalVisualizarPedido">
            <button class="fechar">X</button>
            <p class="tituloModal">Visualizar pedido</p>
        </div>
    </div>

    <script src={{ asset('js/modaisPedido.js') }} ></script>
@endsection
