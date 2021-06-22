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
            <table class="table table-striped" id="usuarios 
            ">
                <thead>
                    <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Codigos</th>
                    <th scope="col">Fecha Inicio</th>
                    <th scope="col">Fecha Final</th>
                    <th scope="col">Tipo Ticket</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Origen</th>
                    <th scope="col">Uso</th>
                    {{-- <th scope="col">Acciones</th> --}}
                    <th></th>
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
                            {{ \Carbon\Carbon::parse($codes->f_inicio)->format('d M, Y')}}
                        </td>
                        <td>
                            {{ \Carbon\Carbon::parse($codes->f_final)->format('d/m/Y')}}
                        </td>
                        <td>
                            {{$codes->premio->tipo}}
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
                        <td>
                            <form action="{{url('/codes/'.$codes->id)}}" method="post" class="archiveItem">
                            @csrf
                            @method('DELETE')
                            <a href="{{url('/codes/'.$codes->id.'/edit')}}" class="btn btn-sm btn-primary"><i class="far fa-edit"></i></a>
                            <a  class="btn btn-sm btn-danger" type="submit" onclick="archiveRemove(this)"  id="{{$codes->id}}" 
                                style="color: white"><i class="far fa-trash-alt"></i></a> 
                            {{-- <button class="btn btn-sm btn-primary" id="submitForm">Eliminar</button> --}}
                            </form>  
                        </td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
            {{-- <div class="d-flex justify-content-center">
                {{ $code->links() }}
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
    //$('a[id="' + id + '"]').parents(".archiveItem").submit();
//     $('#submitForm').on('click',function(e){
//         e.preventDefault();
        

//         Swal.fire({
//             title: 'Are you sure?',
//             text: "You won't be able to revert this!",
//             icon: 'warning',
//             showCancelButton: true,
//             confirmButtonColor: '#3085d6',
//             cancelButtonColor: '#d33',
//             confirmButtonText: 'Yes, delete it!'
//         }).then((result) => {
//             if (result.value) {

//                 form.submit();
//         });
//     });
</script>
{{-- https://stackoverflow.com/questions/55361062/delete-confirmation-with-sweet-alert-2/55361312 --}}
{{-- <script>
    
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
</script> --}}
@endsection