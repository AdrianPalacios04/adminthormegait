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
        <form action="{{route('message')}}" method="POST">
            @csrf
            {{-- Para pasar los datos del correo --}}
            <div class="modal-body">
               <input type="hidden" name="nombre" value="{{$reclamos->clients->persona->t_nombreper}}">
                <input name="correlativo" type="hidden" value="{{$reclamos->correlativo}}">
                <input name="fecha_registro" type="hidden" value="{{$reclamos->fecha_registro}}">
               
                <input name="detalle" type="hidden" value="{{$reclamos->detalle}}">
                <input name="estado" type="hidden" value="{{$reclamos->estado}}">

                {{-- <input name="reclamo_id" type="hidden" value="{{$reclamos->id_reclamaciones}}"> --}}
                <input name="monto_reclamado" type="hidden" value="{{$reclamos->monto_reclamado}}">
                <input name="pedido" type="hidden" value="{{$reclamos->pedido}}">
             
                <input name="email" type="hidden" value="{{$reclamos->email}}">

                <input  name="id_tipo" type="hidden" value="{{$reclamos->id_tipo}}">
                <input  name="id_categoria" type="hidden" value="{{$reclamos->id_categoria}}">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" value="{{$reclamos->correo}}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Respuesta</label>
                    <textarea class="form-control"  name="respuesta" rows="4"></textarea>
                </div>
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-primary" value="Enviar">
            </div>
        </form>  
    </div>
    </div>
</div>
@endforeach
