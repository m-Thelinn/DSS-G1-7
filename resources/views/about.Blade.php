@extends('layouts.app')

@section('content')
<section class="about-bg mb-50" id="home">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text">
            <h1 class="about-title mb-2">THE MOST ENTERTAINING ESPORTS COVERAGE IN THE WORLD</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row justify-content">
            <div class="col-md-8 text">

            <h2 class="left"> EQUIPOS</h2>
            <div class="imagen-equipos">
                <img src="img/equipos.jpg" width="250">
            </div>

            <h2 class="center"> JUGADORES</h2>
            <div class="imagen-jugadores">
                <img src= "img/jugador2.jpeg" width="285">
            </div>

            <h2 class="right"> PARTIDOS</h2>
            <div class="imagen-partidos">
                <img src= "img/partidos.jpg" width="285">
            </div>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
            <div class="row justify-content">
                <div class="col-md-8 text">
                <p class="parrafo-izquierda">En nuestra pagina web tendremos la opcion
                <br> de poder observar todos los equipos, asi como las estadisticas
                <br> de los mismos.
                </p>
                </div>

                <p class="parrafo-medio"> Además de los equipos, podremos ver
                <br>los jugadores que componen cada equipo
                <br> y las estadisticas de ellos respecto
                <br> a los partidos jugados.
                </p>

                <p class="parrafo-derecha"> Por último tenemos la posibilidad de 
                <br> ver los resultados de los partidos que se
                <br> han disputado.
                </p>
            </div>
    </div>
</section>

@endsection
