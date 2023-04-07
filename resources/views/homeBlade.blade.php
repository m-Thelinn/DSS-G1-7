<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <h1>Seleccione una opcion para ver los datos</h1>
        
        <a href="{{ route('user.showAllUsers') }}"><input type="button" value="Usuarios"></a>
        <a href="{{ route('team.showAllTeams') }}"><input type="button" value="Equipos"></a>
        <a href="{{ route('game.showAllGames') }}"><input type="button" value="Partidos"></a>        
        <a href="{{ route('teamstats.showAllteamstats') }}"><input type="button" value="Estadisticas de equipos"></a> 
        <a href="{{ route('userstats.showAlluserstats') }}"><input type="button" value="Estadisticas de usuarios"></a>  
        
    </body>
</html>