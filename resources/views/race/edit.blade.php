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
                            @foreach ($type as $tickets)
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
            <button type="submit" class="btn btn-success" id="enviar">Guardar</button>
        </form>

        <div class="row"> 
            <div class="col-md-3">
                <div class="form-group">
                    <label>Hora 1</label>
                    <input type="time" class="form-control" name="h1" id="h1" value="{{$race->inicio}}">
                    {{-- oninput="actualizarValorMunicipioInm()" --}}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>hora 2</label>
                    <input type="time" class="form-control" name="h2" id="h2" >
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>hora total</label>
                    <input type="time" class="form-control" name="tot" id="tot">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
    //variables
    var pass1 = $('#px_1');
    var pass2 = $('#px_2');
    function coincidePassword() {
        var valor1 = pass1.val();
        var valor2 = pass2.val();
        
        //condiciones dentro de la función
        if (valor1 != valor2) {
           
            $("#enviar").prop('disabled', true);
        
        }else if(valor2 != valor1){
            
            $("#enviar").prop('disabled', true);
        }
        if(valor1.length != 0 && valor1 == valor2) {

            Swal.fire('Los datos si coinciden, ya puedes guardar');
            $("#enviar").prop('disabled', false);
        }
    
    }
    //ejecuto la función al soltar la tecla
    pass2.keyup(function() {
        coincidePassword();
    });
    pass1.keyup(function () {
        coincidePassword();
    });
});
</script>
@endsection
