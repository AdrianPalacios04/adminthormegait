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
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card" style="background-color: white">
          <a href="{{asset('imagen/publicidad/'.$publi->imagen)}}" data-toggle="lightbox"></a>
            {{-- lightbox para hacer zoom en las imagenes --}}
          <img src="{{asset('imagen/publicidad/'.$publi->imagen)}}" height="150" width="50" class="img-fluid rounded" />
          <div class="card-body">
            <h5 class="card-title">{{$publi->nombre}}</h5>
            <h5>Link: {{$publi->link}} </h5>

            <h5>Fecha: {{\Carbon\Carbon::parse($publi->f_inicio)->format('d/m/Y') }} a {{\Carbon\Carbon::parse($publi->f_final)->format('d/m/Y')}}</h5>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" 
              data-id="{{ $publi->id }}"  {{ $publi->opciones == 'rotatorio' ? 'checked' : ''}}/>
              <h5 class="form-check-label" for="inlineRadio1">ROT</h5>
            </div>
            
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions"  id="inlineRadio2" 
              data-id="{{ $publi->id }}"  {{ $publi->opciones == 'permanente' ? 'checked' : ''}}
              />
              <h5 class="form-check-label" for="inlineRadio2">PER</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="background-color: white">
          <img
            src="https://mdbootstrap.com/img/new/standard/city/042.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            asdasd
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" >
          <img
            src="https://mdbootstrap.com/img/new/standard/city/043.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              This is a longer card with supporting text below as a natural lead-in to
              additional content. This content is a little bit longer.
            </p>
          </div>
        </div>
      </div>
     <div class="col">
        <div class="card">
          <img
            src="https://mdbootstrap.com/img/new/standard/city/044.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              This is a longer card with supporting text below as a natural lead-in to
              additional content. This content is a little bit longer.
            </p>
          </div>
        </div>
      </div>
      {{-- <div class="col">
        <div class="card">
          <img
            src="https://mdbootstrap.com/img/new/standard/city/044.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              This is a longer card with supporting text below as a natural lead-in to
              additional content. This content is a little bit longer.
            </p>
          </div>
        </div>
      </div> --}}
      {{-- <div class="col">
        <div class="card">
          <img
            src="https://mdbootstrap.com/img/new/standard/city/044.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              This is a longer card with supporting text below as a natural lead-in to
              additional content. This content is a little bit longer.
            </p>
          </div>
        </div>
      </div> --}}
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
<script>
  $(document).on("click", '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});
</script>
@endsection
