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
            <div class="modal-body">
                <input name="correlativo" type="hidden" value="{{$reclamos->correlativo}}">
                <input name="fecha_registro" type="hidden" value="{{$reclamos->fecha_registro}}">
                <input name="nombre" type="hidden" value="{{$reclamos->clients->persona->t_nombreper}}">
                <input name="apellido" type="hidden" value="{{$reclamos->clients->persona->t_apellidoper}}">
                <input name="dni" type="hidden" value="{{$reclamos->clients->persona->c_dniper}}">
                <input name="detalle" type="hidden" value="{{$reclamos->detalle}}">
                <input name="estado" type="hidden" value="{{$reclamos->correlativo}}">

                {{-- <input name="reclamo_id" type="hidden" value="{{$reclamos->id_reclamaciones}}"> --}}
                <input name="monto_reclamado" type="hidden" value="{{$reclamos->monto_reclamado}}">
                <input name="pedido" type="hidden" value="{{$reclamos->pedido}}">
                <input name="n_celular" type="hidden" value="{{$reclamos->clients->n_celular}}">
                <input name="email" type="hidden" value="{{$reclamos->email}}">

            
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" value="{{$reclamos->email}}">
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
