@extends('master')

@section('titulo')
    Mostrar Personal
@stop

@section('estilos')
    <link rel="stylesheet" href="/css/personal/mostrar.css">
@stop

@section('cuerpo')
    @parent
    <div class="cuerpo">
        <div class="container">
            <h1 class="nombre">{{ $personal -> nombres }}</h1>
            <div class="row">
                <div class="col-md-6 col-12">
                    <p><b>Nombres: </b>{{ $personal -> nombres }}</p>
                    <p><b>Apellido Paterno: </b>{{ $personal -> apellido_paterno }}</p>
                    <p><b>Apellido Materno: </b>{{ $personal -> apellido_materno }}</p>
                    <p><b>Telefono: </b>{{ $personal -> telefono }}</p>
                    <p><b>Celular: </b>{{ $personal -> celular }}</p>
                </div>
                <div class="col-md-6 col-12">
                    <p><b>C.I.: </b>{{ $personal -> ci }}</p>
                    <p><b>Domicilio: </b>{{ $personal -> domicilio }}</p>
                    <p><b>Tipo de Contrato: </b>{{ $personal -> tipo_contrato }}</p>
                    <p><b>Registrado por: </b>{{ $personal -> user -> nombres }}</p>
                </div>
            </div>
            <h1 class="titulo">Lista de Documentos</h1>
            {{ Form::open(['route' => 'crear_documento', 'method' => 'post']) }}
                <label for="tipo" class="form-label">tipo de docuemto:</label>
                <div class="row">
                    <div class="col-md-5 col-12">
                        <div class="mb-3">
                            <select class="form-select" id="tipo" name="tipo">
                                <option value="bajamedica">Baja Medica</option>
                                <option value="declaracionjurada">Declaracion Jurada</option>
                                <option value="memorando">Memorando</option>
                                <option value="curriculum">Curriculum</option>
                                <option value="servicio">Años de Servicio</option>
                                <option value="vacacion">Vacacion</option>
                            </select>
                        </div>
                    </div>
                    <input name="personal_id" type="hidden" value="{{ $personal -> id }}">
                    <div class="col-md-7 col-12">
                        <button type="submit" class="btn btn-dark" >Nuevo Documento</button>
                    </div>
                </div>
            {{ Form::close() }}
            <?php $i = 0; ?>
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                        <th>N</th>
                        <th>Docuemnto</th>
                        <th>Archivero</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $documentos = $personal -> documentos ?>
                    @foreach ($documentos as $documento)
                        @if ($documento -> activo == "S")
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $documento -> nombre }}</td>
                                <td>{{ $documento -> archivero }}</td>
                                <td>
                                    <a href="{{ route('documento_mos_documento', ['id' => $documento -> id]) }}">Mostrar</a> |
                                    <a href="">Editar</a> |
                                    <a href="">Eliminar</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            <div class="row justify-content-center">
                <div class="col-2">
                    <a href="{{ route('personal_ver_personal') }}"><button class="btn btn-dark">Volver atras</button></a>
                </div>
            </div>
        </div>
    </div>
@stop