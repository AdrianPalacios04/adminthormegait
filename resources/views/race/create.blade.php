@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Nueva Carrera</h3>
            </div>
            <div class="col text-right">
                <a href="{{url('race')}}" class="btn btn-sm btn-default">
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
        <form action="{{url('/race')}}" method="post">
            @csrf
            {{-- <div class="row align-items-center">
                <div class=" col text-right col-2"> 

                    <input type="date" name="day[]" class="form-control" " required>
                </div>
            </div> --}}
            <div class="card shadow">
                <div class="card-body">
                    @if(session('notification'))
                    <div class="alert alert-success" role="alert">
                        {{session('notification')}}
                    </div>
                    @endif
                </div>
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                               <th scope="col">Acertijo</th>
                                <th scope="col">Respuesta </th>
                                <th scope="col">Hora Final</th>
                                <th scope="col">Premio</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Activo</th>
                                <th scope="col"><a href="javascript:void(0)" class="btn btn-success addRow">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i></a></th>
                            </tr>
                        </thead>
                        <tbody>
                        {{-- @foreach ($workDays as $key => $workDay) --}}
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <?php $fcha = date("Y-m-d");?>
                                        <input type="date" name="day[]" class="form-control" value="<?php echo $fcha;?>">
                                    </div>
                                </div>
                            </td>
                           
                            <td>
                            <div class="row">
                                <div class="col">
                                    <select class="form-control" name="time_start[]">
                                    @for($i=1; $i<=23; $i++)
                                        <option value="{{$i}}:00">{{$i}}:00 </option>  
                                    @endfor
                                    </select>
                                </div>
                            </div>          
                            </td>
                            <td>
                            <div class="row">
                                <div class="col">
                                    <select class="form-control" name="time_final[]">
                                    @for($i=1; $i<=23; $i++)
                                        <option value="{{$i}}:00">{{$i}}:00 </option>
                                       
                                    @endfor
                                    </select>
                                </div>
                            </div>
                            </td>
                            <td>
                                <select class="form-control" name="premio[]">
                                    <option value="ticket">ticket</option>
                                    <option value="cash">cash</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="cantidad[]">
                            </td>
                            {{-- <td> 
                                <label class="custom-toggle">
                                    <input type="checkbox" name="active[]" checked>
                                    <span class="custom-toggle-slider rounded-circle" value="1"></span>
                                </label>
                            </td> --}}
                            <th scope="col"><a href="javascript:void(0)" class="btn btn-danger deleteRow"><i class="fa fa-trash" aria-hidden="true"></i></a></th>
        
                        </tr>
                        {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
            <button>guardar</button>
        </form>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $('thead').on('click','.addRow',function() {
        const tr =    "<tr>"+
                       " <td>"+
                        "<div class='row'>"+
                                    "<div class='col'>"+
                                        "<?php $fcha = date('Y-m-d');?>"+
                                        "<input type='date' name='day[]' class='form-control' value='<?php echo $fcha;?>'>"+
                                    "</div>"+
                                "</div>"+
                        "</td>"+
                        
                        "<td>"+
                        "<div class='row'>"+
                            "<div class='col'>"+
                                "<select class='form-control' name='time_start[]'>"+
                                
                                    "@for($i=1; $i<=23; $i++)"+
                                        "<option value='{{$i}}:00'>{{$i}}:00 </option>"+  
                                    "@endfor"+
                                
                               " </select>"+
                            "</div>"+
                        "</div>"+     
                        "</td>"+
                        "<td>"+
                        "<div class='row'>"+
                            "<div class='col'>"+
                                "<select class='form-control' name='time_final[]'>"+
                                    "@for($i=1; $i<=23; $i++)"+
                                        "<option value='{{$i}}:00'>{{$i}}:00 </option>"+  
                                    "@endfor"+
                                "</select>"+
                            "</div>"+
                        "</div>"+
                        "</td>"+
                        "<td>"+
                            "<select class='form-control' name='premio[]'>"+
                                "<option value='ticket'>ticket</option>"+
                                "<option value='cash'>cash</option>"+
                            "</select>"+
                        "</td>"+
                        "<td>"+
                            "<input type='text' class='form-control' name='cantidad[]' >"+
                        "</td>"+
                        
                        "<th scope='col'><a href='javascript:void(0)' class='btn btn-danger deleteRow'><i class='fa fa-trash aria-hidden='true'></i></a></th>"+
                    "</tr>"
                    $('tbody').append(tr);
    });
    $('tbody').on('click','.deleteRow',function () {
        $(this).parent().parent().remove();
    });
   
</script>
    
@endpush