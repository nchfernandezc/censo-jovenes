<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa Jóvenes Inventores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .full-screen-bg {
            background-color: #0257b2;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .full-screen-content {
            text-align: center;
        }

        .full-screen-content h1,
        .full-screen-content h2 {
            margin: 10px;
            color: white;
        }

        .button-group a {
            font-size: 18px;
            width: 200px;
            margin: 10px;
        }

        .btn-light {
            color: #007bff;
            background-color: #fff;
            border-color: #007bff;
        }

        .btn-light:hover {
            background-color: #0056b3;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row full-screen-bg">
            <div
                class="col text-center text-white d-flex flex-column justify-content-center align-items-center full-screen-content">
                <h1>Programa</h1>
                <h2>Jóvenes Inventores</h2>
                <div class="button-group">
                    <a href="{{ route('login') }}" class="btn btn-light mb-2">Iniciar sesión</a>
                    <a href="{{ route('register') }}" class="btn btn-light">Registrarse</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
