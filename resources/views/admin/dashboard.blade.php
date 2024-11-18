@extends('admin.layouts.app')

@section('content')
<style>
    .chart-container {
        position: relative;
        width: 100%;
        /* Full width */
        height: auto;
        /* Height will be determined by content */
    }

    canvas {
        display: block;
        /* Prevents extra space below the canvas */
        max-width: 100%;
        /* Ensures it does not overflow */
        height: auto;
        /* Maintains aspect ratio */
    }
</style>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Bienvenido administrador</h3>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="justify-content-end d-flex">
                        <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                            <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <i class="mdi mdi-calendar"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                                <a class="dropdown-item" href="#">January - March</a>
                                <a class="dropdown-item" href="#">March - June</a>
                                <a class="dropdown-item" href="#">June - August</a>
                                <a class="dropdown-item" href="#">August - November</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card tale-bg">
                <div class="card-people mt-auto">
                    <img src="{{ asset('build/assets/images/dashboard/people.svg') }}" alt="people">
                    <div class="weather-info">
                        <div class="d-flex">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin transparent">
            <div class="row">
                <div class="col-md-4 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                        <div class="card-body">
                            <p class="mb-4">Jovenes ingresados</p>
                            <p class="fs-30 mb-2">{{$usrCount}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 stretch-card transparent">
                    <div class="card card-light-danger">
                        <div class="card-body">
                            <p class="mb-4">Edad promedio</p>
                            <p class="fs-30 mb-2">{{$promedioEdad}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                        <div class="card-body">
                            <p class="mb-4">Grado de instruccion</p>
                            <p class="fs-30 mb-2">{{$gradoRepetido}}</p>
                            <p>Cantidad: {{$cantidadGradoRepetido}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-light-blue">
                        <div class="card-body">
                            <p class="mb-4">Municipio concurrente</p>
                            <p class="fs-30 mb-2">{{$municipioRepetido}}</p>
                            <p>Cantidad: {{$cantidadMunicipioRepetido}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-light-blue">
                        <div class="card-body">
                            <p class="mb-4">Categoria de proyecto concurrente</p>
                            <p class="fs-30 mb-2">{{$categoriaRepetido}}</p>
                            <p>cantidad:{{$cantidadCategoriaRepetido}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Grado de instruccion </p>
                    <p class="font-weight-500">Jovenes segun su grado de instruccion</p>
                    <div class="chart-container" style="position: relative; height: 40vh; width: 100%;">
                        <canvas id="grado_i"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="card-title">Categorias de los proyectos</p>
                    </div>
                    <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                    <div class="chart-container">
                        <canvas id="Donut"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.querySelector('#grado_i');
        const labels = <?php echo json_encode($resultados->pluck('gd_i')); ?>;
        const stackedBar = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Categoria',
                    data: <?php echo json_encode($resultados->pluck('total')); ?>,

                    backgroundColor: [
                        'rgba(30, 144, 255, 0.2)', // Azul dodger
                        'rgba(0, 191, 255, 0.2)', // Azul profundo
                        'rgba(100, 149, 237, 0.2)', // Azul cornflower
                        'rgba(173, 216, 230, 0.2)', // Azul claro
                        'rgba(70, 130, 180, 0.2)', // Azul acero
                        'rgba(255, 255, 0, 0.2)', // Amarillo claro
                        'rgba(255, 215, 0, 0.2)', // Amarillo dorado

                    ],
                    borderColor: [
                        'rgb(30, 144, 255)', // Azul dodger
                        'rgb(0, 191, 255)', // Azul profundo
                        'rgb(100, 149, 237)', // Azul cornflower
                        'rgb(173, 216, 230)', // Azul claro
                        'rgb(70, 130, 180)', // Azul acero
                        'rgb(255, 255, 0)', // Amarillo claro
                        'rgb(255, 215, 0)', // Amarillo dorado

                    ],
                    borderWidth: 1,

                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            // Ajusta el tamaño de las etiquetas si es necesario
                            fontSize: 14,
                        }
                    },
                    x: {
                        ticks: {
                            fontSize: 14,
                        }
                    }
                }
            }
        });

        const ctx1 = document.querySelector('#Donut');
        const labels1 = <?php echo json_encode($resultados1->pluck('categoria_p')); ?>;

        const donutChart = new Chart(ctx1, {
            type: 'doughnut',
            data: {
                labels: labels1,
                datasets: [{
                    label: 'Cantidad',
                    data: <?php echo json_encode($resultados1->pluck('total1')); ?>,
                    backgroundColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(201, 203, 207, 1)',
                        'rgb(70, 130, 180)', // Azul acero
                        'rgb(255, 255, 0)', // Amarillo claro
                        'rgb(255, 215, 0)', // Amarillo dorado
                        'rgba(76, 255, 51, 1)'
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                // other options as needed
            }
        });
    </script>
    @endsection