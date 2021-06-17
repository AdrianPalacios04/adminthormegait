@extends('layouts.panel')

@section('content')
<div class="card shadow" >
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Nuevo Código </h3>
        </div>
        <div class="col text-right">
            <a href="{{url('codes')}}" class="btn btn-sm btn-default">
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
        <form action="{{url('codes')}}" method="post">
            @csrf
            <div class="row"> 
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Cantidad de Ticket</label>
                        <input type="number" min="0" max="1000" name="number" class="form-control" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Código</label>
                      <input type="text" name="codes" class="form-control" value="{{App\Http\Controllers\CodeController::generateRandomString(6)}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Fecha Inicio</label>
                      <input type="date" name="f_inicio" class="form-control" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Fecha Final</label>
                      <input type="date" name="f_final" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group" >
                        <label>Tipo Ticket</label>
                        <select class="form-control" name="tipo_ticket">
                            <option value="verde" selected>Verde</option>
                            <option value="amarillo">Amarillos</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Premio</label>
                        <input type="number" min="0" max="1000" name="cantidad" class="form-control" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Origen</label>
                        <input type="text" name="origen" class="form-control" />
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Uso</label>
                        <input type="number" min="0" max="40" name="uso" class="form-control" />
                    </div>
                </div>
                
            </div>
            <div class="col text-right">
                <button type="submit" class="btn btn-success">Codigos</button>      
            </div>
          
        </form>
    </div>
</div>
@endsection