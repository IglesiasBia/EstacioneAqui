<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mudança de senha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div>
    <form action="?page=altera_senha_usu" method="post">
        <div class="row"> 
			<div class="form-group col-md-3">
				<label for="senha">Nova senha</label>
				<input type="text" class="form-control" name="senha">
        <label for="file">Nova foto de perfil</label>
        <input id="uploadImage" type="file" name="foto" id="file" type="hidden">
			</div>

			<hr />
			<button type="submit" class="btn btn-danger">Salvar</button>
    </form>
</div>
      </div>
      
    </div>
  </div>
