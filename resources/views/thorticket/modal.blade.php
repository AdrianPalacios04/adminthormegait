
@foreach ($thorticket as $thortickets)
<div class="modal fade" id="exampleModal{{$thortickets->i_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <p><b>ID : </b><span>{{$thortickets->i_id}}</span></p>
            <p><b>Pregunta N°1: </b><span >{{$thortickets->t_pregunta1}}</span></p>
            <p><b>Respuesta N°1: </b><span >{{$thortickets->t_respuesta1}}</span></p>
            <p><b>Pregunta N°2: </b><span >{{$thortickets->t_pregunta2}}</span></p>
            <p><b>Respuesta N°2: </b><span >{{$thortickets->t_respuesta2}}</span></p>
            <p><b>Pregunta N°3: </b><span >{{$thortickets->t_pregunta3}}</span></p>
            <p><b>Respuesta N°3: </b><span >{{$thortickets->t_respuesta3}}</span></p>
            <p><b>Llave N°1: </b><span >{{$thortickets->t_llave1}}</span></p>
            <p><b>Llave N°2: </b><span >{{$thortickets->t_llave2}}</span></p>
            <p><b>Llave N°3: </b><span >{{$thortickets->t_llave3}}</span></p>
            <p><b>Pistas : </b><span >{{$thortickets->pistas_Ax}}</span></p>
            
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
</div>
    
@endforeach
