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
        @if (session('exito'))
            <div class="mb-3 mt-3 alert alert-success alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                {{ session('exito') }}
            </div>
        @endif
        <h1>Bienvenido</h1>
        @auth
            <h1>{{ Auth::user() -> nombres }}</h1>
        @endauth
    </div>
@stop