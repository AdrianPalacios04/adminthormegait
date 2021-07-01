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
        <form action="{{url('reclamo')}}" method="post">
            @csrf
            
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>ACERTIJO</h5>
                      <input type="text" name="email" class="form-control" value="{{($reclamo->email)}}" required/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5 for="">RESPUESTA</h5>
                      <input type="text" name="respuesta" class="form-control"/>
                    </div>
                </div>
            </div>
            <div class="col text-right">
                <button type="submit" class="btn btn-default">Enviar</button>
            </div>
        </form>
        
    </div>
    
</div>
    
@endsection