@extends('layouts.app')

@section('content')
<section class="faq-bg mb-50" id="home">
        <div class="container">
            <div class="text">
                <h1 class="home-title mb-2">FAQ</h1>
                <p class="home-subtitle mb-5">Preguntas frecuentes</p>
                <p class="home-p">
                    En esta sección de nuestra página, hemos recopilado cuidadosamente una amplia variedad de preguntas y respuestas sobre nuestra 
                    aplicación especializada en estadísticas de Valorant.
                </p>
                <p class="home-p">
                    En ValCheck estamos comprometidos en proporcionarte toda la información que necesitas 
                    para aprovechar al máximo nuestra plataforma y mejorar tu experiencia en el popular juego de disparos en primera persona.
                </p>
                <br>
                <p class="home-p">¡Descubre todo lo que necesitas saber en nuestra sección de preguntas y respuestas!.</p>
            </div>
        </div>         
</section>

<section>
    <div class="row justify-content-center">
        <div class="container">
            
            <div class="faq-item">
                <h2 class="faq-title-questions" onclick="toggleAnswer(1)">
                    ¿Qué es Valorant?
                </h2><br>
                <p class="text" id="answer1" style="display: none;">
                    Valorant es un popular juego de disparos en primera persona desarrollado por Riot Games. Combina acción táctica y habilidades 
                    especiales de los personajes para crear una experiencia competitiva emocionante.
                </p><br>
            </div>

            <div class="faq-item">
                <h2 class="faq-title-questions" onclick="toggleAnswer(2)">
                    ¿Qué tipo de información puedo encontrar en ValCheck?
                </h2><br>
                <p class="text" id="answer2" style="display: none;">
                    En ValCheck, puedes encontrar estadísticas de jugadores y equipos, resultados de partidos, análisis de desempeño, rankings y más. 
                    Nuestra plataforma está diseñada para ofrecerte una visión completa del mundo competitivo de Valorant.
                </p><br>
            </div>

            <div class="faq-item">
                <h2 class="faq-title-questions" onclick="toggleAnswer(3)">
                    ¿Cómo puedo buscar información sobre un jugador en particular?
                </h2><br>
                <p class="text" id="answer3" style="display: none;">
                    Puedes buscar información sobre un jugador específico utilizando la función de búsqueda dentro del apartado de Jugadores en nuestro sitio web. 
                    Simplemente busca el nombre del jugador que necesitas la información y se mostrarán los resultados correspondientes.
                </p><br>
            </div>

            <div class="faq-item">
                <h2 class="faq-title-questions" onclick="toggleAnswer(4)">
                ¿Cuál es la fuente de los datos en ValCheck?
                </h2><br>
                <p class="text" id="answer4" style="display: none;">
                    Recopilamos nuestros datos de fuentes confiables y oficiales, como plataformas de juego y organizadores de torneos. 
                    Nos esforzamos por proporcionar información precisa y actualizada para brindar una experiencia confiable a nuestros usuarios.
                </p><br>
            </div>

            <div class="faq-item">
                <h2 class="faq-title-questions" onclick="toggleAnswer(5)">
                    ¿Puedo participar en competiciones a través de ValCheck?
                </h2><br>
                <p class="text" id="answer5" style="display: none;">
                    ValCheck, es una plataforma de información y análisis, pero no organizamos competiciones directamente. 
                    Sin embargo, puedes utilizar nuestra plataforma para descubrir competiciones en curso y encontrar equipos para unirte a ellos
                </p><br>
            </div>
            
            <!-- Agrega más preguntas y respuestas aquí siguiendo el formato :) -->

        </div>
    </div>

    <!-- Por no añadir un fichero faq.js -->
    <script>
        function toggleAnswer(index) {
            const answer = document.getElementById(`answer${index}`);
            const icon = document.getElementById(`icon${index}`);
            const isOpened = answer.style.display === "none";

            answer.style.display = isOpened ? "block" : "none";
            icon.classList.toggle("opened", isOpened);
        }
    </script>
</section>
@endsection