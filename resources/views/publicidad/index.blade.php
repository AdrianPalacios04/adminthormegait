@extends('layouts.panel')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Publicidad</h3>
        </div>
        <div class="col text-right">
            <a href="{{url('publicidad/create')}}" class="btn btn-sm btn-primary ">Registro Publidad</a>
             <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Nueva Marca</button>
        </div>
       
        </div>
    </div>
    <div class="card-body">
        @if(session('notificacion'))
        <div class="alert alert-success" role="alert">
            {{session('notificacion')}}
        </div>
        @endif
    </div>  
    @foreach ($publicidad as $publi)
    
    <div class="container">   
      <div class="card-group mt-3">
  
        <div class="card text-center border-info">
          <div class="card-body">
            <h4 class="card-title">Titulo de la tarjeta 1</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lectus sem, 
                                  tempor vitae mattis malesuada, ornare sed erat. Pellentesque nulla dui, congue
                                  nec tortor sit amet, maximus mattis dui. </p>
            <a href="#" class="btn btn-primary">Entrar</a>
          </div>
        </div>         
    </div> 
    
    
    @endforeach
  </div>  
    {{-- <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Zona Pertenece</th>
                <th scope="col">Vesión Horizontal</th>
                <th scope="col">Versión Vertical</th>
                <th scope="col">Fecha Inicio</th>
                <th scope="col">Fecha Final</th>
             
                </tr>
            </thead>
            <tbody>
                @foreach ($publicidad as $publicidades)
                <tr>
                    <td >{{$publicidades->nombre}}</td>
                    <td>{{$publicidades->zona}}</td>
                    <td><img src="{{asset('imagen/publicidad/'.$publicidades->horizontal)}}" height="200"></td>
                    <td><img src="{{asset('imagen/publicidad/'.$publicidades->vertical)}}"></td>
                    <td>{{$publicidades->f_inicio}}</td>
                    <td>{{$publicidades->f_final}}</td>
                    <td>    
                        @if (auth()->user()->role == 'admin' or auth()->user()->role == 'acertijero')
                        <form action="{{url('/publicidad/'.$publicidades->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            
                            <a href="{{url('/publicidad/'.$publicidades->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
                            <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                            </form>
                        @endif --}}
                    {{-- </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div> --}}
</div>
@include('publicidad.modal')
<script>
  $(document).on("click", '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});
</script>
@endsection
