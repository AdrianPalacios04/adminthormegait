@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Carreras</h3>
        </div>
        <div class="col text-right">
            <a href="{{url('race/create')}}" class="btn btn-sm btn-primary">Registro Carreras</a>
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
    
        <div class=" col text-right col-2">
            <input type="date" name="day" class="form-control" value="{{old('name')}}" required>
        </div>
    
    
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                <th scope="col">Race</th>
                <th scope="col">Status</th>
                <th scope="col">Time Start</th>
                <th scope="col">Time Final</th>
                <th scope="col">Premio</th>
                <th scope="col">cantidad</th>
             
                </tr>
            </thead>
            <tbody>
                @foreach ($race as $races)
                    
                <tr>
                    <th scope="row">
                        {{$races->name}}
                    </th>
                    <td>
                        {{$races->status}}
                    </td>
                    <td>
                        {{$races->time_start}}
                    </td>
                    <td>
                        {{$races->time_final}}
                    </td>
                    <td>
                        {{$races->premio}}
                    </td>
                    <td>
                        {{$races->cantidad}}
                    </td>
                    <td>
                        <form action="{{url('/client/'.$races->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{url('/client/'.$races->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
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