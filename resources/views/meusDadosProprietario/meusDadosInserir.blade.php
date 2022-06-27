@extends('templates.logado')

@section('title', 'Meus dados - Candy System')

@section('content')
	<main>
        <p class="tituloModal">Inserir Funcionario</p>

        <form class="formModalInserirFuncionario">
            <div>
                <div>
                    <label>Nome: <input type="text" name="nomeCliente" required></label>
                </div>
                <br>
                <div>
                    <label>CPF: <input type="text" name="telefoneCliente" required></label>
                </div>
                <br>
                <div>
                    <label>Telefone: <input type="text" name="enderecoCliente" required></label>
                </div>
                <br>
                <div>
                    <label>E-mail: <input type="text" name="enderecoCliente" required></label>
                </div>
                <br>
                <div>
                    <label>Senha: <input type="text" name="enderecoCliente" required></label>
                </div>
            </div>

            <button  class="cadastroFuncionario">Cadastrar funcionário</button>
        </form>

	</main>

    <!-- modal editar funcionario -->
    <div id="modal-editar-funcionario" class="modal-container">
        <div class="modalEditarFuncionario">
            <button class="fechar">X</button>
            <p class="titulo">Editar Funcionario</p>

            <form class="formModalEditarFuncionario">
                <div>
                    <div>
                        <label>Nome: <input type="text" name="nomeCliente" required></label>
                    </div>
                    <br>
                    <div>
                        <label>CPF: <input type="text" name="telefoneCliente" required></label>
                    </div>
                    <br>
                    <div>
                        <label>Telefone: <input type="text" name="enderecoCliente" required></label>
                    </div>
                    <br>
                    <div>
                        <label>E-mail: <input type="text" name="enderecoCliente" required></label>
                    </div>
                    <br>
                    <div>
                        <label>Senha: <input type="text" name="enderecoCliente" required></label>
                    </div>
                </div>

                <button class="editarFuncionarioModal">Editar funcionário</button>
            </form>
        </div>
    </div>

    <link rel="stylesheet" href="{{ asset('css/styleMeusDados.css') }}">
@endsection
