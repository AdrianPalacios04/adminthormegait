@extends('layouts.panel')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row justify-content-end">
            <div class="col">
                <h3 class="mb-0">Usuarios WEB</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <!-- Projects table -->
            <table class="table table-striped" id="usuarios">
                <thead>
                    <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo Electronico</th>
                    <th scope="col">Carrera</th>
                    <th scope="col">Fecha Carrera</th>
                    <th scope="col">Premio</th>
                    <th scope="col">Puesto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($winner as $winners)
                    <tr>
                        {{-- nombre del usuario --}}
                        <th>
                            {{$winners->usuario->persona->t_nombreper}}
                        </th>
                        {{-- dni del usuario --}}
                        <th>
                            {{$winners->usuario->persona->c_dniper}}
                        </th>
                        {{-- telefono del usuario --}}
                        <th>{{$winners->usuario->n_celular}}</th>
                        {{-- correo electronico del usuario --}}
                        <th>{{$winners->usuario->t_correoper}}</th>
                        {{-- nombre de la carrera --}}
                        <td>
                            {{$winners->carrera->ticket->t_nombre}}
                        </td>
                        {{-- fecha de la carrera --}}
                        <td>{{$winners->carrera->inicio}}</td>
                        {{-- premio de la carrera --}}
                        <td>{{$winners->carrera->px_1}}</td>
                        {{-- resultado - hora de la carrera --}}
                        {{-- puesto de la carrera --}}
                        <td>
                            <span class="badge badge-danger">Ganador</span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
        {{-- <div class="d-flex justify-content-center">
            {{ $client->links() }}
        </div>  --}}
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