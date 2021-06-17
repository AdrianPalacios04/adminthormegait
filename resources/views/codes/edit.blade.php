@extends('layouts.panel')
@section('content')
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
                {{-- <div class="col-md-2">
                    <div class="form-group">
                        <label>Cantidad de Ticket</label>
                        <input type="number" min="1" max="1000" name="number" class="form-control" value="1"/>
                    </div>
                </div> --}}
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Código</label>
                      <input type="text" name="codes" class="form-control" value="{{old('codes',$code->codes)}}" readonly>
                    </div>
                </div>
                {{-- <div class="col-md-1">
                    <div class="form-group">
                        <label for=""></label>
                        <div class="custom-control custom-checkbox mb-3">
                        <input class="custom-control-input" id="customCheck1" onChange="comprobar(this);" type="checkbox">
                        <label class="custom-control-label" for="customCheck1">Escribir Código</label>
                      </div>
                    </div>
                </div> --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Fecha Inicio</label>
                        
                      <input type="date" name="f_inicio" class="form-control" value="{{\Carbon\Carbon::parse($code->f_inicio)->format('Y-m-d')}}"/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Fecha Final</label>
                      <input type="date" name="f_final" class="form-control"  value="{{\Carbon\Carbon::parse($code->f_final)->format('Y-m-d')}}"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group" >
                        <label>Tipo Ticket</label>
                        <select class="form-control" name="tipo_ticket">
                            <option value="verde" selected>Verde</option>
                            <option value="amarillo">Amarillos</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Premio</label>
                        <input type="number" min="0" max="1000" name="cantidad" class="form-control" value="{{old('t_nombre',$code->cantidad)}}" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Origen</label>
                        <input type="text" name="origen" class="form-control"  value="{{old('origen',$code->origen)}}"/>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Uso</label>
                        <input type="number" min="0" max="40" name="uso" class="form-control" value="{{old('uso',$code->uso)}}"/>
                    </div>
                </div>
                
            </div>
            <div class="col text-right">
                <button type="submit" class="btn btn-success">Codigos</button>      
            </div>
          
        </form>
    </div>
</div>
<script>
       function comprobar(obj)
{   
    if (obj.checked)
      document.getElementById('boton').readOnly = false;
    else
      document.getElementById('boton').readOnly = true;
      document.getElementById("boton").value = "";
        
}
</script>
@endsection