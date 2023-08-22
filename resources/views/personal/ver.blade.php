@extends('master')

@section('titulo')
    Personal
@stop

@section('estilos')
    <link rel="stylesheet" href="/css/ver.css">
    <link rel="stylesheet" href="/datatables/datatables.min.css">
    <link rel="stylesheet" href="/datatables/DataTables-1.13.6/css/dataTables.bootstrap5.min.css">
@stop

@section('cuerpo')
    @parent
    <div class="tabla">
        <div class="container">
            <h1>Lista del Personal</h1>
            <?php $i = 0; ?>
            <table class="table table-dark table-striped table-hover" id="example">
                <thead>
                    <tr>
                        <th>N</th>
                        <th>Apellidos</th>
                        <th>Nombres</th>
                        <th>Carnet de Identidad</th>
                        <th>Activo</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personales as $personal)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $personal -> apellido_paterno . ' ' . $personal -> apellido_materno }}</td>
                            <td>{{ $personal -> nombres }}</td>
                            <td>{{ $personal -> ci }}</td>
                            <td>
                                @switch($personal -> activo)
                                    @case("S")
                                        Si
                                        @break
                                    @case("N")
                                        No
                                        @break
                                @endswitch
                            </td>
                            <td>
                                <a href="{{ route('personal_mos_personal', ['id' => $personal -> id]) }}">Mostrar</a> |
                                <a href="{{ route('personal_edi_personal', ['id' => $personal -> id]) }}">Editar</a> |
                                <a href="{{ route('personal_eli_personal', ['id' => $personal -> id]) }}">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="/js/jquery-3.7.0.min.js"></script>
    <script src="/datatables/datatables.min.js"></script>
    <script src="/js/tablas.js"></script>
@stop