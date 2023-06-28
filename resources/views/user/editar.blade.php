@extends('master')

@section('titulo')
    Editar Uausrio
@stop

@section('estilos')
    <link rel="stylesheet" href="/css/registrar.css">
@stop

@section('cuerpo')
    @parent
    @auth
        <div class="formulario">
            @if (Auth::user() -> tipo != "admin")
                <?php route('principal') ?>
            @else
                <div class="container">
                    <h1>Editar Usuario</h1>
                    {{ Form::open(['route' => ['user_validar_actualizacion', $user -> id], 'method' => 'post']) }}
                        <div class="mb-3 mt-3">
                            <label for="nombres" class="form-label">Nombres:</label>
                            <input type="text" class="form-control" id="nombres" placeholder="Introduza sus nombres" name="nombres" required value="{{ $user -> nombres }}">
                        </div>
                        <div class="mb-3">
                            <label for="app" class="form-label">Apellido Paterno:</label>
                            <input type="text" class="form-control" id="app" placeholder="Introduza su apellido paterno" name="app" value="{{ $user -> apellido_paterno }}">
                        </div>
                        <div class="mb-3">
                            <label for="apm" class="form-label">Apellido Materno:</label>
                            <input type="text" class="form-control" id="apm" placeholder="Introduza su apellido materno" name="apm" required value="{{ $user -> apellido_materno }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario:</label>
                            <input type="text" class="form-control" id="usuario" placeholder="Introduza su usuario" name="usuario" required value="{{ $user -> usuario }}">
                        </div>
                        {{-- <div class="mb-3">
                            <label for="contraseña" class="form-label">Contraseña:</label>
                            <input type="password" class="form-control" id="contraseña" placeholder="Introduza su contraseña" name="password" required value="{{ $user -> password }}">
                        </div> --}}
                        <div class="mb-3">
                            <label for="activo" class="form-label">Activo:</label>
                            <select class="form-select" id="activo" name="activo">
                                <option value="S" selected="true">Si</option>
                                <option value="N">No</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tipo" class="form-label">tipo:</label>
                            <select class="form-select" id="tipo" name="tipo">
                                <option value="user" selected="true">Usuario</option>
                                <option value="admin">Administrador</option>
                            </select>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-dark col-2" >Registar</button>
                            <button type="reset" class="btn btn-dark col-2">Borrar</button>
                        </div>
                    {{ Form::close() }}
                </div>
            @endif
        </div>
    @endauth
@stop