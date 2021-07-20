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
          <form action="{{route('updateConfigTicket')}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Cantidad de Ax CASH:</label>
              <input type="date" class="form-control" name="d_dateinicio" id="d_dateinicio" value={{$con->d_dateinicio}}>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Cantidad de Ax TICKET</label>
               <input type="date" class="form-control" name="d_datefinal" id="d_datefinal" value={{$con->d_datefinal}}>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Comienzo del EVENTO</label>
               <input type="number" class="form-control" name="i_cantidad" id="i_cantidad" value={{$con->i_cantidad}}>
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-primary" value="Guardar" >
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>