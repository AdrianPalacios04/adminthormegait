@extends('layouts.panel')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Usuarios Creados</h3>
        </div>
        <div class="col text-right">
            <a href="{{url('client/create')}}" class="btn btn-sm btn-primary">Registro Usuario</a>
        </div>
        </div>
    </div>
    <div class="card-body">
        @if(session('notification'))
        <div class="alert alert-success" role="alert">
            {{session('notification')}}
        </div>
        @endif
        <div class="table-responsive">
            <!-- Projects table -->
            <table class="table table-striped" id="usuarios">
                <thead>
                    <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($client as $clients)
                        
                    <tr>
                        <th scope="row">
                            {{$clients->name}}
                        </th>
                        <td>
                            {{$clients->email}}
                        </td>
                        <td>
                            {{$clients->role}}
                        </td>
                        <td>
                            <form action="{{url('/client/'.$clients->id.'/delete')}}" method="post" class="archiveItem">
                            @csrf
                            @method('PUT')
                            <a href="{{url('/client/'.$clients->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
                            {{-- <button class="btn btn-sm btn-danger"  type="submit">Eliminar</button> --}}
                            <a  class="btn btn-sm btn-danger" type="submit" onclick="archiveRemove(this)"  id="{{$clients->id}}" 
                                style="color: white">Eliminar</a> 
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
        <div class="d-flex justify-content-center">
            {{ $client->links() }}
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
        "paging": false,
        

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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  function archiveRemove(any) {
        var click = $(any);
        var id = click.attr("id");
        swal.fire({
            title: '¿Seguro que quieres eliminarlo?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar!'
        }).then((result) => {
            if (result.value) {
               $('a[id="' + id + '"]').parents(".archiveItem").submit();
            }else{
               
            }
        })
    }
</script>
@endsection