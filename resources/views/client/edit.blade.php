@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Editar Usuario Web</h3>
        </div>
        <div class="col text-right">
            <a href="{{url('/users')}}" class="btn btn-sm btn-default">
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
        <form action="{{url('users/'.$client->i_idusuario)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row" style="font-weight: bolder;">
                <div class="col-md-4">
                     <div class="form-group">
                        <label >Usuario</label>
                        <input type="text" name="t_username" class="form-control" value="{{$client->t_username}}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label >Correo Electronico</label>
                        <input type="text" name="t_correoper"  class="form-control" value="{{$client->t_correoper}}"  />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <label >N° Celular</label>
                      <input type="text" name="n_celular"  class="form-control" value="{{$client->n_celular}}"  />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label >DNI</label>
                        <input type="text" name="c_dniper"  class="form-control" value="{{$client->persona->c_dniper}}"  />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label >Nombre </label>
                        <input type="text" name="t_nombreper"  class="form-control" value="{{$client->persona->t_nombreper}}"  />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label >Apellido </label>
                        <input type="text" name="t_apellidoper"  name ="t_apellido" class="form-control" value="{{$client->persona->t_apellidoper}}"  />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label> Fecha de Nacimiento</label>
                        <input type="date" name="d_nacimientoper" class="form-control" value="{{$client->persona->d_nacimientoper}}"/>
                    </div>
                </div>
                {{-- <div class="col-md-5">
                        <label>Ingrese Contraseña</label>
                    <div class="input-group">
                        <input id="txtPassword" type="text" Class="form-control" value="{{\Crypt::decryptString($client->t_password)}}" >
                        <div class="input-group-append">
                            <button id="show_password" class="btn btn-primary" onclick="mostrarPassword()"><i class="fa fa-eye icon"></i></button>
                        </div>
                    </div>
                </div> --}}
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</div>
{{-- @push('scripts')
<script type="text/javascript">
    function mostrarPassword(){
        var cambio = document.getElementById("txtPassword");
        if(cambio.type == "password"){
            cambio.type = "text";
            $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        }else{
            cambio.type = "password";
            $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }
    } 
</script>
@endpush --}}
@endsection