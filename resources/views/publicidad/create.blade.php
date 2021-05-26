@extends('layouts.panel')
@section('content')
<div class="card shadow" >
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Nueva Publicidad </h3>
        </div>
        <div class="col text-right">
            <a href="{{url('publicidad')}}" class="btn btn-sm btn-default">
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
        <form action="{{url('publicidad')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="">Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="">Zona Pertenece (<em><small>Pagina Pertenece</small></em>)</label>
                    <input type="text" name="zona" class="form-control" />
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Versión Horizontal</label>
                        <input type="file" class="form-control" name="horizontal"  required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Versión Vertical</label>
                        <input type="file" class="form-control" name="vertical"  required>
                    </div>
                </div>
            </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Fecha Inicio</label>
                    <input type="date" class="form-control" name="f_inicio" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Fecha Final</label>
                    <input type="date" class="form-control" name="f_final" required>
                  </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</div>
@endsection

{{-- @push('scripts')
<script>
        let add;
    $('thead').on('click','.addRow',function() {
         add =  "<tr>"+
                        "<td>"+
                            "<div class='row'>"+
                                "<div class='col'>"+
                                    "<input type='text' name='pregunta[]' class='form-control' >"+
                            " </div>"+
                        " </div>"+
                        "</td>"+
                        "<td>"+
                            "<div class='row'>"+
                                "<div class='col'>"+
                                "<input type='text' name='respuesta[]' class='form-control'>"+
                                "</div>"+
                            " </div>"+          
                        "</td>"+
                         "<th scope='col'><a href='javascript:void(0)' class='btn btn-danger deleteRow'><i class='fa fa-trash' aria-hidden='true'></i></a></th>"+
                    "</tr>"+
         $('tbody').append(add);
    });
    $('tbody').on('click','.deleteRow',function () {
        $(this).parent().parent().remove();
    });
   
</script>
     --}}
{{-- @endpush --}}