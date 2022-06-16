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
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <div>
            <button class="botaoInserirFuncionario">Inserir Funcionario</button>
        </div>

	</main>
@endsection
