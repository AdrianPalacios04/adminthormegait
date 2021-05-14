@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Usuarios Creados</h3>
        </div>
        <div class="col text-right">
            <a href="{{url('client/create')}}" class="btn btn-sm btn-primary">Registro Usuario</a>
        </div>
        </div>
    </div>
    <div class="card-body">
        @if(session('notification'))
        <div class="alert alert-success" role="alert">
            {{session('notification')}}
        </div>
        @endif
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">E-mail</th>
                <th scope="col">Rol</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($client as $clients)
                    
                <tr>
                    <th scope="row">
                        {{$clients->name}}
                    </th>
                    <td>
                        {{$clients->email}}
                    </td>
                    <td>
                        {{$clients->role}}
                    </td>
                    <td>
                        <form action="{{url('/client/'.$clients->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{url('/client/'.$clients->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
                        <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection