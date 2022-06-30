@extends('templates.logado')

@section('title', 'Pedidos - Candy System')

@section('content')
	<main>
        <p class="titulo">INSERIR PEDIDO</p>

        <script>
            async function getClient(){
                let cpf = document.querySelector("input[name='cpf']").value
                if (!cpf) return;

                const url = `{{route("pedidos.get.cliente")}}?cpf=${cpf}`;

                const rawResponse = await fetch(url);
                const { existe, cliente } = await rawResponse.json();
                console.log("=> content:", cliente);
                if(existe){
                    let nome = document.querySelector("input[name='nomeCliente']");
                    let telefone = document.querySelector("input[name='telefoneCliente']");

                    nome.value = cliente.nome;
                    telefone.value = cliente.telefone;
                }
                console.log("=> cpf:", cpf);
            }
        </script>
        <form class="formModalInserirPedido" method="POST">
            <!--div de dados do cliente-->
            <fieldset>
                <legend class="subtitulo">Informações do Cliente</legend>

                <label>CPF: <input type="text" name="cpf" required></label>
                <button onclick="getClient()" class="buscarClientes">
                    <img class="imgBuscarClientes" src="{{ asset("imagens/busca.png") }}">  Buscar cliente</button>
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


            <script>
                function handleClick(event){
                    // event.preventDefault();
                    let prod = document.getElementById("produto-1").cloneNode(true);

                    let body = document.getElementById("produtos-body");
                    prod.setAttribute("id", `produto-${body.childElementCount+1}`);
                    body.append(prod);
                    console.log(body.childElementCount)
                }
            </script>
            <!--div de produtos-->
            <fieldset>
                <legend class="subtitulo">Produtos</legend>

                <button onclick="handleClick()" class="inserirProdutoPedido">Adicionar produto</button>

                <table class="tabelaInserirPedido">
                    <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody id="produtos-body">
                    <tr id="produto-1">
                        <td>
                            <select>
                                @foreach($produtos as $produto)
                                    <option>{{ $produto->nome }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input type="number" name="quantidade" min="1" required>
                        </td>
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
