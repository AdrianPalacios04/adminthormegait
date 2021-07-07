{{-- @foreach ($config as $con) --}}
    

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('updateConfig')}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Cantidad de Ax CASH:</label>
              <input type="text" class="form-control" name="cant_ax_cash" id="cant_ax_cash" value={{$con->cant_ax_cash}}>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Cantidad de Ax TICKET</label>
               <input type="text" class="form-control" name="cant_ax_ticket" id="cant_ax_ticket" value={{$con->cant_ax_ticket}}>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Comienzo del EVENTO</label>
               <input type="time" class="form-control" name="inicio" id="inicio" value={{$con->inicio}}>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">INTERVALO</label>
               <input type="time" class="form-control" name="intervalo" id="intervalo" value={{$con->intervalo}}>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Duración de Juego</label>
               <input type="time" class="form-control" name="duration" id="duration" value={{$con->duration}}>
            </div>
            <div class="modal-footer">
              <input type="submit" class="deletebutton" value="enviar" >
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
  {{-- @endforeach --}}

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 