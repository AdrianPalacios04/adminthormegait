@extends('layouts.panel')
@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Publicidad</h3>
        </div>
        <div class="col text-right">
            <a href="{{url('publicidad/create')}}" class="btn btn-sm btn-primary">Registro Publidad</a>
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
    <div class="card-deck">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      
    </div>
    {{-- <div class="col-md-6">
        <ul class="nav nav-pills nav-pills-circle mb-3" id="tabs_3" role="tablist">
          <li class="nav-item">
            <a class="nav-link" id="first-tab" data-toggle="tab" href="#link22" role="tab" aria-selected="true">
              <span class="nav-link-icon d-block"><i class="ni ni-atom"></i></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="second-tab" data-toggle="tab" href="#link23" role="tab" aria-selected="false">
              <span class="nav-link-icon d-block"><i class="ni ni-chat-round"></i></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="third-tab" data-toggle="tab" href="#link24" role="tab" aria-selected="false">
              <span class="nav-link-icon d-block"><i class="ni ni-cloud-download-95"></i></span>
            </a>
          </li>
        </ul>
      <div class="card card-plain">
        <div class="tab-content tab-space">
          <div class="tab-pane fade" id="link22">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title1</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
          </div>
          <div class="tab-pane fade" id="link23">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title2</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
          </div>
          <div class="tab-pane fade" id="link24">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title3</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div> --}}
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
@endsection