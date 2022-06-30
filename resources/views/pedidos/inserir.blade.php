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

                    let body = document.getElementById("produtos-body");

                    let produtosHTML = [...document.getElementById("produtos-body").children];
                    let nome, preco, id, quantidade;
                    let produtos = produtosHTML.map((item, index) => {
                        [id, preco, nome] = item.querySelector("[name='produto']").value.split(",")
                        quantidade = item.querySelector("[name='quantidade']").value
                        return {
                            id,
                            nome,
                            preco,
                            quantidade,
                        }
                    })

                    return produtos;
                }

                const data = {
                    cliente: {
                        cpf, nome, telefone, cep,
                        rua, bairro, cidade, numero,
                        complemento, referencia
                    },
                    pedido : {
                        data_entrega,
                        hora_entrega,
                        forma_pagamento,
                        produtos: getAllProdutos(),
                    }
                }

                // console.log(data);
                // return;

                const rawResponse = await fetch(url, {
                    method: "post",
                    body: JSON.stringify(data),
                    headers: new Headers({
                        'Content-Type': 'application/json',
                        "X-CSRF-TOKEN": _token
                    })
                });
                // const { existe, cliente } = await rawResponse.json();
                console.log(await rawResponse.json())
                console.log("Enviei os dados!!!!")
            }
        </script>
        <form onsubmit="enviaDados(event)" class="formModalInserirPedido" method="POST">
            <!--div de dados do cliente-->
            @csrf
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
                    <label>Complemento: <input type="text" name="complemento"></label>

                    <label>Referencia: <input type="text" name="referencia"></label>
                </fieldset>
            </fieldset>

            <!--div de dados do Pedido-->
            <fieldset>
                <legend class="subtitulo">Informações do Pedido</legend>

                <label>Para o dia: <input type="date" name="data" required></label>

                <label>Para o horário: <input type="time" name="horario" required></label>

                <label>Forma de pagamento:
                    <select name="forma_pagamento">
                        @foreach($formasPagamento as $formaPagamento)
                            <option>{{ $formaPagamento->value }}</option>
                        @endforeach
                    </select>
                </label>
            </fieldset>


            <script>
                function handleClick(event){
                    event.preventDefault();
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

                <button onclick="handleClick(event)" class="inserirProdutoPedido">Adicionar produto</button>

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
                    </tr>
                    </tbody>
                </table>
            </fieldset>
            <button onclick="enviaDados(event)" class="cadastroPedido">Cadastrar pedido</button>
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
