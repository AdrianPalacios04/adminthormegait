
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
        <form action="" method="get">
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" value="{{$reclamo->email}}">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Respuesta</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="respuesta" rows="8"></textarea>
                  </div>
                {{-- <p><b  style="font-weight: bold">Respuesta : </b><span >{{$reclamos->tienda_compra}}</span></p> --}}
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Enviar</button>
            </div>
        </form>
        
    </div>
    </div>
</div>
    
@endforeach
