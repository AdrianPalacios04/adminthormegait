@extends('layouts.panel')

@section('content')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" /> --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
</head>
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row">
            <div class="col">
                <h3 class="mb-0">Carreras</h3> 
            </div>
            <div class="col text-right">
                <div class="row">
                    <div class="col text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" 
                        data-target="#exampleModal" >
                        Configuracion de Evento</button>
                    </div>
                    <div class="col text-right">
                        <div class="row justify-content-end ">
                            {{-- <div class="col-md-9"> --}}
                              <div class="form-group">
                                <div class="input-group">
                                    <input type="date" class="form-control" id="mySearchText">
                                     <button id="mySearchButton" class="btn btn-primary" type="button" ><i class="fas fa-search"></i></button>
                                </div>
                              </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            @include('race.modal')
        </div>
    </div>

        <div class="card-body">
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table table-striped" id="usuarios">
                    <thead >
                        <tr>
                        <th scope="col">inicio</th>
                        <th scope="col">final</th>
                        <th scope="col">Nombre Acertijo</th>
                        <th scope="col">Tipo ticket</th>
                        <th scope="col">Premio</th>
                        <th scope="col">Control</th>
                        <th scope="col">Estado</th>
                        @if (auth()->user()->role == 'admincarrera')
                        <th></th>
                        @endif
                        <th></th>
                        
                     
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($race as $races)
                            
                        <tr>
                            
                            <th width="100px">
                                {{ \Carbon\Carbon::parse($races->inicio)->format('d M, Y h:m:s' )}}
                            </th>
                            <td width="100px">
                                {{$races->final}}
                            </td>
                            <td width="100px">
                                {{$races->ticket->t_nombre}}
                                {{-- {{$races->id_ax}} --}}
                            </td>
                            <td>
                                {{$races->premio->tipo}}
                            </td>
                            <td>
                                {{$races->px_1}}
                            </td>
                            <td>
                                {{$races->px_2}}
                            </td>
                            <td>
                                {{$races->status->state_race}}
                            </td>
                            
                            <td>
                                @if ($races->race_state == 1)
                                <form action="{{url('/race/'.$races->id)}}" method="post">
                                    @csrf
                                    
                                    <a href="{{url('/race/'.$races->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
                                    
                                    </form>
                                @endif
                                
                            </td>
                            
                        </tr>
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
    var table = $('#usuarios').DataTable({
        "dom": '<"top"i>rt<"bottom"><"clear">',
        responsive:true,
        autoWidth:false,
        "ordering":false,
        "lengthChange": false,
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
        }
       
    });
    $('#mySearchButton').on( 'keyup click', function () {
    table.search($('#mySearchText').val()).draw();
  } );
  
 

</script>
{{-- Para buscar por fecha : http://live.datatables.net/hiyitago/1/edit --}}
@endsection