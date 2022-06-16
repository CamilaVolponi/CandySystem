@extends('templates.logado')

@section('title', 'Meus dados - Candy System')

@section('content')
	<main>
        <div class="dadosEmpresa">
            <p>Dados da empresa:</p>

            <p>Nome da empresa: ~NOME~ </p>
            <p>CNPJ: ~CNPJ~ </p>
        </div>
        <div>
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
                <tr>
                    <td>Mariazinha Santos</td>
                    <td>Proprietário, Confeiteiro</td>
                    <td>123.456.789-00</td>
                    <td>96865-5963</td>
                    <td>mariazinha.santos@gmail.com</td>
                    <td>
                        <div class="dropdown">
                            <button class="dropbtn"><img class="imgAcoes" src="./imagens/acoes.png"></button>
                            <div class="dropdown-content">
                                <a href="#" class="editarFuncionario">Editar</a>
                                <a href="#" class="excluirFuncionario">Excluir</a>
                                <a href="#" class="adicionarCargo">Adicionar cargo</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Paulo Soares</td>
                    <td>Confeiteiro</td>
                    <td>789.654.321-25</td>
                    <td>95862-5874</td>
                    <td>paulo.soares@gmail.com</td>
                    <td>
                        <div class="dropdown">
                            <button class="dropbtn"><img class="imgAcoes" src="./imagens/acoes.png"></button>
                            <div class="dropdown-content">
                                <a href="#" class="editarFuncionario">Editar</a>
                                <a href="#" class="excluirFuncionario">Excluir</a>
                                <a href="#" class="adicionarCargo">Adicionar cargo</a>
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <div>
            <button class="inserirFuncionario">Inserir Funcionario</button>
        </div>

	</main>

    <!-- modal inserir funcionario -->
    <div id="modal-inserir-funcionario" class="modal-container">
        <div class="modalInserirFuncionario">
            <button class="fechar">X</button>

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

                <button class="cadastroFuncionario">Cadastrar funcionário</button>
            </form>
        </div>
    </div>

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

    <!-- modal adicionar cargo a funcionario -->
    <div id="modal-adicionar-cargo-funcionario" class="modal-container">
        <div class="modalAdicionarCargoFuncionario">
            <button class="fechar">X</button>
            <div>
                <label>Cargo:
                    <select>
                        <option>Proprietários</option>
                        <option>Confeiteiro</option>
                    </select>
                </label>
            </div>

            <button class="editarAdicionarCargo">Adicionar cargo ao funcionário</button>
        </div>
    </div>

    <script src={{ asset('js/modaisMeusDados.js') }} ></script>
    <link rel="stylesheet" href="{{ asset('css/styleMeusDadosProprietario.css') }}">
@endsection
