@extends('layouts.app')

@section('content')
    <section class="home-bg mb-50" id="home">
        <div class="container">
            <div class="text">
                <h1 class="home-title mb-2">VALCHECK</h1>
                <p class="home-subtitle mb-5">El control del juego</p>
                <p class="home-p">
                    Una aplicación especializada en estadísticas de Valorant, el popular juego de disparos en primera persona. Monitoriza tus estadisticas y analiza tu rendimiento en el juego, incluyendo detalles como las puntuaciones de las partidas, el número de asesinatos, muertes y mucho más.
                </p>
                <p class="home-p">Crea tu propio equipo o únete a uno ya creado como fan, jugador o equipo técnico para competir en los partidos de nuestra liga y convertirte en el campeón.</p>
                <p class="home-p">¿A qué estas esperando?</p>
            </div>
            <div>
                <a class="btn-default" href="{{ route('register') }}">{{ __('Unirse a la comunidad') }}</a>
            </div>
        </div>         
    </section>

    <section id="options" class="mb-50">
        <div class="container">
            <h2 class="options-title mb-2">Descubre VALCHECK</h2>
            <p class="options-subtitle mb-5">Jugadores. Equipos. Partidas</p>
            <div class="row mb-5">
                <a class="col-md-4 col-sm-6 options-area" href="{{ route('home') }}">
                    <img class="options-img" src="/img/player-card.jpg" alt="">
                    <div class="options-img-text">
                        <p>JUGADORES</p>
                    </div>
                </a>

                <a class="col-md-4 col-sm-6 options-area" href="{{ route('home') }}">
                    <img class="options-img" src="/img/team-card.jpg" alt="">
                    <div class="options-img-text">
                        <p>EQUIPOS</p>
                    </div>
                </a>

                <a class="col-md-4 col-sm-6 options-area" href="{{ route('home') }}">
                    <img class="options-img" src="/img/game-card.jpg" alt="">
                    <div class="options-img-text">
                        <p>PARTIDOS</p>
                    </div>
                </a>
            </div>
        </div>                
    </section>

    <section id="contact" class="mb-50">
        <div class="container mt-5">
            <h2 class="options-title mb-2">Contáctanos</h2>
            <p class="text">¿Un error? ¿Quieres crear un equipo? ¿Tu Sage no sabe curar?
                <br> Escríbenos para cualquier cosa que necesites y en menos de 24h tendrás una respuesta.
            </p>

            <a class="contact-button" href="{{ route('contact') }}">¡NECESITO AYUDA!</span></a>
        </div>
    </section>
@endsection
@section('layouts.footer')
@endsection

