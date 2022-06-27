@extends('templates.logado')

@section('title', 'Pedidos - Candy System')

@section('content')
	<main>
        <form class="search-container">
            <input type="text" id="search-bar" placeholder="Buscar cliente">
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
                @foreach($pedidos as $pedido)
                   @php
                      $client = $pedidos->find($pedido->id)->cliente;
                      $enderecoClient = $client->find($client->id)->endereco;
                   @endphp
                    <tr>
                        <td>{{ $client->nome }}</td>
                        <td>{{ $enderecoClient->rua }}, {{ $enderecoClient->bairro }}, {{ $enderecoClient->cidade }}, {{ $enderecoClient->numero }}</td>
                        <td>{{ $pedido->data_entrega }}</td>
                        <td>{{ $pedido->hora_entrega }}</td>
                        <td>Valor total</td>
                        <td> {{ $pedido->forma_pagamento->value }} </td>
                        <td class="centerAcoes"><div class="dropdown">
                                <button class="dropbtn"><img class="imgAcoes" src="./imagens/acoes.png"></button>
                                <div class="dropdown-content">
                                    <a href="#" class="editarPedido">Editar</a>
                                    <a href="#" class="excluirPedido">Excluir</a>
                                    <a href="{{ route('pedidos.show') }}" class="visualizarPedido">Visualizar</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('pedidos.create') }}"><button class="botaoPedidos">Inserir Pedido</button></a>

	</main>

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

    <script src={{ asset('js/modaisPedido.js') }} ></script>
    <link rel="stylesheet" href="{{ asset('css/stylePedidos.css') }}">
@endsection
