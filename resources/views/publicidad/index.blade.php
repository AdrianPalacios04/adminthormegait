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
    @foreach ($marca as $marcas)
    
    {{-- https://codepen.io/modelsofidentity/pen/gRaXPg/?html-preprocessor=haml --}}
    {{-- https://bootsnipp.com/snippets/M5VgX --}}
    <div class="py-5">
      <div class="container">
        <div class="row hidden-md-up">
          {{-- <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                <p class="card-text p-y-1">Some quick example text to build on the card title .</p>
                <a href="#" class="card-link">link</a>
                <a href="#" class="card-link">Second link</a>
              </div>
            </div>
          </div> --}}
           {{-- <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                <p class="card-text p-y-1">Some quick example text to build on the card title .</p>
                <a href="#" class="card-link">link</a>
                <a href="#" class="card-link">Second link</a>
              </div>
            </div>
          </div> --}} 
          <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                <p class="card-text p-y-1">Some quick example text to build on the card title .</p>
                <a href="#" class="card-link">link</a>
                <a href="#" class="card-link">Second link</a>
              </div>
            </div>
          </div> 
        </div><br>
         {{-- <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                <p class="card-text p-y-1">Some quick example text to build on the card title .</p>
                <a href="#" class="card-link">link</a>
                <a href="#" class="card-link">Second link</a>
              </div>
            </div>
          </div>
          {{-- <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                <p class="card-text p-y-1">Some quick example text to build on the card title .</p>
                <a href="#" class="card-link">link</a>
                <a href="#" class="card-link">Second link</a>
              </div>
            </div>
          </div> --}}
        </div>
    </div>
        {{-- <div class="col">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div> --}}
      </div>
    {{-- @endforeach --}}

  @endforeach
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
