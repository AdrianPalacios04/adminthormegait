@extends('layouts.panel')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
<div class="card shadow">
  <div class="card-header border-0">
      <div class="row align-items-center">
      <div class="col">
          <h2 class="mb-0">Publicidad</h2>
      </div>
        
          {{-- <a href="{{url('publicidad')}}" class="btn btn-sm btn-primary ">Retroceder</a> --}}

          

        <div class="col text-right">
          <a href="{{url('publicidad/create')}}" class="btn btn-sm btn-primary ">Registro Publicidad</a>
        
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
    <div class="row">
      @foreach ($pubs as $item)
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <center>
            @if ($item->id_posicion == 2)
            <a href="{{asset('imagen/publicidad/'.$item->imagen)}}" data-toggle="lightbox">
              <img src="{{asset('imagen/publicidad/'.$item->imagen)}}" height="150" width="220" class="img-fluid rounded"/></a>
            @else
            <a href="{{asset('imagen/publicidad/'.$item->imagen)}}" data-toggle="lightbox">
            <img src="{{asset('imagen/publicidad/'.$item->imagen)}}" height="150" width="30" class="img-fluid rounded"/></a>
            @endif
            
          </center>
         
          
          <div class="card-body">
            <h2 class="card-title">{{$item->nombre}}</h2>
            <h4 class="card-text">{{$item->link}}</h4>
            <h3>{{$item->f_inicio}}-{{$item->f_final}}</h3>
  
            <a href="#" class="btn btn-primary">Editar</a>
          </div>
        </div>
      </div>
    
      @endforeach
    </div>

   
    {{-- <h1>{{$pubs}}</h1> --}}
  
</div>

{{-- |<div class="table-responsive">
      <table class="table">
          <tr>
            <th>Publicidad</th>
            <th>Con 1</th>
            <th>Con 2</th>
            <th>Con 3</th>
          </tr>
         <tbody>
          @foreach ($pubs as $item)
            <tr>
               <td>{{$marcas->marca->marcas}} 
              </td>
              <td style="width: 100px">
              
                  <a href="{{asset('imagen/publicidad/'.$marcas->imagen)}}" data-toggle="lightbox">
                  <img src="{{asset('imagen/publicidad/'.$marcas->imagen)}}" height="150" width="30" class="img-fluid rounded"/></a>
                
                  <h5>Link: {{$marcas->link}}</h5>  
                  <h5>Fechas: {{ \Carbon\Carbon::parse($marcas->f_inicio)->format('d M, Y')}} - {{ \Carbon\Carbon::parse($marcas->f_final)->format('d M, Y')}}</h5>
                    
                  </td>
            
          
            </tr> 
          @endforeach
        </tbody>
      </table>
    </div> --}}

    <script>
        $(document).on("click", '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
      });
      </script>
    
@endsection