
@foreach ($reclamo as $reclamos)
<div class="modal fade" id="exampleModal1{{$reclamos->id_reclamaciones}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <h4>Email</h4>
            <input type="text" name="email"  class="form-control" value="{{$reclamos->email}}" readonly>
            <h4>Respuesta</h4>
            <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
            {{-- <p><b  style="font-weight: bold">Respuesta : </b><span >{{$reclamos->tienda_compra}}</span></p> --}}
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
</div>
    
@endforeach
