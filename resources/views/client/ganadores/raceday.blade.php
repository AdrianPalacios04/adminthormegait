@extends('layouts.panel')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.0/css/dataTables.dateTime.min.css"> --}}
</head>
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row">
            <div class="col">
                <h3 class="mb-0">Carreras General</h3> 
            </div>
        </div>
    </div>
        <div class="card-body">
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table table-striped" id="usuarios">
                    <thead >
                        <tr>
                            <th scope="col">FECHA</th>
                            <th>Usuario</th>
                            <th scope="col">NOMBRE DE LA CARRERA</th>
                            <th scope="col">TIPO PREMIO</th>
                            <th>PREMIO</th>
                            <th>CANTIDAD DE REGISTRO</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
</div>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
<script>
    var table = $('#usuarios').DataTable({
        "searching": false,
        responsive:true,
        autoWidth:false,
        "ordering":false,
        // "lengthChange": false,
          "paging":false,
        "info": false,
        "language":{
            "lengthMenu":"Mostrar _MENU_ registros por página",
            "zeroRecords":"Nada encontrado",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty":"No hay registro",
            "infoFiltered":"(filtrado de _MAX_ registros totales)",
            "search":"Buscar:",
            "paginate":{
                "next":">",
                "previous":"<"
            }
        },
        "dom": '<"row"<"col-sm-4"l><"col-sm-4 text-center"p><"col-sm-4"f>>tip'
    });
    $('#mySearchButton').on( 'keyup click', function () {
    table.search($('#mySearchText').val()).draw();
  } );
  
//  https://laravel.com/docs/8.x/collections#available-methods

</script>
    
@endsection