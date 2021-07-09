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
        <form action="{{url('race')}}" method="post">
            @csrf
            <div class="row"> 
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>FECHA INICIO</h5>
                        <input type="datetime-local"  name="inicio"  class="form-control">
                    </div>
                    <div class="form-group">
                        <h5>FECHA FINAL</h5>
                        <input type="datetime-local" name="final" class="form-control" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <H5 for="">TIPO TICKET</H5>
                        <select class="form-control" name="id_px">
                            @foreach($type as $types)
                            <option value="{{$types->id}}">{{$types->tipo}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <H5 for="">NOMBRE DEL ACERTIJO</H5>
                        <select name="id_ax" class="form-control">
                            @foreach ($name as $names)
                                <option value="{{$names->i_id}}">{{$names->t_nombre}}</option>
                            @endforeach
                        </select>
                    </div>  
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <H5 for="">PREMIO</H5>
                        <input type="number" class="form-control" name="px_1" id="px_1" step="0"/>
                    </div>
                    <div class="form-group">
                      
                        <H5>CONTROL</H5>
                        <input type="number" class="form-control" name="px_2" id="px_2" >
                    </div>  
                </div>
            </div>
            <button type="submit" class="btn btn-success" id="enviar">Guardar</button>
        </form>
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
