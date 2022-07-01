@extends('templates.logado')

@section('title', 'Área da empresa - Candy System')

@section('content')
	<main>
        <p class="titulo">ÁREA DA EMPRESA</p>

        <fieldset class="dadosEmpresa">
            <p> Nome da empresa: {{ $empresa["nome"] }} </p>
            <p>CNPJ: {{ $empresa["cnpj"] }} </p>
            <table class="tabela">
                <thead>
                <tr>
                    <th>Nome do Funcionario</th>
                    <th>Cargo</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($funcionarios as $funcionario)
                        <tr>
                            <td>{{ $funcionario["nome"] }}</td>
                            <td>{{ $funcionario["cargo"]->value }}</td>
                            <td>{{ $funcionario["email"] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </fieldset>
	</main>

    <link rel="stylesheet" href="{{ asset('css/styleEmpresa.css') }}">
@endsection
