@extends('layouts.panel')
@section('content')
<div class="card shadow" >
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0" >Nueva Publicidad </h3>
        </div>
        <div class="col text-right">
            <a href="{{URL::previous()}}" class="btn btn-sm btn-default">
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
        <form action="{{url('publicidad')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group" >
                        <h5 class="form-label" for="customFile">Imagen Publicitaria</h5>
                        <input type="file" name="imagen" />
                       
                    </div>
                </div>
            </div>
            <div class="row"> 
                <div class="col-md-3">
                    <div class="form-group">
                        <h5 for="">Nombre Publicidad</h5>
                      <input type="text" name="nombre" class="form-control" placeholder="" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                         <h5 for="">Link</h5>
                      <input type="text" name="link" class="form-control" />
                    </div>
                </div>
               

                <div class="col-md-3">
                    <div class="form-group" >
                        <h5>Posición</h5>
                        <select class="form-control" name="posicion" id="posicion">
                            <option value="">Seleccione una posicion</option>
                            @foreach ($posicion as $item)
                            
                                <option value="{{$item->id}}">{{$item->t_posicion}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                      <h5 for="">Orientación</h5>
                        <select class="form-control" name="orientacion" id="orientacion">
                          
                            {{-- @foreach ($orientacion as $items)
                                <option value="{{$items->id}}">{{$items->t_orientacion}}</option>
                            @endforeach --}}
                        </select>                    
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <h5 for="">Fecha Inicio</h5>
                    <input type="date" class="form-control" name="f_inicio" >
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <h5 for="">Fecha Final</h5>
                    <input type="date" class="form-control" name="f_final" >
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                      <h5 for="">Pagina Web Relacionada</h5>
                      <select name="pagina" class="form-control">
                          @foreach ($pagina as $paginas)
                              <option value="{{$paginas->id}}">{{$paginas->nom_pagina}}</option>
                          @endforeach
                      </select>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="form-group">
                      <h5 for="">Estado</h5>
                      <select name="estado" class="form-control">
                          @foreach ($estado as $estados)
                              <option value="{{$estados->id}}">{{$estados->nom_estado}}</option>
                          @endforeach
                      </select>
                    </div>
                </div>
            </div>
             <div class="col text-right">
                <button type="submit" class="btn btn-default">Guardar</button>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
   var data = [];
    window.onload = function(){
        $("#posicion").change(function(){
            // debugger;
            $('#orientacion').html(' ');
            $.ajax({        
                // le pido a la url '/utils/provincia' el liostado de loclaidades
                url: "/twons/" + $(this).val(),
                method: 'GET',
                success: function(data) {
                     for (let i = 0; i < data.length; i++) {
                        $('#orientacion').append(data[i].html+"<option value="+data[i].id+">"+data[i].t_orientacion+"</option>");    
                        // $("#orientacion").show();    
                    // console.log(data);          
                     }
                }
            });
        });
    }
</script>
  
@endsection
