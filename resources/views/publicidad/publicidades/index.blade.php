@extends('layouts.panel')
@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
<style>
  #buton{
  display: block;
  width: 55px;
  height: 55px;
  border-radius: 50%;
  }

</style>
<div class="card" style="display: flex">
  <div class="card-header border-0">
      <div class="row align-items-center">
      <div class="col">
            <a href="{{url('/publicidad')}}" class="btn btn-sm btn-danger">Regresar</a>
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
        <div class="card  border-0">
          <div class="row no-gutters">
         
              @if ($item->id_posicion == 2)
              <a href="{{asset('imagen/publicidad/'.$item->imagen)}}" data-toggle="lightbox">
                <img src="{{asset('imagen/publicidad/'.$item->imagen)}}" width="400" class="img-fluid rounded"/></a>
              @else
              <a href="{{asset('imagen/publicidad/'.$item->imagen)}}" data-toggle="lightbox">
              <img src="{{asset('imagen/publicidad/'.$item->imagen)}}" width="90" class="img-fluid rounded"/></a>
              @endif
            <div class="card-body" style="float: left;">
              <p><b>Usuario: </b><span >{{$item->nombre}}</span></p>
              <p><b>Link: </b><span >{{$item->link}}</span></p>
              <p><b>Pagina:</b><span >{{$item->pagina->nom_pagina}}</span></p>
              <p><b>Fecha Inicio: </b><span >{{\Carbon\Carbon::parse($item->f_inicio)->format('d M, Y')}}</span></p>
              <p><b>Fecha Final: </b><span >{{\Carbon\Carbon::parse($item->f_final)->format('d M, Y')}}</span></p>
              {{-- <h5>Link:</h5><p style="line-height: 10px" class="card-text">{{$item->link}}</p> --}}

                <div class="col text-right" style="display: inline-block" >
                  <form action="{{url('/publicidad/'.$item->id)}}" method="post" class="archiveItem">
                    @csrf
                    @method('DELETE')
                    <a href="{{url('/publicidad/'.$item->id.'/edit')}}" class="btn  btn-primary" ><i class="fas fa-edit"></i></a> 
                    {{-- <button>e</button> --}}
                    {{-- <button type="submit" class="btn btn-danger" id="buton"><i class="far fa-trash-alt"></i></button> --}}
                    <a type="submit" class="btn btn-danger" onclick="archiveRemove(this)"  id="{{$item->id}}" style="color:white" ><i class="far fa-trash-alt"></i></a>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
</div>

    <script>
        $(document).on("click", '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
      });
      </script>

      {{-- ///////// --}}
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
      </script>
    
@endsection