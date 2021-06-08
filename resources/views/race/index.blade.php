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
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Carreras</h3>
            </div>
            <div class="col text-right">
                <div class="row justify-content-end ">
                    <div class="col-md-5">
                      <div class="form-group">
                        <div class="input-group">
                            <input type="date" class="form-control" id="mySearchText">
                            <button id="mySearchButton" class="btn btn-sm btn-primary">Search</button>
                        </div>
                      </div>
                    </div>
                </div>
                {{-- <a href="{{url('race/create')}}" class="btn btn-sm btn-primary">Registro Carreras</a> --}}      
            </div>
        </div>
    </div>
        {{-- <div class=" col text-right col-2">
            <input type="date" name="day" class="form-control" value="{{old('name')}}" required>
        </div>  --}}
         {{-- <div class="card-body">
            <div class="container" >
                <div id='full_calendar_events'></div>
            </div>
        </div> --}}

        <div class="card-body">
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table table-striped" id="usuarios">
                    <thead >
                        <tr>
                        <th scope="col">inicio</th>
                        <th scope="col">final</th>
                        <th scope="col">id acertijo</th>
                        <th scope="col">id premio</th>
                        <th scope="col">cantidad premio 1</th>
                        <th scope="col">cantidad premio 2</th>
                        <th scope="col">Estado</th>
                        <th></th>
                     
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($race as $races)
                            
                        <tr>
                            <th scope="row" id="fecha">
                                {{$races->inicio}}
                            </th>
                            <td>
                                {{$races->final}}
                            </td>
                            <td>
                                {{$races->id_ax}}
                            </td>
                            <td>
                                {{$races->id_px}}
                            </td>
                            <td>
                                {{$races->px_1}}
                            </td>
                            <td>
                                {{$races->px_2}}
                            </td>
                            <td>
                                {{$races->race_state}}
                            </td>
                            <td>
                                <form action="{{url('/race/'.$races->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{url('/race/'.$races->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
                                <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                                </form>
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
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}
    {{-- <script>

        $(document).ready(function () {
        
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                }
            });
        
            var calendar = $('#full_calendar_events').fullCalendar({
                editable:true,
                header:{
                    left:'prev,next today',
                    center:'title',
                    right:'month,agendaWeek,agendaDay'
                },
                events:'/race',
                selectable:true,
                selectHelper: true,
                select:function(inicio, final, allDay)
                {
                    var px_1 = prompt('Event Title:');
        
                    if(px_1)
                    {
                        var inicio = $.fullCalendar.formatDate(inicio, 'Y-MM-DD HH:mm:ss');
        
                        var final = $.fullCalendar.formatDate(final, 'Y-MM-DD HH:mm:ss');
        
                        $.ajax({
                            url:"/full-calender/action",
                            type:"POST",
                            data:{
                                px_1: px_1,
                                inicio: inicio,
                                final: final,
                                type: 'add'
                            },
                            success:function(data)
                            {
                                calendar.fullCalendar('refetchEvents');
                                alert("Event Created Successfully");
                            }
                        })
                    }
                },
                editable:true,
                eventResize: function(event, delta)
                {
                    var inicio = $.fullCalendar.formatDate(event.inicio, 'Y-MM-DD HH:mm:ss');
                    var final = $.fullCalendar.formatDate(event.final, 'Y-MM-DD HH:mm:ss');
                    var px_1 = event.px_1;
                    var id = event.id;
                    $.ajax({
                        url:"/full-calender/action",
                        type:"POST",
                        data:{
                            px_1: px_1,
                            inicio: inicio,
                            final: final,
                            id: id,
                            type: 'update'
                        },
                        success:function(response)
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Event Updated Successfully");
                        }
                    })
                },
                eventDrop: function(event, delta)
                {
                    var inicio = $.fullCalendar.formatDate(event.inicio, 'Y-MM-DD HH:mm:ss');
                    var final = $.fullCalendar.formatDate(event.final, 'Y-MM-DD HH:mm:ss');
                    var px_1 = event.px_1;
                    var id = event.id;
                    $.ajax({
                        url:"/full-calender/action",
                        type:"POST",
                        data:{
                            px_1: px_1,
                            inicio: inicio,
                            final: final,
                            id: id,
                            type: 'update'
                        },
                        success:function(response)
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Event Updated Successfully");
                        }
                    })
                },
        
                eventClick:function(event)
                {
                    if(confirm("Are you sure you want to remove it?"))
                    {
                        var id = event.id;
                        $.ajax({
                            url:"/full-calender/action",
                            type:"POST",
                            data:{
                                id:id,
                                type:"delete"
                            },
                            success:function(response)
                            {
                                calendar.fullCalendar('refetchEvents');
                                alert("Event Deleted Successfully");
                            }
                        })
                    }
                }
            });
        
        });
          
        </script> --}}
@endsection