@extends('master')

@section('titulo')
    Usuarios
@stop

@section('estilos')
    <link rel="stylesheet" href="/css/ver.css">
@stop

@section('cuerpo')
    @parent
    <div class="tabla">
        <div class="container">
            <h1>Lista de Usuarios</h1>
            <?php $i = 0; ?>
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                        <th>N</th>
                        <th>Apellidos</th>
                        <th>Nombres</th>
                        <th>Usuario</th>
                        <th>Estado</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $user -> apellido_paterno . ' ' . $user -> apellido_materno }}</td>
                            <td>{{ $user -> nombres }}</td>
                            <td>{{ $user -> usuario }}</td>
                            <td>{{ $user -> estado }}</td>
                            <td>
                                <a href="">Mostrar</a> |
                                <a href="">Editar</a> |
                                <a href="">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop