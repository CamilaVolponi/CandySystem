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
                <td>Cartão de crédito</td>
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
        </div>
    </div>

    <!-- modal editar pedido -->
    <div id="modal-editar-pedido" class="modal-container">
        <div class="modalEditarPedido">
            <button class="fechar">X</button>
            <p class="tituloModal">Editar Pedido</p>
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
