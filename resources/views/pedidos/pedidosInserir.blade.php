@extends('templates.logado')

@section('title', 'Pedidos - Candy System')

@section('content')
	<main>
        @isset($data)
            <h1>{{$data["title"]}}</h1>
            @isset($data["id"])
                <p>{{$data["id"]}}</p>
            @endisset
        @endisset

        <p class="titulo">INSERIR PEDIDO</p>

        <form class="formModalInserirPedido">
            <!--div de dados do cliente-->
            <fieldset>
                <legend class="subtitulo">Informações do Cliente</legend>


                <label>CPF: <input type="text" name="nomeCliente" required></label><button class="buscarClientes"><img class="imgBuscarClientes" src="{{ asset("imagens/busca.png") }}">  Buscar cliente</button>
                <br><br>
                <label>Nome: <input type="text" name="nomeCliente" required></label>
                <br><br>
                <label>Telefone: <input type="text" name="telefoneCliente" required></label>

                <fieldset>
                    <legend class="endereco">Endereço</legend>
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
                </fieldset>
            </fieldset>

            <!--div de dados do Pedido-->
            <fieldset>
                <legend class="subtitulo">Informações do Pedido</legend>

                <label>Para o dia: <input type="date" name="data" required></label>

                <label>Para o horário: <input type="time" name="horario" required></label>

                <label>Forma de pagamento:
                    <select>
                        <option>Crédito</option>
                        <option>Dinheiro</option>
                        <option>PIX</option>
                    </select>
                </label>
            </fieldset>

            <!--div de produtos-->
            <fieldset>
                <legend class="subtitulo">Produtos</legend>

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
                                <button class="dropbtn"><img class="imgAcoes" src="{{ asset("imagens/acoes.png") }}"></button>
                                <div class="dropdown-content">
                                    <a href="#" class="EditarProdutoPedido">Editar</a>
                                    <a href="#" class="ExcluirProdutoPedido">Excluir</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </fieldset>
            <button class="cadastroPedido">Cadastrar pedido</button>
        </form>
	</main>

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
    <link rel="stylesheet" href="{{ asset('css/pedidos/stylePedidosInserir.css') }}">
@endsection
