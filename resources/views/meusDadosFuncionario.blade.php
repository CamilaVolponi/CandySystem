@extends('templates.logado')

@section('title', 'Meus dados - Candy System')

@section('content')
	<main>
        <fieldset class="dadosEmpresa">
            <p>Nome: ~NOME~</p>
            <br>
            <p>CPF: ~CPF~</p>
            <br>
            <p>Telefone: ~TELEFONE~</p>
            <br>
            <p>E-mail: ~EMAIL~</p>
            <br>
            <p>Cargo: ~CARGO~</p>

            <a href="{{route("login.logout")}}"><button class="logout">Logout</button></a>
        </fieldset>
        <fieldset class="dadosEmpresa">
            <legend class="tituloVisualizar">Dados da empresa</legend>

            <p>Nome da empresa: ~NOME~ </p>
            <p>CNPJ: ~CNPJ~ </p>
            <div>
                <table class="tabela">
                    <thead>
                    <tr>
                        <th>Nome do Funcionario</th>
                        <th>Cargo</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Mariazinha Santos</td>
                        <td>Proprietário</td>
                        <td>123.456.789-00</td>
                        <td>96865-5963</td>
                        <td>mariazinha.santos@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Paulo Soares</td>
                        <td>Funcionario</td>
                        <td>789.654.321-25</td>
                        <td>95862-5874</td>
                        <td>paulo.soares@gmail.com</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </fieldset>
    </main>

    <link rel="stylesheet" href="{{ asset('css/styleMeusDados.css') }}">
@endsection
