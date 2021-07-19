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
          {{-- <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Nueva Marca</button> --}}
            <a href="{{url('publicidad/create')}}" class="btn btn-sm btn-primary ">Registro Publidad</a>
             
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
  
    
    {{-- https://codepen.io/modelsofidentity/pen/gRaXPg/?html-preprocessor=haml --}}
    {{-- https://bootsnipp.com/snippets/M5VgX --}}
    <div class="table-responsive">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>  </th>
            <th>Publicidad</th>
            <th>Con 1</th>
            <th>Con 2</th>
            <th>Con 3</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($marca as $marcas)
            <tr>
              <td>{{$marcas->marca->marcas}}
              </td>
              <td>
                <div>
                  <a href="{{asset('imagen/publicidad/'.$marcas->imagen)}}" data-toggle="lightbox">
                  <img src="{{asset('imagen/publicidad/'.$marcas->imagen)}}" height="150" width="30" class="img-fluid rounded"/></a>
                </div><br>
                  <h5>Link: {{$marcas->link}}</h5>  
                  <h5>Fechas: {{ \Carbon\Carbon::parse($marcas->f_inicio)->format('d M, Y')}} - {{ \Carbon\Carbon::parse($marcas->f_final)->format('d M, Y')}}</h5>
                
              </td>
              <td>{{$marcas->f_inicio}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
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
