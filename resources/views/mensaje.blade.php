@extends('master')

@section('titulo')
    Mensaje
@stop

@section('estilos')
    <link rel="stylesheet" href="/css/registrar.css">
@stop

@section('cuerpo')
    @parent
    <div class="formulario">    
        <div class="container">
            @if (session('mensaje'))
                <div class="mb-3 mt-3 alert alert-success alert-dismissible fade show">
                    {{ session('mensaje') }}
                </div>
            @endif
        </div>
    </div>
@stop