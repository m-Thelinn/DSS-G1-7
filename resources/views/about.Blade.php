@extends('layouts.app')

@section('content')
<section class="about-bg mb-50" id="home">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text">
            <h1 class="about-title mb-2">LA COBERTURA DE ESPORTS MÁS ENTRETENIDA DEL MUNDO</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="d-flex justify-content-around text">
            
                <div class = "w-auto d-flex flex-column justify-content-center " >
                    <h2 > EQUIPOS</h2>
                    <div >
                        <img class="img-about" src="img/equipos.jpg">
                    </div>

                    <p class = "text-about">En esta pagina web puedes
                       ver todos los equipos, asi como sus estadisticas.
                        </p>
                </div>
                

                <div class= "w-auto d-flex flex-column justify-content-center " >
                    <h2 > JUGADORES</h2>
                    <div >
                        <img class="img-about" src= "img/jugador2.jpeg">
                    </div>
                    <p class = "text-about"> Además de los equipos, podremos ver
                        los jugadores que componen cada equipo
                        y sus estadisticas.
                        </p>
                </div>


                <div class= "w-auto d-flex flex-column justify-content-center ">
                    <h2 > PARTIDOS</h2>
                    <div >
                        <img class="img-about" src= "img/partidos.jpg">
                    </div>
                    <p class = "text-about"> Por último tenemos la posibilidad de 
                         ver los resultados de los partidos que se
                         han disputado.
                        </p>
                </div>

            </div>
        
    </div>
</section>


<section>
        <div class="container">
            <div class="text">
                <p class="home-p">
                 Explora nuestras secciones dedicadas a los resultados de los torneos más recientes, los perfiles de los jugadores más talentosos y los equipos más destacados. Además, podrás consultar detalladas estadísticas de rendimiento individual y colectivo, permitiéndote analizar y comparar datos para tener una visión más completa del juego.
                </p>
            </div>
        </div>
</section>

<section>
        <div class="container">
            <div class="text">
                <p class="home-p">
                No importa si estás buscando información competitiva, consejos estratégicos o simplemente quieres mantenerte informado sobre las últimas novedades de Valorant, nuestra página web es tu recurso definitivo.
                </p>
                <br><br>
                <p class="home-subtitle mb-5"> ¡Únete a nosotros y sumérgete en el fascinante mundo de Valorant ahora mismo!</p>
            </div>
        </div>
        <div>
                @guest
                    <a class="btn-default" href="{{ route('register') }}">Unirse a la comunidad</a>
                @else
                    <a class="btn-default" href="/#options">Empezar a explorar</a>
                @endguest
        </div>
</section>
@endsection
