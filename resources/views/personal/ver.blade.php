@extends('master')

@section('titulo')
    Personal
@stop

@section('estilos')
    <link rel="stylesheet" href="/css/ver.css">
@stop

@section('cuerpo')
    @parent
    <div class="tabla">
        <div class="container">
            <h1>Lista del Personal</h1>
            <?php $i = 0; ?>
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                        <th>N</th>
                        <th>Apellidos</th>
                        <th>Nombres</th>
                        <th>Carnet de Identidad</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personales as $personal)
                        @if ($personal -> activo == "S")
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
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop