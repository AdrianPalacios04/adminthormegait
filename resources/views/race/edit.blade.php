@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Editar Carrera</h3>
        </div>
        <div class="col text-right">
            <a href="{{url('/race')}}" class="btn btn-sm btn-default">
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
        <form action="{{url('race/'.$race->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row"> 
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Fecha Inicio</label>
                        <input type="date" name="inicio" class="form-control" value="{{\Carbon\Carbon::parse($race->inicio)->isoFormat('MMM Do YYYY')}}">
                        {{-- <input type="datetime-local" step="2" name="inicio" class="form-control" value="{{old('inicio',$race->inicio)}}"> --}}
                    </div>
                </div>
                {{-- <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Hora de Inicio</label>
                      <input type="time"  step="2" name="inicio[]" class="form-control" value=""/>
                    </div>
                </div> --}}
                <div class="col-md-3">
                    <div class="form-group" >
                        <label>Fecha Final</label>
                        <?php //$tempF = explode(' ',$race->final); ?>
                        <input type="text" name="final" class="form-control" value="{{old('final',$race->final)}}"/>

                    </div>
                </div>
                {{-- <div class="col-md-3">
                    <div class="form-group">
                        <label>Hora Final</label>
                        <input type="time" step="2" name="final[]" class="form-control" value="{{old('final[]',$tempF[1])}}"/>
                    </div>
                </div> --}}
            </div>
            <div class="row"> 
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Acertijos</label>
                      <input type="text" name="nombre" class="form-control"value="{{old('id_ax',$race->id_ax)}}" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Pregunta</label>
                      <input type="text" name="zona" class="form-control" value="{{old('id_px',$race->id_px)}}"/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group" >
                        <label>Posición</label>
                        <input type="text" class="form-control" name="" value="{{old('px_1',$race->px_1)}}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Premio N°1</label>
                        <input type="text" class="form-control" name="px_1"  value="{{old('px_1',$race->px_1)}}">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</div>

@endsection
