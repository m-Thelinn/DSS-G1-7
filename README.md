# **VALCheck - Visualización y gestión de eSports**

> 1. Miguel Rodríguez Sánchez
> 2. Francisco Fernández Ruiz
> 3. Demian Calvo Rodríguez
> 4. Julio César Bastidas Sánchez

## INTRUCCIONES DE USO DE RAMAS
1. Antes de empezar a trabajar, para bajar los cambios desde GitHub, realizamos en la rama LOCAL DEVEL :
```
git checkout devel
git pull
```
2. Para ver en que rama estamos hacemos `git branch`. Cambiamos a vuestra rama mediante `git checkout NOMBRE`.
3. Traemos a la rama los cambios de devel mediante `git merge devel`.
4. AHORA EMPEZAMOS A TRABAJAR EN LOCAL (INTENTAR TRABAJAR EN FICHEROS DINSTINTOS PARA NO TENER CONFLITOS)
5. Una vez terminado el trabajo, hacemos `git status` para ver los cambios que han sucedido y estan pendientes de subir al github.
6. Para subir TODOS los cambios, hacemos `git add .`
7. Para realizar un commit hacemos `git commit -m "mensaje"`
8. Para subir los cambios a vuestra rama en remoto hacemos `git push`

### AVISAR POR EL GRUPO DE QUE HABEIS SUBIDO CAMBIOS A VUESTRA RAMA

## OBJETIVOS:

El objetivo del proyecto (bautizado como VALCheck) es el desarrollo de una aplicación web para la gestión de equipos y competiciones del videojuego y deporte electrónico Valorant así como la visualización de estadísticas de los propios jugadores.

Actualmente existen plataformas dedicadas a la gestión de equipos, fichajes, competiciones y de estadísticas por separado. Nuestro objetivo es juntar todas esas plataformas en una única plataforma. Estas plataformas web son utilizadas por usuarios que mayoritariamente utilizan Google Chrome, en ordenadores modernos que utilizan Windows 10 en adelante con un hardware moderno.

Los usuarios podrán tener información sobre sus equipos favoritos, ver los resultados de partidos, rankings, las competiciones más recientes y las que están en curso actualmente. De la misma forma podrán consultar estadísticas básicas y avanzadas sobre jugadores registrados en la web y que deseen compartir su información con el resto del mundo. Aquellas organizaciones que quieran formar parte de la web tendrán que contactar con los administradores de la misma para que verifiquen la veracidad de la organización y poder crear el equipo con sus respectivos jugadores.

## DESCRIPCIÓN:

### Aplicación de gestión (intranet)

La aplicación de gestión interna permitirá al administrador de la compañía acceder
mediante su usuario y contraseña para realizar las siguientes gestiones:

1. Gestión de jugadores: Podrá añadir nuevos jugadores a la base de datos y modificar jugadores ya existentes (los datos de los jugadores).
2. Gestión de equipos: Podrá añadir nuevos equipos a la base de datos y modificar los datos de cualquier equipo ya existente, así como modificar roles de cada componente del mismo.
3. Gestión de eventos: Podrá añadir nuevos eventos y competiciones a la base de datos y modificar los eventos ya existentes.
4. También podrá borrar jugadores que ya no estén en activo, borrar equipos que se hayan disuelto y borrar eventos que ya hayan sucedido para mantener todo actualizado.
5. Evaluar y responder tickets de soporte de los diferentes usuarios de la web.

### Consulta de horarios, jugadores, equipos, estadísticas (web pública):

La web pública permitirá realizar las siguientes operaciones:

1. Iniciar sesión/Registrarse
2. Ver un listado de los próximos eventos.
3. Para cada evento se puede ver información como por ejemplo la fecha y hora, el lugar, la fase y la ronda. Además se pueden ver los equipos que compiten y los integrantes de cada equipo.
4. Ver listado de los equipos.
5. Para cada equipo se puede ver información como la lista de jugadores que lo componen, la fecha de creación del equipo, los resultados de los últimos eventos, aparte del nombre y el escudo del propio equipo.
6. Ver listado de jugadores.
7. Para cada jugador se puede ver información básica y avanzada. Información básica como nombre y apellidos, edad, nacionalidad, equipos en los que ha estado, y redes sociales. La información avanzada serían estadísticas completas del propio juego, como bajas, muertes, asistencias, nivel, victorias, derrotas, asistencias, etc.

## Público objetivo:

1. Jugadores de Valorant en su totalidad.
2. Personas que quieran tener información sobre el videojuego sin necesidad de ser jugadores.
3. Personas jóvenes de entre 12 y 35 años.
4. Personas con interés en eSports en concreto de Valorant.
