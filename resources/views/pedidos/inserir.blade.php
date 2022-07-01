@extends('templates.logado')

@section('title', 'Pedidos - Candy System')

@section('content')
    <main>
        <p class="titulo">INSERIR PEDIDO</p>
        @php
            $error = session('error');
            $cliente = session("cliente") ?? [];
            $endereco = $cliente["endereco"] ?? [];
            $pedido = session("pedido") ?? [];

        @endphp
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

                    let cep = document.querySelector("input[name='cep']");
                    let rua = document.querySelector("input[name='rua']");
                    let bairro = document.querySelector("input[name='bairro']");
                    let cidade = document.querySelector("input[name='cidade']");
                    let numero = document.querySelector("input[name='numero']");
                    let complemento = document.querySelector("input[name='complemento']");
                    let referencia = document.querySelector("input[name='referencia']");

                    nome.value = cliente.nome;
                    telefone.value = cliente.telefone;

                    cep.value = cliente.endereco.cep;
                    rua.value = cliente.endereco.rua;
                    bairro.value = cliente.endereco.bairro;
                    cidade.value = cliente.endereco.cidade;
                    numero.value = cliente.endereco.numero;
                    if(cliente.endereco.complemento) complemento.value = cliente.endereco.complemento;
                    if(cliente.endereco.referencia) referencia.value = cliente.endereco.referencia;

                }
                console.log("=> cpf:", cpf);
            }
            async function enviaDados(event) {
                event.preventDefault();

                let _token = document.querySelector("input[type='hidden']").value;
                let cpf = document.querySelector("input[name='cpf']").value
                let nome = document.querySelector("input[name='nomeCliente']").value;
                let telefone = document.querySelector("input[name='telefoneCliente']").value;

                let cep = document.querySelector("input[name='cep']").value;
                let rua = document.querySelector("input[name='rua']").value;
                let bairro = document.querySelector("input[name='bairro']").value;
                let cidade = document.querySelector("input[name='cidade']").value;
                let numero = document.querySelector("input[name='numero']").value;
                let complemento = document.querySelector("input[name='complemento']").value;
                let referencia = document.querySelector("input[name='referencia']").value;

                let data_entrega = document.querySelector("input[name='data']").value;
                let hora_entrega = document.querySelector("input[name='horario']").value;
                let forma_pagamento = document.querySelector("select[name='forma_pagamento']").value;

                const url = `{{route("pedidos.store")}}`;

                const getAllProdutos = () => {

                    let produtosHTML = [...document.getElementById("produtos-body").children];
                    let nome, preco, id, quantidade;
                    let produtos = produtosHTML.map((itemProduto, index) => {
                        [id, preco, nome] = itemProduto.querySelector("[name='produto']").value.split(",")
                        quantidade = itemProduto.querySelector("[name='quantidade']").value
                        return {
                            id,
                            nome,
                            preco,
                            quantidade,
                        }
                    })

                    return produtos;
                }

                let form = document.createElement('form');
                form.action = `{{route("pedidos.store")}}`;
                form.method = 'POST';
                form.style.display = "none"

                const cliente = {
                    cpf,nome,telefone,
                    endereco: {
                        cep, rua, bairro, cidade,
                        numero, complemento, referencia
                    }
                }

                const pedido = {
                    data_entrega,
                    hora_entrega,
                    forma_pagamento,
                    produtos: getAllProdutos()
                }

                form.innerHTML = `
                    <input name="_token" value="${_token}">
                    <input name="cliente" value='${JSON.stringify(cliente, null, 0)}'>
                    <input name="pedido" value='${JSON.stringify(pedido, null, 0)}'>
                `;

                // the form must be in the document to submit it
                document.body.append(form);
                form.submit();
                // test com post
            }
        </script>
        <form onsubmit="enviaDados(event)" class="formModalInserirPedido" method="POST">
            <!--div de dados do cliente-->
            @csrf
            <fieldset>
                <legend class="subtitulo">Informações do Cliente</legend>

                <label>CPF: <input type="text" name="cpf" required value="{{ $cliente["cpf"] ?? "" }}"></label>
                <button onclick="getClient()" class="buscarClientes">
                    <img class="imgBuscarClientes" src="{{ asset("imagens/busca.png") }}">  Buscar cliente</button>
                <br><br>
                <label>Nome: <input type="text" name="nomeCliente" required value="{{ $cliente["nome"] ?? "" }}"></label>
                <br><br>
                <label>Telefone: <input type="text" name="telefoneCliente" required value="{{ $cliente["telefone"] ?? "" }}"></label>

                <fieldset>
                    <legend class="endereco">Endereço</legend>
                    <label>CEP: <input type="text" name="cep" required value="{{ $endereco["cep"] ?? "" }}"></label>
                    <br><br>
                    <label>Rua: <input type="text" name="rua" required  value="{{ $endereco["rua"] ?? "" }}"></label>
                    <label>Bairro: <input type="text" name="bairro" required  value="{{ $endereco["bairro"] ?? "" }}"></label>
                    <br><br>
                    <label>Cidade: <input type="text" name="cidade" required  value="{{ $endereco["cidade"] ?? "" }}"></label>
                    <label>Numero: <input type="text" name="numero" required  value="{{ $endereco["numero"] ?? "" }}"></label>
                    <br><br>
                    <label>Complemento: <input type="text" name="complemento"  value="{{ $endereco["complemento"] ?? "" }}"></label>
                    <label>Referencia: <input type="text" name="referencia"  value="{{ $endereco["referencia"] ?? "" }}"></label>
                </fieldset>
            </fieldset>

            <!--div de dados do Pedido-->
            <fieldset>
                <legend class="subtitulo">Informações do Pedido</legend>
                <label>Para o dia: <input type="date" name="data" required value="{{ $pedido["data_entrega"] ?? "" }}"></label>
                <label>Para o horário: <input type="time" name="horario" required value="{{ $pedido["hora_entrega"] ?? "" }}"></label>
                <label>Forma de pagamento:
                    <select name="forma_pagamento">
                        @foreach($formasPagamento as $formaPagamento)
                            <option @if(!empty($pedido)  && $formaPagamento == $pedido["forma_pagamento"]) selected @endif >{{ $formaPagamento->value }}</option>
                        @endforeach
                    </select>
                </label>
            </fieldset>

            <script>
                function addProduto(event){
                    event.preventDefault();
                    let body = document.getElementById("produtos-body");
                    let prod = document.createElement("tr");
                    prod.classList.add("produto");
                    prod.innerHTML = `
                        <td>
                            <select name="produto">
@foreach($produtos as $produto)
                    <option value="{{  $produto->id }},{{ $produto->preco }},{{ $produto->nome }}">{{ $produto->nome }}</option>
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
                                    <a href="#" class="ExcluirProdutoPedido">Excluir</a>
                                </div>
                            </div>
                        </td>
                    `
                    body.append(prod);
                }
            </script>
            <!--div de produtos-->
            <fieldset>
                <legend class="subtitulo">Produtos</legend>

                <button onclick="addProduto(event)" class="inserirProdutoPedido">Adicionar produto</button>

                <table class="tabelaInserirPedido">
                    <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody id="produtos-body">
                    @if(!(isset($pedido) && $pedido != null && isset($pedido["produtos"]) && !empty($pedido["produtos"])))
                    @php // quer dizer que deu erro no cadastro do pedido e está voltando do post @endphp
                    <tr class="produto">
                        <td>
                            <select name="produto">
                                @foreach($produtos as $produto)
                                    <option value="{{ $produto->id }},{{ $produto->preco }},{{ $produto->nome }}">{{ $produto->nome }}</option>
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
                                    <a href="#" class="ExcluirProdutoPedido">Excluir</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @else
                        @foreach($pedido["produtos"] as $produto)
                            <tr class="produto">
                                <td>
                                    <select name="produto">
                                        @foreach($produtos as $produtoI)
                                            <option
                                                @if($produto["id"] == $produtoI->id) selected @endif
                                            value="{{ $produtoI->id }},{{ $produtoI->preco }},{{ $produtoI->nome }}">{{ $produtoI->nome }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input type="number" name="quantidade" min="1" required value="{{ $produto["quantidade"] }}">
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="dropbtn"><img class="imgAcoes" src="{{ asset("imagens/acoes.png") }}"></button>
                                        <div class="dropdown-content">
                                            <a href="#" class="ExcluirProdutoPedido">Excluir</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </fieldset>
            <button
                onclick="enviaDados(event)"
                class="cadastroPedido">Cadastrar pedido</button>
        </form>
    </main>

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
