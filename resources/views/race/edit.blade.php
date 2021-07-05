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
                        <input type="datetime-local"  name="inicio"  class="form-control" value="{{\Carbon\Carbon::parse($race->inicio)->format('Y-m-d\TH:i:s')}}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group" >
                        <label>Fecha Final</label>
                        <input type="datetime-local" name="final" class="form-control" value="{{\Carbon\Carbon::parse($race->final)->format('Y-m-d\TH:i:s')}}"/>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">ID Pregunta</label>
                        <select class="form-control" name="tipo_ticket">
                            @foreach($type as $types)
                            <option value="{{$types->id}}">{{$types->tipo}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Nombre del Acertijos</label>
                      {{-- <input type="text" name="id_ax" class="form-control"value="{{old('id_ax',$race->id_ax)}}" /> --}}
                        <select name="" id="" class="form-control">
                            @foreach ($ticket as $tickets)
                            <option value="{{$tickets->id}}">{{$tickets->t_nombre}}</option>
                            @endforeach
                            
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="row"> 
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Premio N°1</label>
                        <input type="number" class="form-control" name="px_1" id="px_1" value="{{old('px_1',$race->px_1)}}">
                        {{-- oninput="actualizarValorMunicipioInm()" --}}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Premio N°2</label>
                        <input type="number" class="form-control" name="px_2" id="px_2" value="{{old('px_2',$race->px_2)}}">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</div>
{{-- <script>
    function actualizarValorMunicipioInm() {
        let px_1 = document.getElementById("px_1").value;
        //Se actualiza en municipio inm
        document.getElementById("px_2").value = px_1;
    }
</script> --}}

<script>
    function comprobarPremio() {
        clave1 = document.px_1.value
        clave2 = document.
    }
</script>
@endsection
