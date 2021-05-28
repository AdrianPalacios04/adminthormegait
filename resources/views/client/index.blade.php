@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row justify-content-end">
            <div class="col">
                <h3 class="mb-0">Clientes Creados</h3>
            </div>
            <div class="col text-right">
                {{-- <a href="{{url('client/create')}}" class="btn btn-sm btn-primary">Registro Usuario</a> --}}
                <div class="row justify-content-end ">
                    <div class="col-md-6">
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                            </div>
                            <input class="form-control" placeholder="Search" type="text">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="card-body"> --}}
        @if(session('notificacion'))
        <div class="alert alert-success" role="alert">
            {{session('notificacion')}}
        </div>
        @endif
    {{-- </div> --}}
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
               <th></th>
                <th scope="col">Usuario</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Nombre </th>
                <th scope="col">DNI</th>

                <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($client as $clients)
                <tr>
                    <th scope="row">
                        <button type="button" class="btn btn-sm" data-toggle="modal" 
                            data-target="#exampleModal{{$clients->i_idusuario}}" >
                            <i class="fa fa-search-plus" aria-hidden="true"></i></button>
                    </th>
                    <th scope="row">
                        {{$clients->t_username}}
                    </th>
                    <td>
                        {{$clients->persona->t_apellidoper}}
                    </td>
                    <td>
                        {{$clients->persona->t_nombreper}}
                    </td>
                    <td>
                        {{$clients->persona->c_dniper}}
                    </td>
                    
                    <td>
                        <form action="{{url('/users/'.$clients->i_idusuario)}}" method="post">
                        @csrf
                        {{-- @method('DELETE') --}}
                        <a href="{{url('/users/'.$clients->i_idusuario.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
                        {{-- <button class="btn btn-sm btn-danger" type="submit">Eliminar</button> --}}
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $client->links() }}
        @include('client.modal')
    </div>
</div>
@endsection