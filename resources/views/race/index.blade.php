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
            <thead class="thead-light">
                <tr>
                <th scope="col">Race</th>
                <th scope="col">Status</th>
                <th scope="col">Time Start</th>
                <th scope="col">Time Final</th>
                <th scope="col">Premio</th>
                <th scope="col">cantidad</th>
             
                </tr>
            </thead>
            <tbody>
                @foreach ($race as $races)
                    
                <tr>
                    <th scope="row">
                        {{$races->name}}
                    </th>
                    <td>
                        {{$races->status}}
                    </td>
                    <td>
                        {{$races->time_start}}
                    </td>
                    <td>
                        {{$races->time_final}}
                    </td>
                    <td>
                        {{$races->premio}}
                    </td>
                    <td>
                        {{$races->cantidad}}
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
                select: function (start, end, allDay) {
                    var name = prompt('Event Name:');
                    if (name) {
                        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                        $.ajax({
                            url: SITEURL + "/calendar-crud-ajax",
                            data: {
                                name: name,
                                start: start,
                                end: end,
                                type: 'create'
                            },
                            type: "POST",
                            success: function (data) {
                                displayMessage("evento creado   .");

                                calendar.fullCalendar('renderEvent', {
                                    id: data.id,
                                    title:name,
                                    start:start,
                                    end:end,
                                    allDay: allDay
                                }, true);
                                calendar.fullCalendar('unselect');
                            }
                        });
                    }
                },
                eventDrop: function (event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

                    $.ajax({
                        url: SITEURL + '/calendar-crud-ajax',
                        data: {
                            title: event.name,
                            start: start,
                            end: end,
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