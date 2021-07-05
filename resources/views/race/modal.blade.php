@foreach ($config as $con)
    

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
          <form id="studentEditForm" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Cantidad de Ax CASH:</label>
              <input type="text" class="form-control" id="cant_ax_cash" value={{$con->cant_ax_cash}}>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Cantidad de Ax TICKET</label>
               <input type="text" class="form-control" id="cant_ax_ticket" value={{$con->cant_ax_ticket}}>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Comienzo del EVENTO</label>
               <input type="time" class="form-control" id="inicio" value={{$con->inicio}}>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">INTERVALO</label>
               <input type="time" class="form-control" id="intervalo" value={{$con->intervalo}}>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Duración de Juego</label>
               <input type="time" class="form-control" id="duration" value={{$con->duration}}>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="saveEdit">Guardar</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  <script>
    $('#studentEditForm').submit(function(e) {
      e.preventDafault();
      
      let cant_ax_cash = $('cant_ax_cash').val();
      let cant_ax_ticket = $('cant_ax_ticket').val();
      let inicio = $('inicio').val();
      let intervalo = $('intervalo').val();
      let duration = $('duration').val();
      
    })
    
  </script>