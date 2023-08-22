$(document).ready(function() {
    $('#example').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ registro",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrar registro del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "sProcessing": "Precesando...",
        }
    });
});