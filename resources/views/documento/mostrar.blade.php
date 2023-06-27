@extends('master')

@section('titulo')
    Mostrar Documento
@stop

@section('estilos')
    <link rel="stylesheet" href="/css/mostrar.css">
@stop

@section('cuerpo')
    @parent
    <div class="cuerpo">
        <div class="container">
            <h1 class="nombre">{{ $documento -> nombre }}</h1>
            <div class="row">
                <div class="col-md-6 col-12">
                    <p><b>Nombre: </b>{{ $documento -> nombre }}</p>
                    <p><b>Archivero: </b>{{ $documento -> archivero }}</p>
                    <p><b>Cajon: </b>{{ $documento -> cajon }}</p>
                    <p><b>Docuemto de: </b>{{ $documento -> personal -> nombres }}</p>
                    <p><b>Restrado por: </b>{{ $documento -> user -> nombres }}</p>
                </div>
                <div class="col-md-6 col-12">
                    <p><b>Tipo de Documento: </b>{{ $documento -> tipo }}</p>
                    @switch($documento -> tipo)
                        @case('bajamedica')
                            <p><b>Fecha de Inicio: </b>{{ $documento -> bajamedica -> fecha_inicio }}</p>
                            <p><b>Fecha de Finalización: </b>{{ $documento -> bajamedica -> fecha_fin }}</p>
                            @break
                        @case('declaracionjurada')
                            <p><b>Gestion: </b>{{ $documento -> declaracionjurada -> gestion }}</p>
                            @break
                        @case('memorando')
                            <p><b>Numero de Memorando: </b>{{ $documento -> memorando -> numero_memorando }}</p>
                            <p><b>Tipo de Memorando: </b>{{ $documento -> memorando -> tipo }}</p>
                            @break
                        @case('curriculum')    
                            <p><b>Especialidad: </b>{{ $documento -> curriculum -> especialidad }}</p>
                            <p><b>Titulo de Mayor Grado: </b>{{ $documento -> curriculum -> titulo_mayor }}</p>
                            <p><b>Cantidad de Documentos Presentados: </b>{{ $documento -> curriculum -> cantidad_documentos }}</p>
                            @break
                        @case('servicio')
                            <p><b>Fecha Emitida del Documentos: </b>{{ $documento -> servicio -> fecha_emitida }}</p>
                            <p><b>Años de Servicio: </b>{{ $documento -> servicio -> cantidad_años }}</p>
                            @break
                        @case('vacacion')
                            <p><b>tipo de Vacacion: </b>{{ $documento -> vacacion -> tipo }}</p>
                            <p><b>Cantida de Días: </b>{{ $documento -> vacacion -> cantidad_dias }}</p>
                            @break
                    @endswitch
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-2">
                    <a href="{{ route('personal_mos_personal', ['id' => $documento -> personal_id]) }}"><button class="btn btn-dark">Volver atras</button></a>
                </div>
            </div>
        </div>
    </div>
@stop