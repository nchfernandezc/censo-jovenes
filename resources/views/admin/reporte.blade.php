<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario Censo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            background-color: #ffffff;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('{{ public_path('build/assets/images/logo1.png') }}');
            background-position: center;
            background-repeat: no-repeat;
            background-size: 500px 500px;
            opacity: 0.3;
            z-index: -1;
        }

        .header-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }
        .logo-cell {
            width: 80px;
            vertical-align: top;
            padding-right: 20px;
        }
        .text-cell {
            vertical-align: top;
        }
        .title {
            font-size: 18px;
            font-weight: bold;
            margin: 0;
        }
        .subtitle {
            font-size: 20px;
            margin: 0;
        }
        .program-blue {
            color: blue;
            font-weight: bold;
        }
        .program-red {
            color: red;
            font-weight: bold;
        }
        .government-info {
            font-size: 12px;
            margin: 0;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table thead th {
            background-color: #f4f4f4;
            font-size: 12px;
            font-weight: bold;
            text-align: left;
            padding: 10px;
            border: 1px solid #135096;
        }
        .table tbody td {
            font-size: 12px;
            text-align: left;
            padding: 8px;
            border: 1px solid #135096;
        }
        .table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .table tr:nth-child(odd) {
            background-color: #ffffff;
        }
    </style>
</head>
<body>
    <table class="header-table">
        <tr>
            <td class="logo-cell">
                <img src="{{ public_path('build/assets/images/logo.png') }}" alt="Logo" style="width: 80px; height: auto;">
            </td>
            <td class="text-cell">
                <p class="title">FORMULARIO CENSO</p>
                <p class="subtitle">
                    <span class="program-blue">Programa</span> 
                    <span class="program-red">Jóvenes Inventores</span>
                </p>
                <p class="government-info">República Bolivariana de Venezuela</p>
                <p class="government-info">Gobernación del Estado Zulia</p>
            </td>
        </tr>
    </table>    
    <div class="filters">
        Resultados para: <br>
        @if(!empty($filtrosAplicados))
            {!! implode('<br>', array_map(fn($key, $value) => ucfirst("$key: $value"), array_keys($filtrosAplicados), $filtrosAplicados)) !!}
        @else
            Todos los registros
        @endif
    </div>    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Cédula</th>
                <th>Parroquia</th>
                <th>Municipio</th>
                <th>Ocupación</th>
                <th>Grado</th>
                <th>Categoría</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
                    <td>{{ $registro->id }}</td>
                    <td>{{ $registro->nombre }}</td>
                    <td>{{ $registro->cedula }}</td>
                    <td>{{ $registro->parroquia }}</td>
                    <td>{{ $registro->municipio }}</td>
                    <td>{{ $registro->ocupacion }}</td>
                    <td>{{ $registro->grado }}</td>
                    <td>{{ $registro->categoria_p }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
