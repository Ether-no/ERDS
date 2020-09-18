<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="{{asset('https://code.jquery.com/jquery-3.3.1.min.js') }}" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="{{asset('js/crearqr.js') }}"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        @foreach ($detalles as $usuario)
            <div class="card-body">
                <img class="responsive-img" src="{{ asset($usuario->foto)}}" alt="">
            </div>
            <div class="card-body">
                <h1>{{$usuario->nombre}}{{$usuario->edad}}</h1>
            </div>
            <div class="card-body">
                <h1>{{$usuario->nombre}}</h1>
            </div>
            <div class="card-body">
                <h1>{{$usuario->sexo}}</h1>
            </div>
            <div class="card-body">
                <h1>{{$usuario->puesto}}</h1>
            </div>
            <div class="card-body">
                <h1>{{$usuario->edad}}</h1>
            </div>
            <button class="btn btn-success btn-block">
                INICIAR ENCUESTA
            </button>
            <button class="btn btn-success btn-block">
                CONSULTA ULTIMO REPORTE
            </button>
            <button class="btn btn-success btn-block">
                CONSULTAR ÚLTIMOS 6 REPORTES
            </button>
        @endforeach
        consulta
    </body>
</html>