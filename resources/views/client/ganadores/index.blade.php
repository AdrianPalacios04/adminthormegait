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
                    <th>Tipo Premio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Puesto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($winner as $winners)
                    <tr>
                        {{-- nombre del usuario --}}
                        <td>
                            {{$winners->clients->t_username}}
                        </td>
                        {{-- dni del clients --}}
                        <td>
                            {{$winners->clients->persona->c_dniper}}
                        </td>
                        {{-- telefono del clients --}}
                        {{-- <td>{{$winners->clients->n_celular}}</td> --}}
                        {{-- correo electronico del clients --}}
                        {{-- <td>{{$winners->clients->t_correoper}}</td> --}}
                        {{-- nombre de la carrera --}}
                        <td>
                            {{-- {{$winners->carrerat->id_px}} --}}
                            {{-- @if ($winners->carrerat->id_px == 2)
                            {{$winners->carrerat->oldpaga->t_nombre}}    
                            @elseif($winners->carrerat->oldticket == null)
                                {{$winners->carrerat->ticket->t_nombre}}
                            @else
                                {{$winners->carrerat->oldticket->t_nombre}}
                            @endif --}}
                            {{-- {{$winners->carrerat->oldpaga}} --}}
                        </td>
                        {{-- fecha de la carrera --}}
                        {{-- <td>{{$winners->carrerat->inicio}}</td>

                        <td>{{$winners->carrerat->premio->tipo}}</td> --}}
                        {{-- premio de la carrera --}}
                        {{-- <td>{{$winners->carrerat->px_1}}</td> --}}
                        {{-- resultado - hora de la carrera --}}
                        {{-- puesto de la carrera --}}
                        <td>
                            @if ($winners->puesto == 1)
                                <span class="badge badge-danger">Ganador</span>
                            @else
                            <span class="badge badge-success">No gano</span>
                            @endif
                           
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
        // "ordering":false,
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