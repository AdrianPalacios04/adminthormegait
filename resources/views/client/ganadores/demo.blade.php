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
                <div class="row">
                    <div class="col text-right">
                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filtro de Carreras 
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('race/create')}}">Nueva Carrera</a>
                                <a class="dropdown-item" href="{{url('/race')}}">Carreras del Día</a>
                                <a class="dropdown-item" href="{{url('raceAll')}}">Carreras Totales</a>
                            </div>
                        </div>
                    </div>
                    <div class="col text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" 
                        data-target="#exampleModal" >
                        Configuracion de Evento</button>
                    </div>
                    {{-- <div class="col text-right">
                        <div class="row justify-content-end ">
                            {{-- <div class="col-md-9"> --}}
                              {{-- <div class="form-group">
                                <div class="input-group">
                                    <input type="date" class="form-control" id="mySearchText">
                                     <button id="mySearchButton" class="btn btn-primary" type="button" ><i class="fas fa-search"></i></button>
                                </div>
                              </div>
                            {{-- </div> --}}
                        {{-- </div>
                    </div> --}}
                </div>
            {{-- @include('race.modal') --}}
        </div>
    </div>

        <div class="card-body">
            <div class="table-responsive">
                {{-- <table border="0" cellspacing="5" cellpadding="5">
                    <tbody>
                        <tr>
                            <td>Minimum date:</td>
                            <td><input type="text" id="min" name="min"></td>
                        </tr>
                        <tr>
                            <td>Maximum date:</td>
                            <td><input type="text" id="max" name="max"></td>
                        </tr>
                    </tbody>
                </table> --}}
                <!-- Projects table -->
                <table class="table table-striped" id="usuarios">
                    <thead >
                        <tr>
                            <th></th>
                            
                            <th scope="col">FECHA</th>
                            <th>HORA</th>
                            <th scope="col">NOMBRE DE LA CARRERA</th>
                            <th scope="col">TIPO PREMIO</th>
                            <th>PREMIO</th>
                            <th>CANTIDAD DE REGISTRO</th>
                        {{-- <th scope="col">Estado</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($win as $races)
                        <tr>
                            <th scope="row">
                                <button type="button" class="btn btn-sm" data-toggle="modal" 
                                    data-target="#exampleModal{{$races->id}}" >
                                    <i class="fa fa-search-plus" aria-hidden="true"></i></button>
                            </th>
                            <th width="100px">
                                {{ \Carbon\Carbon::parse($races->inicio)->format('d M, Y' )}}
                            </th>
                            <th width="100px">
                                {{ \Carbon\Carbon::parse($races->inicio)->format('H:i')}}
                            </th>
                            <td width="100px">
                                @if ($races->id_px == 1)
                                    {{$races->ticket->t_nombre}}
                                @elseif($races->paga != null)
                                    {{$races->paga->t_nombre}}
                                @elseif($races->paga == null)
                                    {{$races->oldticket->t_nombre}}
                                @else
                                    No se encontro
                                @endif 
                                  {{-- {{$races->oldticket}} --}}
                                 {{-- {{$races}} --}}
                            </td>
                            <td width="100px">
                               {{$races->premio->tipo}}
                            </td>
                            <td>
                                @if ($races->premio->id == 1 )
                                 {{floatval($races->px_1)}} tickets
                                @else
                                S/. {{floatval($races->px_1)}}
                                @endif
                            </td>
                            
                            <td>
                                @if ($races->usercarrera->count() == 0)
                                    Nadie se registro
                                @else
                                {{$races->usercarrera->count()}}     
                                @endif
                                
                            </td>
                        </tr>
                        @endforeach
                        {{-- {{$user->clientuser}} --}}
                    </tbody>
                </table>
                @include('client.ganadores.modal')
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