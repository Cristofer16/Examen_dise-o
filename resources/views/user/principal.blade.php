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
        <h1>Cristofer</h1>
    </div>
@stop