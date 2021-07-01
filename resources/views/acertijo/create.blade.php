@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Nuevos acertijos</h3>
        </div>
        <div class="col text-right">
            <a href="{{url('acertijo')}}" class="btn btn-sm btn-default">
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
        <form action="{{url('acertijo')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <h5>TEXTO ACERTIJO</h5>
                      {{-- <input type="text" name="t_pregunta" class="form-control" value="{{old('t_pregunta')}}" required/> --}}
                      <textarea name="t_pregunta" rows="10" cols="30" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <h5>RESPUESTA <em>(Poner en mayúscula y sin signos)</em></h5>
                      <input type="text" name="t_pregunta" class="form-control" value="{{old('t_pregunta')}}" required/>
                      {{-- <textarea name="t_pregunta" rows="8" class="form-control"></textarea> --}}
                    </div>
                </div>
                
                
                <div class="col-md-4">
                    <div class="form-group">
                        <h5 for="">SECUENCIA DE PISTAS</h5>
                      <input type="text" name="t_respuesta" class="form-control" value="{{old('t_respuesta')}}" required/>
                    </div>
                    <div class="form-group">
                        <h5 for="">KEY WORD N°1 <em>(Poner en mayúscula y sin signos)</em></h5>
                        <input type="text" name="t_pista" class="form-control" value="{{old('t_pista')}}" required/>
                    </div>
                    <div class="form-group">
                        <h5 for="">KEY WORD N°2 <em>(Poner en mayúscula y sin signos)</em></h5>
                        <input type="text" name="t_kword1" class="form-control" onkeypress="javascript: return ValidarNumero(event,this)" value="{{old('t_kword1')}}"/>
                    </div>
                    <div class="form-group">
                        <h5 for="">KEY WORD N°3 <em>(Poner en mayúscula y sin signos)</em></h5>
                      <input type="text" name="t_kword3" class="form-control" onkeypress="javascript: return ValidarNumero(event,this)" value="{{old('t_kword3')}}"/>
                    </div>   
                </div>
            </div>
           
                <div class="col text-right">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
        </form>
    </div>
</div>
@endsection
@push('scripts')
 {{-- <script>
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
   
</script> --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{--<script>
    function CheckUserName(ele) {
        if (/\s/.test(ele.value)) {
            
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Tiene espacios en blanco',
                })
            console.log('no se permite espacios en blanco');
        }
    }
</script> --}}
<script>
    function ValidarNumero(e, campo) {
        key = e.keyCode ? e.keyCode : e.which;
        if (key == 32) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Esta poniendo espacio',
                })
            return false;
        }
    }
    </script>
    
@endpush