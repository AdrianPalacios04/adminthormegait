@extends('layouts.panel')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row justify-content-end">
            <div class="col">
                <h3 class="mb-0">Clientes Creados</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <!-- Projects table -->
            <table class="table table-striped" id="usuarios">
                <thead>
                    <tr>
                   <th></th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Nombre </th>
                    <th scope="col">DNI</th>
    
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($client as $clients)
                    <tr>
                        <th scope="row">
                            <button type="button" class="btn btn-sm" data-toggle="modal" 
                                data-target="#exampleModal{{$clients->i_idusuario}}" >
                                <i class="fa fa-search-plus" aria-hidden="true"></i></button>
                        </th>
                        <th scope="row">
                            {{$clients->t_username}}
                        </th>
                        <td>
                            {{$clients->persona->t_apellidoper}}
                        </td>
                        <td>
                            {{$clients->persona->t_nombreper}}
                        </td>
                        <td>
                            {{$clients->persona->c_dniper}}
                        </td>
                        
                        <td>
                            <form action="{{url('/users/'.$clients->i_idusuario)}}" method="post">
                            @csrf
                            {{-- @method('DELETE') --}}
                            <a href="{{url('/users/'.$clients->i_idusuario.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
                            {{-- <button class="btn btn-sm btn-danger" type="submit">Eliminar</button> --}}
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $client->links() }}
            @include('client.modal')
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
