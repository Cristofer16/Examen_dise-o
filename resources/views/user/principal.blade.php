@extends('master')

@section('titulo')
    Principal
@stop

@section('estilos')
    <link rel="stylesheet" href="/css/user/principal.css">
@stop

@section('cuerpo')
    @parent
    <div class="saludo">
        <h1>Bienvenido</h1>
        @auth
            <h1>{{ Auth::user() -> nombres }}</h1>
        @endauth
    </div>
@stop