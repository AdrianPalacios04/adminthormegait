
@foreach ($thorpaga as $thorpagas)
<div class="modal fade" id="exampleModal{{$thorpagas->i_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <p><b>ID : </b><span>{{$thorpagas->i_id}}</span></p>
            <p><b>Pregunta : </b><span >{{$thorpagas->t_pregunta1}}</span></p>
            <p><b>Respuesta : </b><span >{{$thorpagas->t_respuesta1}}</span></p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
</div>
    
@endforeach
