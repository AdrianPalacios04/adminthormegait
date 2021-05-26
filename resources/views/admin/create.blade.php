@extends('layouts.panel')

@section('content')
<div class="card shadow" >
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Nueva Usuario </h3>
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
        <form action="{{url('client')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">username</label>
                <input type="text" name="username" class="form-control" value="{{old('username')}}" required>
            </div>
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}" required>
            </div>
            <div class="form-group">
                <label for="email">Apellido</label>
                <input type="text" name="lastname" class="form-control" value="{{old('lastname')}}" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" name="email" class="form-control" value="{{old('email')}}" required>
            </div>
            
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="text" name="password" class="form-control"  required>
            </div>
            <div class="form-group">
                <label for="password">Rol Asignado</label>
                <select class="form-control" data-toggle="select" title="Simple select" name="role" data-placeholder="Select a state" >
                    <option value="admin">Administrador General</option>
                    {{-- <option value="admincarrera">Administrador de Carrera</option> --}}
                    {{-- <option value="admin">Supervisor de Carrera</option> --}}
                    <option value="adminpublicidad">Administrador de Publicidad</option>
                    <option value="acertijero">Acertijero</option>
                    <option value="supacertijero">Supervisor Acertijero</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</div>
@endsection