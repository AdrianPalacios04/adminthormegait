@extends('layouts.panel')
@section('content')
<div class="card shadow" >
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Nueva Usuario </h3>
        </div>
        <div class="col text-right">
            <a href="{{url('cash')}}" class="btn btn-sm btn-default">
            Cancelar y Volver</a>
        </div>
        </div>
    </div>
    <div class="card-body">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
        @endif
        <form action="{{url('cash')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <h5>NOMBRE</h5>
                      <input type="text" name="t_nombre" class="form-control" value="{{old('t_nombre')}}" onkeyup="mayus(this)" required/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <h5 for="">SECUENCIA DE PISTAS</h5>
                      <input type="text" name="pistas_Ax" class="form-control" value="{{old('pistas_Ax')}}" />
                    </div>
                </div>
            </div>
            <div class="row"> 
                <div class="col-md-4">
                    <div class="form-group">
                        <h5 for="">PREGUNTA N°1</h5>
                      {{-- <input type="text" name="t_pregunta1" class="form-control"  value="{{old('t_pregunta1')}}" /> --}}
                      <textarea name="t_pregunta1" id="" class="form-control" rows="10"></textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group" >
                        <h5>PREGUNTA N°2</h5>
                        {{-- <input type="text" name="t_respuesta1" class="form-control" value="{{old('t_respuesta1')}}" > --}}
                        <textarea name="t_pregunta2" id="" class="form-control" rows="10"></textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group" >
                        <h5>PREGUNTA N°3</h5>
                        {{-- <input type="text" name="t_respuesta1" class="form-control" value="{{old('t_respuesta1')}}" > --}}
                        <textarea name="t_pregunta3" id="" class="form-control" rows="10"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <h5 for="">RESPUESTA N°1 <em>(Poner en mayúscula y sin signos)</em></h5>
                      <input type="text" name="t_respuesta1" class="form-control" value="{{old('t_pregunta2')}}" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5 for="">RESPUESTA N°2 <em>(Poner en mayúscula y sin signos)</em></h5>
                      <input type="text" name="t_respuesta2" class="form-control"  value="{{old('t_respuesta2')}}" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5 for="">RESPUESTA N°3 <em>(Poner en mayúscula y sin signos)</em> </h5>
                      <input type="text" name="t_respuesta3" class="form-control" value="{{old('t_pregunta3')}}" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <h5 for="">LLAVE N°1 <em>(Poner en mayúscula y sin signos)</em></h5>
                      <input type="text" name="t_llave1" class="form-control" value="{{old('t_pregunta2')}}" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5 for="">LLAVE N°2 <em>(Poner en mayúscula y sin signos)</em></h5>
                      <input type="text" name="t_llave2" class="form-control"  value="{{old('t_respuesta2')}}"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h5 for="">LLAVE N°3 <em>(Poner en mayúscula y sin signos)</em> </h5>
                      <input type="text" name="t_llave3" class="form-control" value="{{old('t_pregunta3')}}"/>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</div>

<script>
    function mayus(e) {
        e.value = e.value.toUpperCase();
    }
</script>
@endsection
