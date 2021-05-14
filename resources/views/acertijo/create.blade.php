@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Nuevos acertijos</h3>
        </div>
        <div class="col text-right">
            <a href="{{url('acertijo')}}" class="btn btn-sm btn-default">
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
        <form action="{{url('acertijo')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Acertijo</label>
                <input type="text" name="pregunta" class="form-control"  required>
            </div>
            <div class="form-group">
                <label for="">Repuesta</label>
                <input type="text" name="respuesta" class="form-control" required>
            </div>
            {{-- <div class="custom-control custom-checkbox mb-1">
                <input class="custom-control-input" id="customCheck1" type="checkbox" name="i_uso" value="1">
                <label class="custom-control-label" for="customCheck1">USO</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
                <input class="custom-control-input" id="customCheck2" type="checkbox" name="b_estado" value="1">
                <label class="custom-control-label" for="customCheck2">ESTADO</label>
            </div> --}}
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</div>
@endsection