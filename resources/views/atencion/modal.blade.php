@foreach ($atencion as $atent)
<div class="modal fade" id="exampleModal{{$atent->i_idusuario}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
            Información Adicional
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <p><b>Usuario : </b><span>{{$atent->t_username}}</span></p>
            <p><b>Correo Electrónico: </b><span >{{$atent->t_correoper}}</span></p>
            <p><b>Número de Celular </b><span >{{$atent->n_celular}}</span></p>
            <p><b>DNI: </b><span >{{$atent->persona->c_dniper}}</span></p>
            <p><b>Nombre: </b><span >{{$atent->persona->t_nombreper}}</span></p>
            <p><b>Apellido: </b><span >{{$atent->persona->t_apellidoper}}</span></p>
            <p><b>Fecha de Nacimiento: </b><span >{{ \Carbon\Carbon::parse($atent->persona->f_inicio)->format('d M, Y')}}</span></p>
            <p><b>Sexo:  </b><span >{{$atent->persona->c_sexoper}}</span></p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
</div>
    
@endforeach