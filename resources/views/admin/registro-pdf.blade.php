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
            padding: 0;
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
        .right-cell {
            text-align: right;
            vertical-align: top;
            width: 200px;
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
        .field-container {
            display: flex;
            justify-content: flex-end;
        }
        .field-title, .field-value {
            font-size: 10px;
            font-weight: bold;
            border: 1px solid #135096;
            padding: 5px;
            margin: 0;
        }
        .field-title {
            display: inline-block;
            width: 120px;
            background-color: #eaeaeabf;
        }
        .field-value {
            display: inline-block;
            width: 120px;
            font-size: 12px;
        }
        .small-field-value {
            width: 90px;
            display: inline-block;
            font-size: 12px;
        }
        .small-field-title {
            width: 90px;
            display: inline-block;
        }
        .subsection {
            font-size: 15px;
            font-weight: bold;
            margin: 0;
        }
        .input-container {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .input-title {
            font-size: 12px;
            font-weight: bold;
            width: 100px;
            padding: 5px;
            border: 1px solid #135096;
            height: 32px;
            box-sizing: border-box;
            display: inline-block;
            background-color: #eaeaeabf;
            text-align: center;
            line-height: 25px;
        }
        .input-field {
            width: 80%;
            padding: 5px;
            border: 1px solid #135096;
            height: 32px;
            box-sizing: border-box;
            margin-left: 10px;
            display: inline-block;
            font-size: 18px;
        }
        .checkbox-container {
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
        }
        .checkbox-item {
            width: 22%;
            text-align: center;
        }
        .section-title {
            font-size: 12px;
            font-weight: bold;
            margin-top: 10px;
            text-align: center;
            background: #eaeaeabf;
            padding: 5px;
            border: 1px solid black;
            width: 98%;
            box-sizing: border-box;
            border: 1px solid #135096;
        }
        .square-field {
            width: 25px;
            height: 22px;
            display: inline-block;
            border: 1px solid #135096;
            margin-left: 0px;
        }
        .dotted-line {
            border-top: 1px dashed black;
            margin-top: 20px;
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
                <p class="title">FORMULARIO DE CENSO</p>
                <p class="subtitle">
                    <span class="program-blue">Programa</span> 
                    <span class="program-red">Jóvenes Inventores</span>
                </p>
                <p class="government-info">República Bolivariana de Venezuela</p>
                <p class="government-info">Gobernación del Estado Zulia</p>
            </td>
            <td class="right-cell">
                <div class="field-container">
                    <p class="field-title">CÉDULA DE IDENTIDAD</p>
                    <p class="field-value">{{ $registro->cedula }}</p>
                </div>
                <div class="field-container">
                    <p class="field-title small-field-title">EDAD</p>
                    <p class="field-value small-field-value">{{ \Carbon\Carbon::parse($registro->edad)->age }}</p>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <p class="subsection">Sede: {{ $registro->municipio }}</p>
                <p class="subsection" style="margin-bottom: 20px;">Datos personales</p>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="input-container">
                    <span class="input-title">NOMBRE</span>
                    <span class="input-field">{{ $registro->nombre }}</span>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="input-container">
                    <span class="input-title">APELLIDO</span>
                    <span class="input-field">{{ $registro->apellido }}</span>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="input-container">
                    <span class="input-title">TELÉFONO</span>
                    <span class="input-field">{{ $registro->telefono }}</span>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="input-container">
                    <span class="input-title">CORREO</span>
                    <span class="input-field">{{ $registro->email }}</span>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="input-container">
                    <span class="input-title">MUNICIPIO</span>
                    <span class="input-field">{{ $registro->municipio }}</span>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="input-container">
                    <span class="input-title">PARROQUIA</span>
                    <span class="input-field">{{ $registro->parroquia }}</span>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="input-container">
                    <span class="input-title">OCUPACIÓN</span>
                    <span class="input-field">{{ $registro->ocupacion }}</span>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="section-title">GRADO DE INSTRUCCIÓN</div>
                <table style="width: 100%; margin-top: 10px; border-collapse: collapse;">
                    <tr>
                        <td style="width: 50%; vertical-align: top;">
                            <div class="field-container">
                                <p class="field-title" style="background-color: transparent;">BACHILLER</p>
                                <div class="square-field" style="background-color: {{ $user['grado'] === 'Bachiller' ? '#135096' : 'transparent' }};">
                                </div>
                            </div>
                            <div class="field-container">
                                <p class="field-title" style="background-color: transparent;">ESTUDIANTE</p>
                                <div class="square-field" style="background-color: {{ $user['grado'] === 'Estudiante' ? '#135096' : 'transparent' }};">
                                </div>
                            </div>
                        </td>
                        <td style="width: 50%; vertical-align: top;">
                            <div class="field-container">
                                <p class="field-title" style="background-color: transparent;">EGRESADO</p>
                                <div class="square-field" style="background-color: {{ $user['grado'] === 'Egresado' ? '#135096' : 'transparent' }};">
                                </div>
                            </div>
                            <div class="field-container">
                                <p class="field-title" style="background-color: transparent;">NO ESTUDIA</p>
                                <div class="square-field" style="background-color: {{ $user['grado'] === 'No Estudia' ? '#135096' : 'transparent' }};">
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>        
        <tr>
            <td colspan="3">
                <p class="subsection">Datos del proyecto</p>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="section-title">CATEGORÍA DEL PROYECTO</div>
                <table style="width: 100%; margin-top: 10px; border-collapse: collapse;">
                    <td style="width: 33%; vertical-align: top;">
                        <div class="field-container">
                            <p class="field-title" style="background-color: transparent;">EDUCACIÓN</p>
                            <div class="square-field" style="background-color: {{ $user['categoria_p'] === 'Educación' ? '#135096' : 'transparent' }};">
                            </div>
                        </div>
                        <div class="field-container">
                            <p class="field-title" style="background-color: transparent;">AMBIENTE</p>
                            <div class="square-field" style="background-color: {{ $user['categoria_p'] === 'Ambiente' ? '#135096' : 'transparent' }};">
                            </div>
                        </div>
                    </td>
                    <td style="width: 33%; vertical-align: top;">
                        <div class="field-container">
                            <p class="field-title" style="background-color: transparent;">INFRAESTRUCTURA</p>
                            <div class="square-field" style="background-color: {{ $user['categoria_p'] === 'Infraestructura' ? '#135096' : 'transparent' }};">
                            </div>
                        </div>
                        <div class="field-container">
                            <p class="field-title" style="background-color: transparent;">SALUD</p>
                            <div class="square-field" style="background-color: {{ $user['categoria_p'] === 'Salud' ? '#135096' : 'transparent' }};">
                            </div>
                        </div>
                    </td>
                    <td style="width: 33%; vertical-align: top;">
                        <div class="field-container">
                            <p class="field-title" style="background-color: transparent;">TECNOLOGÍA</p>
                            <div class="square-field" style="background-color: {{ $user['categoria_p'] === 'Tecnología' ? '#135096' : 'transparent' }};">
                            </div>
                        </div>
                        <div class="field-container">
                            <p class="field-title" style="background-color: transparent;">OTRO</p>
                            <div class="square-field" style="background-color: {{ $user['categoria_p'] === 'Otro' ? '#135096' : 'transparent' }};">
                            </div>
                        </div>
                    </td>                    
                </table>
            </td>
        </tr>
        <tr style="page-break-before: always;">
            <td colspan="3">
                <table class="header-table">
                    <tr>
                        <td colspan="3">
                            <div class="section-title" style="margin-top: 300px;">DESCRIPCIÓN DEL PROYECTO</div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="section-title" style="background:transparent;">
                                @foreach ($lines as $index => $line)
                                <p class="field-content" style="font-size: 16px; text-align: justify; margin: 0; padding-bottom: 10px; 
                                    @if ($index < count($lines) - 1)
                                        border-bottom: 1px solid #135096;
                                    @endif
                                ">
                                    {{ $line }}
                                </p>
                            @endforeach
                            </div>
                        </td>
                        
                    </tr>
                </table>
            </td>
        </tr>
        
    </table>
</body>
</html>
