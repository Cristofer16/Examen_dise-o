@extends('master')

@section('titulo')
    Editar Documento
@stop

@section('estilos')
    <link rel="stylesheet" href="/css/registrar.css">
@stop

@section('cuerpo')
    @parent
    <div class="formulario">
        <div class="container">
            <h1>
                Editar Documento - 
                @switch($documento -> tipo)
                    @case("bajamedica")
                        Baja Medica
                        @break
                    @case("declaracionjurada")
                        Declaracion Jurada
                        @break
                    @case("memorando")
                        Momorandum
                        @break
                    @case("curriculum")
                        Curriculum
                        @break
                    @case("servicio")
                        Años de Servicio
                        @break
                    @case("vacacion")
                        Vacaciones
                        @break
                @endswitch
            </h1>
            {{ Form::open(['route' => ['documento_validar_actualizacion', $documento -> id], 'method' => 'post']) }}
                <div class="mb-3 mt-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Introduza el nombre del documento" name="nombre" required value="{{ $documento -> nombre }}">
                </div>
                @switch($documento -> tipo)
                    @case("bajamedica")
                        <div class="mb-3">
                            <label for="fecha_inicio" class="form-label">Fecha de Inicio:</label>
                            <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required value="{{ $documento -> bajamedica -> fecha_inicio }}">
                        </div>
                        <div class="mb-3">
                            <label for="fecha_fin" class="form-label">Fecha de Finalización:</label>
                            <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required value="{{ $documento -> bajamedica -> fecha_fin }}">
                        </div>
                        @break
                    @case("declaracionjurada")
                        <div class="mb-3">
                            <label for="gestion" class="form-label">Gestion:</label>
                            <input type="date" class="form-control" id="gestion" name="gestion" required value="{{ $documento -> declaracionjurada -> gestion }}">
                        </div>
                        @break
                    @case("memorando")
                        <div class="mb-3">
                            <label for="numero_memorando" class="form-label">Número de Memorando:</label>
                            <input type="text" class="form-control" id="numero_memorando" placeholder="Introduza el número del memorando" name="numero_memorando" required value="{{ $documento -> memorando -> numero_memorando }}">
                        </div>
                        <div class="mb-3">
                            <label for="tipo_memo" class="form-label">Tipo de Memorando:</label>
                            <input type="text" class="form-control" id="tipo_memo" placeholder="Introduza el tipo de memorando" name="tipo_memo" required value="{{ $documento -> memorando -> tipo }}">
                        </div>
                        @break
                    @case("curriculum")
                        <div class="mb-3">
                            <label for="especialidad" class="form-label">Especialidad:</label>
                            <input type="text" class="form-control" id="especialidad" placeholder="Introduza su especialidad" name="especialidad" value="{{ $documento -> curriculum -> especialidad }}">
                        </div>
                        <div class="mb-3">
                            <label for="titulo_mayor" class="form-label">Titulo de Mayor Grado:</label>
                            <input type="text" class="form-control" id="titulo_mayor" placeholder="Introduza su grado mayor" name="titulo_mayor" required value="{{ $documento -> curriculum -> titulo_mayor }}">
                        </div>
                        <div class="mb-3">
                            <label for="cantidad_documentos" class="form-label">Cantidad de Documentos Presentados:</label>
                            <input type="number" class="form-control" id="cantidad_documentos" placeholder="Introduza la cantida de los documentos" name="cantidad_documentos" required value="{{ $documento -> curriculum -> cantidad_documentos }}">
                        </div>
                        @break
                    @case("servicio")
                        <div class="mb-3">
                            <label for="fecha_emitida" class="form-label">Fecha Emitida del Documento:</label>
                            <input type="date" class="form-control" id="fecha_emitida" name="fecha_emitida" required value="{{ $documento -> servicio -> fecha_emitida }}">
                        </div>
                        <div class="mb-3">
                            <label for="cantidad_años" class="form-label">Años de Servicio:</label>
                            <input type="number" class="form-control" id="cantidad_años" placeholder="Introduza los años de servicio" name="cantidad_años" required value="{{ $documento -> servicio -> cantidad_años }}">
                        </div>
                        @break
                    @case("vacacion")
                        <div class="mb-3">
                            <label for="tipo_vacacion" class="form-label">Tipo de Vacación:</label>
                            <input type="text" class="form-control" id="tipo_vacacion" placeholder="Introduza el tipo de vacación" name="tipo_vacacion" required value="{{ $documento -> vacacion -> tipo }}">
                        </div>
                        <div class="mb-3">
                            <label for="cantidad_dias" class="form-label">Cantidad de Días:</label>
                            <input type="number" class="form-control" id="cantidad_dias" placeholder="Introduza la cantidad de días" name="cantidad_dias" required value="{{ $documento -> vacacion -> cantidad_dias }}">
                        </div>
                        @break
                @endswitch
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-dark col-2" >Registar</button>
                    <button type="reset" class="btn btn-dark col-2">Borrar</button>
                </div>
            {{ Form::close() }}
        </div>
    </div>
@stop