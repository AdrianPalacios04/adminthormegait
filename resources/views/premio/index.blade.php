@extends('layouts.panel')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row justify-content-end">
            <div class="col">
                <h3 class="mb-0">Premios</h3>
            </div>
        </div>
    </div>
        {{-- <label class="custom-toggle">
            <input type="checkbox" class="toggle-class"  
            data-toggle="toggle" data-style="slow" >
            <span class="custom-toggle-slider rounded-circle"></span>
        </label> --}}
    <div class="card-body">
        <div class="table-responsive">
            <!-- Projects table -->
            <table class="table table-striped" id="usuarios">
                <thead>
                    <tr>
                  
                    <th scope="col"> Usuario </th>
                    <th scope="col"> Monto </th>
                    <th scope="col"> Tipo de Banco </th>
                    <th scope="col"> Tipo de Cuenta </th>
                    <th scope="col"> Número de cuenta </th>
                    <th scope="col"> Número de CCI </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prize as $item)
                        <td>{{$item->id_usuario}}</td>
                        <td>{{$item->monto}}</td>
                        <td>{{$item->banking_entity}}</td>
                        <td>{{$item->account_type}}</td>
                        {{-- <td>{{$item->decryptAccount()}}</td> --}}
                        <td>{{$item->account_soles}}</td>

                    @endforeach
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
    $('#usuarios').DataTable({
        responsive:true,
        autoWidth:false,
        "ordering":false,
        "lengthChange": false,
        "paging":false,

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

        }

    });
</script>

    
@endsection