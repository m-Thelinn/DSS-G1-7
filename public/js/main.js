function getMensaje(){
    var Frases = new Array();
    Frases[0]="Nuestra página 404 está siendo vigilada por Cypher. No podemos revelar su ubicación, ¡es un secreto!";
    Frases[1]="Parece que Raze se entusiasmó demasiado y explotó nuestra página 404. ¡Disculpa la confusión!";
    Frases[2]="Si estás buscando una partida en nuestra página 404, lamentamos decirte que el matchmaking ha fallado. ¡Pero te aseguramos que estamos trabajando en ello!";
    Frases[3]="Sabemos que es frustrante, pero nuestra página 404 decidió hacer un teletransporte como Omen. ¡No te preocupes, la encontraremos!";
    Frases[4]="¡Ups! Parece que Jett usó su habilidad para volar y se llevó nuestra página 404 lejos. ¡Intenta encontrarla en las alturas!";
    Frases[5]="No hay agentes disponibles para resolver el enigma de nuestra página 404. ¿Tendrás la habilidad suficiente para desentrañarlo?";
    Frases[6]="Valorant es un juego lleno de acción y misterio, ¡y nuestra página 404 no es una excepción! Está en algún lugar por aquí, ¡solo tienes que encontrarla!";
    Frases[7]="Lo sentimos, pero nuestra página 404 se ha camuflado como una jugada estratégica de Reyna. ¿Podrías buscar en otro lado?";
    Frases[8]="¡Oops! Parece que el agente enemigo se llevó nuestra página 404. ¡Necesitamos refuerzos!";
    Frases[9]="¡Enhorabuena! Has encontrado la página 404, pero desafortunadamente, Sage ya usó su habilidad de resurrección y ahora está fuera de servicio.";
    Frases[10]="Parece que nuestra página 404 se escondió en el teletransporte de Yoru y ahora está dando vueltas en otra dimensión. ¡No te preocupes, volverá pronto!";
    Frases[11]="Sabemos que estás esperando pacientemente, pero parece que Killjoy se puso un poco obsesiva y atrapó nuestra página 404 en su arsenal de trampas.";
    Frases[12]="¡Alerta de Sova! Nuestra página 404 ha sido detectada en el rango, pero se esconde mejor que un dron enemigo.";
    Frases[13]="Lo siento, pero nuestra página 404 se convirtió en una Spike falsa. ¡No te preocupes, no explotará!";
    Frases[14]="Nuestra página 404 fue capturada por Viper y ahora está atrapada en una nube venenosa. ¡Esperamos que tengas una máscara de gas a mano!";
    return(Frases[Math.floor(Math.random()*Frases.length)]);
}

function toggleAnswer(index) {
    const answer = document.getElementById(`answer${index}`);
    const icon = document.getElementById(`icon${index}`);
    const isOpened = answer.style.display === "none";

    answer.style.display = isOpened ? "block" : "none";
    icon.classList.toggle("opened", isOpened);
}