@extends('layouts.app')
@section('content')
    <body>
        <!-- aqui cambiar para hacer vista de usuario sin registrar
        añadir navbar con botones de registro e inicio sesion
        cuando clicas boton redirigir ruta de registro o inicio sesion (todas las comprobaciones) 
        y despues redirigir home de registrado normal o de admin
        -->

        <!--NAVBAR-->
        <!--
        <a href="{{ route('login') }}"><input type="button" value="INICIO SESION"></a>
        <a href="{{ route('register') }}"><input type="button" value="REGISTRO"></a>
        -->
        <br>

        <div>
        <h1>PAGINA HOME SIN REGISTRAR</h1>
        <a href="{{ route('contact') }}"><input type="button" value="CONTACTO"></a>
        <a href="{{ route('about') }}"><input type="button" value="INFORMACION PROYECTO"></a>

        </div>
        
    </body>
    @endsection
