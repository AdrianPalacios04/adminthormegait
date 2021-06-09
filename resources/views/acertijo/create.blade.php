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
            <div class="form-group">
                <h4 for="pregunta">ACERTIJO</h4>
                <input type="text" name="t_pregunta" class="form-control" value="{{old('t_pregunta',$acertijo->t_pregunta)}}">
            </div>
            <div class="form-group">
                <h4 for="respuesta">RESPUESTA </h4>
                <input type="text" name="t_respuesta" class="form-control" value="{{old('t_respuesta',$acertijo->t_respuesta)}}">
            </div>
            <div class="form-group">
                <h4 for="respuesta">PISTAS </h4>
                <input type="text" name="t_pista" class="form-control" value="{{old('t_pista',$acertijo->t_pista)}}" >
            </div>
            <div class="form-group">
                <h4 for="respuesta">KEY WORD N째1 </h4>
                <input type="text" name="t_kword1" class="form-control" value="{{old('t_kword1',$acertijo->t_kword1)}}" >
            </div>
            <div class="form-group">
                <h4 for="respuesta">KEY WORD N째2 </h4>
                <input type="text" name="t_kword2" class="form-control" value="{{old('t_kword2',$acertijo->t_kword2)}}" >
            </div>
            <div class="form-group">
                <h4 for="respuesta">KEY WORD N째3 </h4>
                <input type="text" name="t_kword3" class="form-control" value="{{old('t_kword3',$acertijo->t_kword3)}}" >
            </div>
            {{-- <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                       <th scope="col">Pregunta</th>
                        <th scope="col">Respuesta</th>
                        <th scope="col"><a href="javascript:void(0)" class="btn btn-success addRow">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i></a></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($workDays as $key => $workDay) --}}
                    {{-- <tr>
                        <td>
                            <div class="row">
                                <div class="col">
                                
                                    <input type="text" name="pregunta[]" class="form-control" >
                                </div>
                            </div>
                        </td>
                        <td>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="respuesta[]" class="form-control">
                            </div>
                        </div>          
                        </td>
                        <th scope="col"><a href="javascript:void(0)" class="btn btn-danger deleteRow"><i class="fa fa-trash" aria-hidden="true"></i></a></th>

                    </tr>
                    {{-- @endforeach --}}
                {{-- </tbody>
               
            </table> --}} --}} --}}
            <button>guardar</button>
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
    
@endpush