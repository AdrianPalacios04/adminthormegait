@extends('layouts.panel')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Códigos Promoción</h3>
        </div>
        <div class="col text-right">
           {{-- <button class="btn btn-sm btn-primary" id="addCode">Nuevo Codigo</button> --}}
           <a href="{{url('codes/create')}}" class="btn btn-sm btn-primary">Nuevo Código</a>
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
                    <th scope="col">N°</th>
                    <th scope="col">Coódigos</th>
                    <th scope="col">Fecha Inicio</th>
                    <th scope="col">Fecha Final</th>
                    <th scope="col">Tipo Ticket</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Origen</th>
                    <th scope="col">Uso</th>
                    {{-- <th scope="col">Acciones</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($code as $codes)
                        
                    <tr>
                        <th scope="row">
                            {{$codes->id}}
                        </th>
                        <td>
                            {{$codes->codes}}
                        </td>
                        <td>
                            {{ \Carbon\Carbon::parse($codes->f_inicio)->format('d/m/Y')}}
                        </td>
                        <td>
                            {{ \Carbon\Carbon::parse($codes->f_final)->format('d/m/Y')}}
                        </td>
                        <td>
                            {{$codes->tipo_ticket}}
                        </td>
                        <td>
                            {{$codes->cantidad}}
                        </td>
                        <td>
                            {{$codes->origen}}
                        </td>
                        <td>
                            {{$codes->uso}}
                        </td>
                        {{-- <td>
                            <form action="{{url('/code/'.$codes->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{url('/code/'.$codes->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
                            <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td> --}}
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
    $('#usuarios').DataTable({
        responsive:true,
        autoWidth:false,
        "ordering":false,
       

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
<script>
    
$('body').on('click','#addCode',function(event) {
        var codes =  $(this).data('codes');
    $.ajax({
        type:"POST",
        
        url:"{{url('codes')}}",
        data:{
            "_token": "{{ csrf_token() }}", // toquen para el metodo POST
            'codes':codes // variable que se necesita 
        },
        success:function(res){
            window.location.reload(); //refrescar la página
        }
    })
})

// https://laratutorials.com/laravel-8-ajax-crud-tutorial/
</script>
@endsection