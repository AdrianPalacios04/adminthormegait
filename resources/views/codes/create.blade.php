@extends('layouts.panel')
@section('content')
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<div class="card shadow" >
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Nuevo Código </h3>
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
            <div class="row"> 
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Cant. Ticket</label>
                        <input type="number" min="1" max="1000" id="number" name="number" class="form-control" value="1" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Código</label>
                      <input type="text" name="codes" class="form-control" maxlength="50" id="codes" readonly>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label for=""></label>
                        <div class="custom-control custom-checkbox mb-3">
                        <input class="custom-control-input" id="customCheck1" onChange="comprobar(this);" type="checkbox">
                        <label class="custom-control-label" for="customCheck1">Escribir Código</label>
                      </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Fecha Inicio</label>
                            <?php
                            // Obteniendo la fecha actual del sistema con PHP
                            $fechaActual = date('Y-m-d');
                            ?>
                        {{-- value="{{ date('Y-m-d\TH:i:s')}} --}}
                      <input type="date" name="f_inicio" class="form-control" value="<?php  echo $fechaActual;?>" />
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Fecha Final</label>
                      <input type="date" name="f_final" class="form-control" value="<?php  echo $fechaActual;?>" min="<?php  echo $fechaActual;?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group" >
                        <label>Tipo Ticket</label>
                        <select class="form-control" name="tipo_ticket">
                            @foreach($type as $types)
                            <option value="{{$types->id}}">{{$types->tipo}}</option>
                            @endforeach
                        </select>
                       
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Premio</label>
                        <input type="number" min="0" max="1000" name="cantidad" class="form-control" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Origen</label>
                        <input type="text" name="origen" class="form-control"  />
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Uso</label>
                        <input type="number" min="0" max="40" name="uso" class="form-control" />
                    </div>
                </div>
                
            </div>
            <div class="col text-right">
                <button type="submit" class="btn btn-success">Codigos</button>      
            </div>
          
        </form>
    </div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var maxLength = 50;
    $('#codes').keyup(function() {
        var textlen = maxLength - $(this).val().length;
        $('#rchars').text(textlen);
        if (textlen == 0) {
            Swal.fire({
            icon: 'error',
            text: 'Límite de caracteres alcanzado',
            })
        }
    });
</script>   
<script>
function comprobar(obj){   
    if (obj.checked){
    document.getElementById('codes').readOnly = false;
    document.getElementById('number').readOnly = true;
    document.getElementById("number").value = "1";

    }else{

    document.getElementById('codes').readOnly = true;
    document.getElementById("codes").value = "";
    document.getElementById('number').readOnly = false;
    document.getElementById("number").value = "";
    
    }
}
</script>


@endsection