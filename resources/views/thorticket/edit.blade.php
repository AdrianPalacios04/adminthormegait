@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Editar Medico</h3>
        </div>
        <div class="col text-right">
            <a href="{{url('ticket')}}" class="btn btn-sm btn-default">
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
        <form action="{{url('ticket/'.$thorticket->i_id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="t_nombre" class="form-control" value="{{old('t_nombre',$thorticket->t_nombre)}}" required>
            </div>
            <div class="form-group">
                <label for="name">Pregunta N°1</label>
                <input type="text" name="t_pregunta1" class="form-control" value="{{old('t_pregunta1',$thorticket->t_pregunta1)}}" required>
            </div>
            <div class="form-group">
                <label for="name">Respuesta N°1</label>
                <input type="text" name="t_respuesta1" class="form-control" value="{{old('t_respuesta1',$thorticket->t_respuesta1)}}" required>
            </div>
            <div class="form-group">
                <label for="name">Pregunta N°2</label>
                <input type="text" name="t_pregunta2" class="form-control" value="{{old('t_pregunta2',$thorticket->t_pregunta2)}}" required>
            </div>
            
            <div class="form-group">
                <label for="name">Respuesta N°2</label>
                <input type="text" name="t_respuesta2" class="form-control" value="{{old('t_respuesta2',$thorticket->t_respuesta2)}}" required>
            </div>
            <div class="form-group">
                <label for="name">Pregunta N°3</label>
                <input type="text" name="t_pregunta3" class="form-control" value="{{old('t_pregunta3',$thorticket->t_pregunta3)}}" required>
            </div>
            
            <div class="form-group">
                <label for="name">Respuesta N°3</label>
                <input type="text" name="t_respuesta3" class="form-control" value="{{old('t_respuesta3',$thorticket->t_respuesta3)}}" required>
            </div>
            <div class="form-group">
                <label for="name">Llave N°1 </label>
                <input type="text" name="t_llave1" class="form-control" value="{{old('t_llave1',$thorticket->t_llave1)}}" required>
            </div>
            <div class="form-group">
                <label for="name">Llave N°2 </label>
                <input type="text" name="t_llave2" class="form-control" value="{{old('t_llave2',$thorticket->t_llave2)}}" required>
            </div>
            <div class="form-group">
                <label for="name">Llave N°3 </label>
                <input type="text" name="t_llave3" class="form-control" value="{{old('t_llave3',$thorticket->t_llave3)}}" required>
            </div>
            <div class="form-group">
                <label for="name">Pistas</label>
                <input type="text" name="pistas_Ax" class="form-control" value="{{old('pistas_Ax',$thorticket->pistas_Ax)}}" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</div>
@endsection