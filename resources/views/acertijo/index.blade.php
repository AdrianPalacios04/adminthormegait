@extends('layouts.panel')

{{-- @section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
@endsection --}}
   

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">

<div class="card shadow">
     <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">EQUILICUA</h3>
            </div>
             @if (auth()->user()->role == 'admin' or auth()->user()->role == 'acertijero')
            <div class="col text-right">
                <a href="{{url('acertijo/create')}}" class="btn btn-sm btn-primary">Nuevos Acertijos</a>
            </div>
             @endif
         </div>
    </div>
    <div>
        <div class="card-body">
            @if(session('notificacion'))
                <div class="alert alert-success" role="alert">
            {{session('notificacion')}}
            </div>
            @endif
            <table class="table table-striped" id="usuarios">
                <thead>
                    <tr>
                    <th></th>
                    <th scope="col">Pregunta</th>
                    <th scope="col">Respuesta</th>
                    @if (auth()->user()->role == 'admin' or auth()->user()->role == 'supacertijero')
                    <th scope="col">Usuario</th>
                    <th scope="col">Uso</th>
                    <th></th>
                    @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($acertijo as $acertijos)
                        
                    <tr>
                        <td>
                            <button class="btn btn-sm" data-toggle="modal" data-target="#exampleModal{{$acertijos->i_id}}"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
                        </td>
                        <td  style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:100px;">
                            {{$acertijos->t_pregunta}}
                        </td>
                        <td>
                            {{$acertijos->t_respuesta}}
                        </td>
                        {{-- @if (auth()->user()->role == 'admin' or auth()->user()->role == 'supacertijero') --}}
                        <td>
                        {{$acertijos->user->name}}
                        </td>
                        <td>
                            <label class="custom-toggle">
                            <input type="checkbox" class="toggle-class" data-id="{{ $acertijos->i_id }}" 
                            data-toggle="toggle" data-style="slow" data-label-off="No" data-label-on="Yes" {{ $acertijos->i_uso == true ? 'checked' : ''}}>
                            <span class="custom-toggle-slider rounded-circle"></span>
                            </label>
                        </td>
                        {{-- @endif --}}
                        <td>
    
                            {{-- @if (auth()->user()->role == 'admin' or auth()->user()->role == 'acertijero') --}}
                            <form action="{{url('/acertijo/'.$acertijos->i_id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                
                                <a href="{{url('/acertijo/'.$acertijos->i_id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
                                <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                                </form>
                            {{-- @endif --}}
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Projects table -->
        
        
        <!-- Modal -->
        
        @include('acertijo.show')
        {{-- {{ $acertijo->links() }} --}}
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
    
@endpush

    
