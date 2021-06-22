@extends('layouts.panel')
@section('content')
<div class="card shadow" >
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0" >Nueva Publicidad </h3>
        </div>
        <div class="col text-right">
            <a href="{{url('publicidad')}}" class="btn btn-sm btn-default">
            Cancelar y Volver</a>
        </div>
        </div>
    </div>
    <div class="card-body">
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach                
                </ul>
            </div>
        @endif
        <form action="{{url('publicidad')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="file" class="" name="imagen">
                  </div>
                </div>
            </div>
            <div class="row"> 
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Nombre Publicidad</label>
                      <input type="text" name="nombre" class="form-control" placeholder="" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        {{-- <label for="">Zona Pertenece (<em><small>Página Pertenece</small></em>)</label>
                         --}}
                         <label for="">Link</label>
                      <input type="text" name="link" class="form-control" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group" >
                        <label>Posición</label>
                        <select class="form-control" name="posicion">
                            <option value="horizontal" selected>Horizontal</option>
                            <option value="vertical">Vertical</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Opcion</label>
                        <select class="form-control" name="opciones">
                            <option value="permanente" selected>Permanente</option>
                            <option value="rotatorio">Rotatorio</option>
                        </select>                    
                    </div>
                </div>
            </div>
            <div class="row" style="font-weight: bolder;">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Fecha Inicio</label>
                    <input type="date" class="form-control" name="f_inicio" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Fecha Final</label>
                    <input type="date" class="form-control" name="f_final" required>
                  </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Marcas</label>
                      <select name="marcas" class="form-control">
                        @foreach ($marca as $marcas)
                          <option value="{{$marcas->id}}">{{$marcas->marcas}}</option>
                          @endforeach
                      </select>
                    </div>
                </div>
            </div>
             <div class="col text-right">
                <button type="submit" class="btn btn-default">Guardar</button>
            </div>
        </form>
    </div>
</div>
<script src="{{asset('js/ocultar.js')}}"></script>
@endsection
