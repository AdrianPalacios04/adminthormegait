@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Editar Acertijo</h3>
        </div>
        <div class="col text-right">
            <a href="{{url('acertijo/')}}" class="btn btn-sm btn-default">
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
        <form action="{{url('acertijo/'.$acertijo->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <div class="form-group">
                    <h5>Pregunta</h5>
                  <input type="text" name="t_pregunta " class="form-control" value="{{old('t_pregunta',$acertijo->pregunta)}}" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <h5 for="">Respuesta</h5>
                  <input type="text" name="t_respuesta" class="form-control" value="{{old('t_respuesta',$acertijo->respuesta)}}" required/>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</div>
@endsection