$(document).ready(function(){

    $('#data-table-simple').DataTable(
        {
            "info":    false,
            "bLengthChange": false,
            "lengthMenu": [[10,20,32,100,-1], [10,20,32,100,"Todo"]],
            "language": {
                "paginate": {
                    "first":      "Primera",
                    "last":       "Última ",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },
                "lengthMenu":"MOSTRAR _MENU_",
                "emptyTable": "No hay datos disponibles en la tabla",
                "search":     ""
            }
        }
    );
    $('#data-table-simple_filter').hide();

    $('#searchClientes').on( 'keyup', function () {
        var table = $('#data-table-simple').DataTable();
        table.search(this.value).draw();
    });


    });