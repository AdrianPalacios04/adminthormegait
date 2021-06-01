@extends('layouts.panel')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
</head>
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Carreras</h3>
        </div>
        <div class="col text-right">
            <a href="{{url('race/create')}}" class="btn btn-sm btn-primary">Registro Carreras</a>
        </div>
        </div>
    </div>
        {{-- <div class=" col text-right col-2">
            <input type="date" name="day" class="form-control" value="{{old('name')}}" required>
        </div> --}}
        <div class="card-body">
            <div class="container" >
                <div id='full_calendar_events'></div>
            </div>
        </div>

        
    {{-- <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead>
                <tr>
                <th scope="col">inicio</th>
                <th scope="col">final</th>
                <th scope="col">id acertijo</th>
                <th scope="col">id premio</th>
                <th scope="col">cantidad premio 1</th>
                <th scope="col">cantidad premio 2</th>
                <th scope="col">Estado</th>
             
                </tr>
            </thead>
            <tbody>
                @foreach ($race as $races)
                    
                <tr>
                    <th scope="row">
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
                        <form action="{{url('/client/'.$races->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{url('/client/'.$races->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
                        <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
</div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function () {

            var SITEURL = "{{ url('/') }}";

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var calendar = $('#full_calendar_events').fullCalendar({
                editable: true,
                editable: true,
                events: SITEURL + "/race",
                displayEventTime: true,
                eventRender: function (event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = true;
                    }
                },
                selectable: true,
                selectHelper: true,
                select: function (inicio, final, allDay) {
                    var name = prompt('Event Name:');
                    if (name) {
                        var inicio = $.fullCalendar.formatDate(inicio, "Y-MM-DD HH:mm:ss");
                        var final = $.fullCalendar.formatDate(final, "Y-MM-DD HH:mm:ss");
                        $.ajax({
                            url: SITEURL + "/calendar-crud-ajax",
                            data: {
                                name: name,
                                inicio: inicio,
                                final: final,
                                type: 'create'
                            },
                            type: "POST",
                            success: function (data) {
                                displayMessage("evento creado.");

                                calendar.fullCalendar('renderEvent', {
                                    id: data.id,
                                    inicio:inicio,
                                    final:final,
                                    allDay: allDay
                                }, true);
                                calendar.fullCalendar('unselect');
                            }
                        });
                    }
                },
                eventDrop: function (event, delta) {
                    var inicio = $.fullCalendar.formatDate(event.inicio, "Y-MM-DD");
                    var final = $.fullCalendar.formatDate(event.final, "Y-MM-DD");

                    $.ajax({
                        url: SITEURL + '/calendar-crud-ajax',
                        data: {
                            // title: event.name,
                            inicio: inicio,
                            final: final,
                            id: event.id,
                            type: 'edit'
                        },
                        type: "POST",
                        success: function (response) {
                            displayMessage("Event updated");
                        }
                    });
                },
                eventClick: function (event) {
                    var eventDelete = confirm("Are you sure?");
                    if (eventDelete) {
                        $.ajax({
                            type: "POST",
                            url: SITEURL + '/calendar-crud-ajax',
                            data: {
                                id: event.id,
                                type: 'delete'
                            },
                            success: function (response) {
                                calendar.fullCalendar('removeEvents', event.id);
                                displayMessage("Event removed");
                            }
                        });
                    }
                }
            });
        });

        function displayMessage(message) {
            toastr.success(message, 'Event');            
        }
        

</script>
@endsection