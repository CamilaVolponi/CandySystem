@extends('templates.logado')

@section('title', 'Área da empresa - Candy System')

@section('content')
	<main>
        <fieldset class="dadosEmpresa">
            <legend class="tituloVisualizar">Dados da empresa</legend>

            <p>Nome da empresa: ~NOME~ </p>
            <p>CNPJ: ~CNPJ~ </p>
            <table class="tabela">
                <thead>
                <tr>
                    <th>Nome do Funcionario</th>
                    <th>Cargo</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Mariazinha Santos</td>
                    <td>Proprietário</td>
                    <td>mariazinha.santos@gmail.com</td>
                </tr>
                <tr>
                    <td>Paulo Soares</td>
                    <td>Funcionario</td>
                    <td>paulo.soares@gmail.com</td>
                </tr>
                </tbody>
            </table>
        </fieldset>
	</main>

    <link rel="stylesheet" href="{{ asset('css/styleMeusDados.css') }}">
@endsection
