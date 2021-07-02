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
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>TEXTO ACERTIJO</h5>
                      <textarea name="t_pregunta" rows="10" cols="30" class="form-control"> </textarea>
                    </div>
                    <div class="form-group">
                        <h5>RESPUESTA <em>(Poner en mayúscula y sin signos)</em></h5>
                      <input type="text" name="t_pregunta" class="form-control" value="{{old('t_pregunta',$acertijo->t_respuesta)}}" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5 for="">SECUENCIA DE PISTAS</h5>
                      <input type="text" name="t_pista" class="form-control" value="{{old('t_pista',$acertijo->t_pista)}}" />
                    </div>
                    <div class="form-group">
                        <h5 for="">LLAVE N°1 <em>(Poner en mayúscula y sin signos)</em></h5>
                        <input type="text" name="t_kword1" class="form-control" onkeypress="javascript: return ValidarNumero(event,this)" value="{{old('t_kword1',$acertijo->t_kword1)}}" />
                    </div>
                    <div class="form-group">
                        <h5 for="">LLAVE N°2 <em>(Poner en mayúscula y sin signos)</em></h5>
                        <input type="text" name="t_kword2" class="form-control" onkeypress="javascript: return ValidarNumero(event,this)" value="{{old('t_kword2',$acertijo->t_kword2)}}" />
                    </div>
                    <div class="form-group">
                        <h5 for="">LLAVE N°3 <em>(Poner en mayúscula y sin signos)</em></h5>
                      <input type="text" name="t_kword3" class="form-control" onkeypress="javascript: return ValidarNumero(event,this)"  value="{{old('t_kword3',$acertijo->t_kword3)}}" />
                    </div>   
                </div>
            </div>
            <div class="col text-right">
                <button type="submit" class="btn btn-default">Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection