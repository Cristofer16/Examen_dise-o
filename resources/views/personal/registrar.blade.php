@extends('master')

@section('titulo')
    Registrar Personal
@stop

@section('estilos')
    <link rel="stylesheet" href="/css/registrar.css">
@stop

@section('cuerpo')
    @parent
    <div class="formulario">
        <div class="container">
            <h1>Registra Personal</h1>
            {{ Form::open(['route' => 'personal_validar_sesion', 'method' => 'post']) }}
                <div class="mb-3 mt-3">
                    <label for="nombres" class="form-label">Nombres:</label>
                    <input type="text" class="form-control" id="nombres" placeholder="Introduza sus nombres" name="nombres">
                </div>
                <div class="mb-3">
                    <label for="app" class="form-label">Apellido Paterno:</label>
                    <input type="text" class="form-control" id="app" placeholder="Introduza su apellido paterno" name="app">
                </div>
                <div class="mb-3">
                    <label for="apm" class="form-label">Apellido Materno:</label>
                    <input type="text" class="form-control" id="apm" placeholder="Introduza su apellido materno" name="apm">
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono:</label>
                    <input type="number" class="form-control" id="telefono" placeholder="Introduza su teléfono" name="telefono">
                </div>
                <div class="mb-3">
                    <label for="celular" class="form-label">Celular:</label>
                    <input type="number" class="form-control" id="celular" placeholder="Introduza su celular" name="celular">
                </div>
                <div class="mb-3">
                    <label for="ci" class="form-label">Canet de Identidad:</label>
                    <input type="text" class="form-control" id="ci" placeholder="Introduza su C.I." name="ci">
                </div>
                <div class="mb-3">
                    <label for="domicilio" class="form-label">Domicilio:</label>
                    <input type="text" class="form-control" id="domicilio" placeholder="Introduza su domicilio" name="domicilio">
                </div>
                <div class="mb-3">
                    <label for="tipo_contrato" class="form-label">Tipo de Contrato:</label>
                    <input type="text" class="form-control" id="tipo_contrato" placeholder="Introduza el tipo de contrato" name="tipo_contrato">
                </div>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-dark col-2" >Registar</button>
                    <button type="reset" class="btn btn-dark col-2">Borrar</button>
                </div>
            {{ Form::close() }}
        </div>
    </div>
@stop