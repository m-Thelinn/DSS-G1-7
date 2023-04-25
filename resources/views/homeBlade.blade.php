<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <!-- aqui cambiar para hacer vista de usuario sin registrar
        añadir navbar con botones de registro e inicio sesion
        cuando clicas boton redirigir ruta de registro o inicio sesion (todas las comprobaciones) 
        y despues redirigir home de registrado normal o de admin
        -->

        <!--NAVBAR-->
        <a href="{{ route('login') }}"><input type="button" value="INICIO SESION"></a>
        <a href="{{ route('register') }}"><input type="button" value="REGISTRO"></a>


        <!--esta es la parte de home de admin-->
        <h1>Seleccione una opcion para ver los datos</h1>
        
        <a href="{{ route('user.showAllUsers') }}"><input type="button" value="Usuarios"></a>
        <a href="{{ route('team.showAllTeams') }}"><input type="button" value="Equipos"></a>
        <a href="{{ route('game.showAllGames') }}"><input type="button" value="Partidos"></a>        
        <a href="{{ route('teamstats.showAllteamstats') }}"><input type="button" value="Estadisticas de equipos"></a> 
        <a href="{{ route('userstats.showAlluserstats') }}"><input type="button" value="Estadisticas de usuarios"></a>  
        
    </body>
</html>