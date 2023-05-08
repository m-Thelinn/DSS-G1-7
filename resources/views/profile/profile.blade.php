<!DOCTYPE html>
    <body>

    <h1>PERFIL DE USUARIO</h1>
    <a href="/iniciado"><input type="button" value="Atrás"></a>                                
    
    <div>   
        <h4>EMAIL</h4> 
        <p>{{ $user->email }}</p>
        <h4>NAME</h4> 
        <p>{{ $user->name }}</p>
        <h4>LASTNAME</h4>                            
        <p>{{ $user->lastname }}</p>
        <h4>NICKNAME</h4> 
        <p>{{ $user->nickname }}</p>
        <h4>PHONE</h4> 
        <p>{{ $user->phone }}</p>
        <h4>COUNTRY</h4> 
        <p>{{ $user->country }}</p>
        <h4>ROL</h4> 
        <p>{{ $user->rol }}</p>
        <h4>TEAM</h4> 
        <p>{{ $user->team->name }}</p>
    </div>
    </body>
</html>
