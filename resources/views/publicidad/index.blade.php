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
<div class="row">
  @foreach ($marca as $marcas)
    <div class="col-md-3">
      <div class="card border-info mx-sm-1 p-3 mb-3">
          <div class="card border-info p-3 my-card" >{{$marcas->nom_pagina}}</div>
        
          <div class="text-info text-center mt-2">   
            <a href="{{url('/publicidad/'.$marcas->id.'/view')}}" class="btn btn-primary">Ver Publicidad</a>
          </div>
      </div>
   </div>
  @endforeach
</div>
    
</div>
@include('publicidad.modal')

@endsection
