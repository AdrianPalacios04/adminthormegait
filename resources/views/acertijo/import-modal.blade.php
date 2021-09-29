<div class="modal fade" tabindex="-1" id="exampleModalImport" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevos Acertijos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" id="file">
        </div>
        <div class="modal-footer">
           <input type="submit" class="btn btn-success" value="Enviar">
        </div>
    </form>
    </div>
    </div>
</div>