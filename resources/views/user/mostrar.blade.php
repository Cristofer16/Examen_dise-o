@extends('master')

@section('titulo')
    Mostrar Usuario
@stop

@section('estilos')
    <link rel="stylesheet" href="/css/mostrar.css">
@stop

@section('cuerpo')
    @parent
    <div class="cuerpo">
        <div class="container">
            <h1 class="nombre">{{ $user -> usuario }}</h1>
            <div class="row">
                <div class="col-md-6 col-12">
                    <p><b>Nombres: </b>{{ $user -> nombres }}</p>
                    <p><b>Apellido Paterno: </b>{{ $user -> apellido_paterno }}</p>
                    <p><b>Apellido Materno: </b>{{ $user -> apellido_materno }}</p>
                </div>
                <div class="col-md-6 col-12">
                    <p><b>Usuario: </b>{{ $user -> usuario }}</p>
                    <p><b>Activo: </b>{{ $user -> activo }}</p>
                    <p><b>Tipo: </b>{{ $user -> tipo }}</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-2">
                    <a href="{{ route('user_ver_user') }}"><button class="btn btn-dark">Volver atras</button></a>
                </div>
            </div>
        </div>
    </div>
@stop