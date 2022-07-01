@extends('templates.logado')

@section('title', 'Área da empresa - Candy System')

@section('content')
	<main>
        <p class="titulo">ÁREA DA EMPRESA</p>

        <fieldset class="dadosEmpresa">
            <p class="tituloEmpresa">Nome da empresa: {{ $empresa["nome"] }} </p>
            <p class="tituloEmpresa">CNPJ: {{ $empresa["cnpj"] }} </p>
            <table class="tabela">
                <thead>
                <tr>
                    <th>Nome do Funcionario</th>
                    <th>Cargo</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($funcionarios as $funcionario)
                        <tr>
                            <td>{{ $funcionario["nome"] }}</td>
                            <td>{{ $funcionario["cargo"]->value }}</td>
                            <td>{{ $funcionario["cpf"] }}</td>
                            <td>{{ $funcionario["telefone"] }}</td>
                            <td>{{ $funcionario["email"] }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropbtn"><img class="imgAcoes" src="./imagens/acoes.png"></button>
                                    <div class="dropdown-content">
                                        <a href="#" class="editarFuncionario">Editar</a>
                                        <a href="#" class="excluirFuncionario">Excluir</a>
                                        <a href="#" class="tornarProprietario">Tornar proprietário</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                   @endforeach
                </tbody>
            </table>
        </fieldset>

        <div>
            <a href="{{ route('funcionario.create') }}"><button class="inserirFuncionario">Inserir Funcionario</button></a>
        </div>

	</main>

    <!-- modal editar funcionario -->
    <div id="modal-editar-funcionario" class="modal-container">
        <div class="modalEditarFuncionario">
            <button class="fechar">X</button>
            <p class="tituloModal">Editar Funcionario</p>

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

    <!-- modal excluir funcionario -->
    <div id="modal-excluir-funcionario" class="modal-container">
        <div class="modalExcluirFuncionario">
            <button class="fechar">X</button>
            <h1 class="centralizar">Confirma a exclusão deste funcionário?</h1>
            <p class="centralizar"><a href="#">Sim</a>|<a href="#">Não</a></p>
        </div>
    </div>

    <script src={{ asset('js/modaisMeusDados.js') }} ></script>
    <link rel="stylesheet" href="{{ asset('css/styleEmpresa.css') }}">
@endsection
