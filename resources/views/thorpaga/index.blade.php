@extends('layouts.panel')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
<div class="card shadow">
    
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0" style="display:inline-block">Acertijos Thor Paga</h3>
                <button class="btn btn-sm btn-primary" style="display:inline-block" type="button" data-toggle="modal" 
                data-target="#exampleModalImport"><i class="fas fa-upload"></i> Subir acertijos </button>
            </div>
            {{-- @if (auth()->user()->role == 'admin' or auth()->user()->role == 'acertijero') --}}
            <div class="col text-right">
                <a href="{{url('cash/create')}}" class="btn btn-sm btn-primary">Nuevos Acertijos</a>
            </div>
            {{-- @endif --}}
        </div>
    </div>
    <div class="card-body">
        @if(session('notificacion'))
        <div class="alert alert-success" role="alert">
            {{session('notificacion')}}
        </div>
        @endif
        @if ( $errors->any() )
 
        <div class="alert alert-danger">
            @foreach( $errors->all() as $error )<li>{{ $error }}</li>@endforeach
        </div>
    @endif
        @if(isset($numRows))
        <div class="alert alert-sucess">
            Se importaron {{$numRows}} registros.
        </div>
    @endif
        <div class="table-responsive">
            <!-- Projects table -->
            <table class="table table-striped" id="usuarios">
                <thead >
                    <tr>
                    <th></th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Pregunta N°1</th>
                    {{-- <th scope="col">Respuesta N°1</th> --}}
                    <th scope="col">Pregunta N°2</th>
                    {{-- <th scope="col">Respuesta N°2</th> --}}
                    <th scope="col">Pregunta N°3</th>
                    {{-- <th scope="col">Respuesta N°3</th> --}}
                    <th scope="col">Llave N°1</th>
                    <th scope="col">Llave N°2</th>
                    <th scope="col">Llave N°3</th>
                   
    
                     @if (auth()->user()->role == 'admin' or auth()->user()->role == 'supacertijero')
                    <th scope="col">Creador</th> 
                     @endif
                    {{-- <th scope="col">Acciones</th> --}}
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($thorpaga as $thorpagas)
                        
                    <tr>
                        <td>
                            <button type="button" class="btn btn-sm" data-toggle="modal" 
                                data-target="#exampleModal{{$thorpagas->i_id}}" >
                                <i class="fa fa-search-plus" aria-hidden="true"></i></button>
                        </td>
                        <td>
                            {{$thorpagas->t_nombre}}
                        </td>
                        <td  style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:100px;">
                            {{$thorpagas->t_pregunta1}}
                        </td>
                        {{-- <td>
                            {{$thorpagas->t_respuesta1}}
                        </td> --}}
                        <td>
                            {{$thorpagas->t_pregunta2}}
                        </td>
                        {{-- <td>
                            {{$thorpagas->t_respuesta2}}
                        </td> --}}
                        <td>
                            {{$thorpagas->t_pregunta3}}
                        </td>
                        {{-- <td>
                            {{$thorpagas->t_respuesta3}}
                        </td> --}}
                        <td>
                            {{$thorpagas->t_llave1}}
                        </td>
                        <td>
                            {{$thorpagas->t_llave2}}
                        </td>
                        
                        <td>
                            {{$thorpagas->t_llave3}}
                        </td>
                            @if (auth()->user()->role == 'admin' or auth()->user()->role == 'supacertijero')
                            <td>
                            {{$thorpagas->user->name}}
                            </td>
                            @endif
                        {{-- <td>
                            <label class="custom-toggle">
                            <input type="checkbox" class="toggle-class" data-id="{{ $thorpagas->i_id }}" 
                            data-toggle="toggle" data-style="slow" data-label-off="No" data-label-on="Yes" {{ $thorpagas->i_uso == true ? 'checked' : ''}}>
                            <span class="custom-toggle-slider rounded-circle"></span>
                            </label>
                        </td> --}}
                        <td>
                            {{-- @if (auth()->user()->role == 'admin' or auth()->user()->role == 'acertijero') --}}
                            <form action="{{url('/cash/'.$thorpagas->i_id)}}" method="post" class="archiveItem">
                            @csrf
                            @method('DELETE')
                            
                            <a href="{{url('/cash/'.$thorpagas->i_id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
                            <a  class="btn btn-sm btn-danger" type="submit" onclick="archiveRemove(this)"  i_id="{{$thorpagas->i_id}}" 
                                style="color: white"><i class="far fa-trash-alt"></i></a> 
                            </form>
                            {{-- @endif --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Modal -->
             @include('thorpaga.modal')
             @include('thorpaga.importmodal')
             {{-- <div class="d-flex justify-content-center">
                {{ $thorpaga->links() }}
            </div>   --}}
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
@push('scripts')
<script>
    $('.toggle-class').change(function() {
        var i_uso = $(this).prop('checked') == true ? 1:0  ;
    
        var i_id = $(this).data('id');
     
        $.ajax({
            type:'GET',
            dataType:'JSON',
            url: '{{route('changeUse')}}',
            data:{
                'i_uso':i_uso,
                'i_id':i_id,
            },
            success:function(data){
              
            }
        });
    });
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  function archiveRemove(any) {
        var click = $(any);
        var id = click.attr("i_id");
        swal.fire({
            title: '¿Seguro que quieres eliminarlo?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar!'
        }).then((result) => {
            if (result.value) {
               $('a[i_id="' + id + '"]').parents(".archiveItem").submit();
            }else{
               
            }
        })
    }
</script>
    
@endpush

    
