@extends('layouts.panel')
@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Carreras</h3>
        </div>
        <div class="col text-right">
            <a href="{{url('publicidad/create')}}" class="btn btn-sm btn-primary">Registro Carreras</a>
        </div>
        </div>
    </div>
    <div class="card-body">
        @if(session('notificacion'))
        <div class="alert alert-success" role="alert">
            {{session('notificacion')}}
        </div>
        @endif
    </div>    
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Zona Pertenece</th>
                <th scope="col">Vesión Horizontal</th>
                <th scope="col">Versión Vertical</th>
                <th scope="col">Fecha Inicio</th>
                <th scope="col">Fecha Final</th>
             
                </tr>
            </thead>
            <tbody>
                @foreach ($publicidad as $publicidades)
                <tr>
                    <td >{{$publicidades->nombre}}</td>
                    <td>{{$publicidades->zona}}</td>
                    <td><img src="{{asset('storage/imagen/publicidad/'.$publicidades->horizontal)}}" height="40"></td>
                    <td><img src="{{asset('storage/imagen/publicidad/'.$publicidades->vertical)}}" height="40"></td>
                    <td>{{$publicidades->f_inicio}}</td>
                    <td>{{$publicidades->f_final}}</td>
                    <td>    
                        {{-- @if (auth()->user()->role == 'admin' or auth()->user()->role == 'acertijero') --}}
                        <form action="{{url('/publicidad/'.$publicidades->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            
                            <a href="{{url('/publicidad/'.$publicidades->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
                            <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                            </form>
                        {{-- @endif --}}
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection