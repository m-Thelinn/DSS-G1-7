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
    <div class="container">
        <div class="row justify-content-center">
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
                ¿Como puedo crear un equipo en ValCheck?
                </h2><br>
                <p class="text" id="answer4" style="display: none;">
                    Primero de todo debes de contactar con un administrador a través nuestra página de contacto y el se encargará de verificar y tramitar
                    todo el proceso de la creación del equipo. Una vez este todo listo, se te notificará y podrás formar parte de tu equipo ya creado.
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
            <div class="faq-item">
                <h2 class="faq-title-questions" onclick="toggleAnswer(6)">
                    ¿Es segura la aplicación y la privacidad de mis datos?
                </h2><br>
                <p class="text" id="answer6" style="display: none;">
                    Nos tomamos muy en serio la seguridad y privacidad de tus datos. Utilizamos medidas de seguridad avanzadas para proteger 
                    tu información personal y nos adherimos a las mejores prácticas en cuanto a privacidad. Puedes estar tranquilo sabiendo que tus datos están en buenas manos
                </p><br>
            </div>

            <div class="faq-item">
                <h2 class="faq-title-questions" onclick="toggleAnswer(7)">
                    ¿Hay alguna sección dedicada a las noticias y novedades de Valorant?
                </h2><br>
                <p class="text" id="answer7" style="display: none;">
                    Actualmente, no contamos con una sección dedicada a las noticias y novedades de Valorant. Sin embargo, valoramos todos los comentarios y sugerencias, 
                    y estamos trabajando constantemente en mejorar nuestra página web. Tomamos en cuenta vuestros intereses en noticias y novedades, y consideraremos implementar 
                    una sección dedicada en futuras versiones de nuestro sitio. 
            </div>
        </div>
    </div>
</section>
@endsection