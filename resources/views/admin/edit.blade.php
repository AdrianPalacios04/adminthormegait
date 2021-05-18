@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Editar Medico</h3>
        </div>
        <div class="col text-right">
            <a href="{{url('client')}}" class="btn btn-sm btn-default">
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
        <form action="{{url('client/'.$client->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre de Usuario</label>
                <input type="text" name="username" class="form-control" value="{{old('username',$client->username)}}" required>
            </div>
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{old('name',$client->name)}}" required>
            </div>
            
            <div class="form-group">
                <label for="name">Apellido</label>
                <input type="text" name="lastname" class="form-control" value="{{old('lastname',$client->lastname)}}" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" name="email" class="form-control" value="{{old('email',$client->email)}}" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña <em>Ingrese un nuevo valor solo si quiere cambiar</em> </label>
                <input type="text" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</div>
@endsection