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
            <div class="row justify-content-center">
                <div class="col-2">
                    <a href="{{ route('personal_ver_personal') }}"><button class="btn btn-dark">Volver atras</button></a>
                </div>
            </div>
            <h1 class="titulo">Lista de Documentos</h1>
            <?php $i = 0; ?>
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                        <th>N</th>
                        <th>Archivero</th>
                        <th>Docuemnto</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($personales as $personal)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $personal -> apellido_paterno . ' ' . $personal -> apellido_materno }}</td>
                            <td>{{ $personal -> nombres }}</td>
                            <td>{{ $personal -> ci }}</td>
                            <td>
                                <a href="{{ route('personal_mos_personal', ['id' => $personal -> id]) }}">Mostrar</a> |
                                <a href="">Editar</a> |
                                <a href="">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
@stop