<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ValCheck') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    </head>


<body>
    <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="terms">
                    <p>Cobertura de Esports de Valorant: calendario, resultados de partidos, clasificaciones de equipos y estadísticas.</p>
                </div>
            </div>
            <div class="box__footer">
                <h2>Redes Sociales</h2>
                <a href="https://www.instagram.com/esvalorant/"> Instagram</a>
                <a href="https://www.facebook.com/esVALORANT"> Facebook</a>
                <a href="https://twitter.com/VALORANTes"> Twitter</a>
            </div>

        </div>

        <div class="box__copyright">
            <hr>
            <p>Todos los derechos reservados © 2023 <b>ValCheck</b></p>
        </div>
    </footer>
</body>
</html>