@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Editar Medico</h3>
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
                <div class="col-md-5">
                     <div class="form-group">
                        <label >Usuario</label>
                        <input type="text" name="t_username" class="form-control" value="{{$client->t_username}}" >
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label >Correo Electronico</label>
                        <input type="text" name="t_correoper"  class="form-control" value="{{$client->t_correoper}}"  />
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                      <label >N° Celular</label>
                      <input type="text" name="n_celular"  class="form-control" value="{{$client->n_celular}}"  />
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label >DNI</label>
                        <input type="text" name="c_dniper"  class="form-control" value="{{$client->persona->c_dniper}}"  />
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label >Nombre </label>
                        <input type="text" name="t_nombreper"  class="form-control" value="{{$client->persona->t_nombreper}}"  />
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label >Apellido </label>
                        <input type="text" name="t_apellidoper"  name ="t_apellido" class="form-control" value="{{$client->persona->t_apellidoper}}"  />
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label> Fecha de Nacimiento</label>
                        <input type="date" name="d_nacimientoper" class="form-control" value="{{$client->persona->d_nacimientoper}}"/>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label> Contraseña</label>
                        <input type="password" name="t_password" class="form-control" value="{{$client->t_password}}"/>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</div>
@endsection