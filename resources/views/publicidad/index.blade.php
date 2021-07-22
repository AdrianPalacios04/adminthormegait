@extends('layouts.panel')
@section('content')

<link rel="stylesheet" href="{{asset('css/style.css')}}">
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h2 class="mb-0">Publicidad</h2>
        </div>
          <div class="col text-right">

             <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal" >Nueva Pagina</button>
             <a href="{{url('publicidad/create')}}" class="btn btn-sm btn-primary ">Registro Publicidad</a>
          </div>
        </div>
    </div>
    {{-- <div class="card-body">
        @if(session('notificacion'))
        <div class="alert alert-success" role="alert">
            {{session('notificacion')}}
        </div>
        @endif
    </div>   --}}
  <div class="row">
    @foreach ($marca as $marcas)
      <div class="col-md-3">
        <a href="{{url('/publicidad/'.$marcas->id.'/view')}}">
          <div class="card mx-sm-1 p-3 mb-3" id="cards">
              <h3>{{$marcas->nom_pagina}}</h3>
              <p>A curated set of ES5/ES6/TypeScript wrappers for plugins to easily add any native functionality to
                  your Ionic apps.</p>
          </div>
        </a>
      </div>
    @endforeach
  </div>
</div>
@include('publicidad.publicidades.pagina')
@endsection
