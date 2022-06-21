@extends('templates.logado')

@section('title', 'Relatórios - Candy System')

@section('content')
    <main>
        <div class="containerRelatórios">
            <div class="relatoriosPrincipais">
                <div class="titleNotificacao">
                    <h2>Relatórios Principais</h2>
                </div>
                <div class="graficosRelatorios" >
                    <div class="grafico1">
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
                                                <canvas id="myChart" style="max-height: 80%; max-width: 90%"></canvas>

                        <script>
                            const xValues = ["Bolo", "Brigadeiro", "Maria-Mole"];
                            const yValues = [75, 59, 62];
                            const barColors = ["red", "green","blue", "red"];

                            new Chart("myChart", {
                                type: "bar",
                                font: {
                                    size: 20
                                },
                                data: {
                                    labels: xValues,
                                    datasets: [{
                                        backgroundColor: barColors,
                                        data: yValues
                                    }]
                                },
                                options: {
                                    legend: {display: false},
                                    title: {
                                        display: true,
                                        text: "Vendas Por Produto - Julho",
                                        size: 14
                                    }
                                }
                            });
                        </script>
                    </div>
                    <div class="grafico1">
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

                        <canvas id="myChart2" style="max-height: 80%; max-width: 90%"></canvas>

                        <script>
                            const xValues = ["Bolo", "Brigadeiro", "Maria-Mole"];
                            const yValues = [75, 59, 62];
                            const barColors = ["red", "green","blue", "red"];

                            new Chart("myChart2", {
                                type: "line",
                                font: {
                                    size: 20
                                },
                                data: {
                                    labels: xValues,
                                    datasets: [{
                                        backgroundColor: barColors,
                                        data: yValues
                                    }]
                                },
                                options: {
                                    legend: {display: false},
                                    title: {
                                        display: true,
                                        text: "Vendas Por Produto - Julho",
                                        size: 14
                                    }
                                }
                            });
                        </script>
                    </div>

                </div>
            </div>
            <div class="relatoriosSecundarios">
                <div class="titleNotificacao">
                    <h2>Todos Relatórios</h2>
                </div>
            </div>
        </div>
    </main>


@endsection
