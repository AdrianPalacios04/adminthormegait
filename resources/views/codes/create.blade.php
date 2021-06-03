@extends('layouts.panel')

@section('content')
<div class="card shadow" >
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Nueva Usuario </h3>
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
            <button type="submit" class="btn btn-success">Codigos</button>
        </form>
    </div>
</div>
@endsection