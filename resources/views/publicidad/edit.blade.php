@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Editar Publicidad</h3>
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
        <form action="{{url('publicidad/'.$publicidad->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="{{old('name',$publicidad->nombre)}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="">Zona Pertenece (<em><small>Pagina Pertenece</small></em>)</label>
                    <input type="text" name="zona" class="form-control" value="{{old('zona',$publicidad->zona)}}"/>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Versión Horizontal</label>
                        <input type="file" class="form-control" name="horizontal"  value="{{$publicidad->horizontal}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Versión Vertical</label>
                        <input type="file" class="form-control" name="vertical"  value="{{$publicidad->vertical}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Fecha Inicio</label>
                    <input type="date" class="form-control" name="f_inicio" value="{{old('f_inicio',$publicidad->f_inicio)}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Fecha Final</label>
                    <input type="date" class="form-control" name="f_final" value="{{old('f_final',$publicidad->f_final)}}">
                  </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</div>
@endsection