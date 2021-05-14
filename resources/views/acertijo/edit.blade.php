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
            <div class="form-group">
                <h4 for="pregunta">Pregunta</h4>
                <input type="text" name="pregunta" class="form-control" value="{{old('t_pregunta',$acertijo->t_pregunta)}}" required style="width:100%"> 
            </div>
            <div class="form-group">
                <h4 for="respuesta">Respuesta </h4>
                <input type="text" name="respuesta" class="form-control" value="{{old('t_respuesta',$acertijo->t_respuesta)}}" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</div>
@endsection