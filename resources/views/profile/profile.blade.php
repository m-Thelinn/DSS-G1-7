@extends('layouts.app')

@section('content')
<div class="container text ">
    <h1>PERFIL DE USUARIO</h1>
    <div>
        <a href="/"><input type="button"  class="btn-admin" value="Atrás"></a>
        <a href="{{ route('profile.modifyProfile') }}" class="btn-update">Actualizar datos</a>
    </div>
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
</div>
@endsection
