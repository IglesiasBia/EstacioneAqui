<div class="modal-dialog modal-lg">
	<div class="modal-content cardpadding">
		<div id="top" class="row addvaga">
			<div class="col-md-11">
				<h2>Vagas</h2>
				<hr>
			</div>
		</div>
		<form action="?page=insere_vaga" method="post"> 
			<!-- 1ª LINHA -->	
			<div class="row"> 
				<div class="form-group col-md-3">
					<label for="pav_vaga">Pavimento</label>
					<input type="text" class="form-control" name="pav_vaga">
				</div>
				<div class="form-group col-md-3">
					<label for="tipo_vaga">Tipo</label>
					<select class="form-control" name="tipo_vaga">
						<option> --------- </option>
						<option value="1">Carro</option>
						<option value="0">Motocicleta</option>
					</select>
				</div>
				<div class="form-group col-md-3">
					<label for="setor_vaga">Setor Vaga</label>
					<input type="text" class="form-control" name="setor_vaga">
				</div>
				<div class="form-group col-md-3">
					<label for="num_vaga">Número Vaga</label>
					<input type="text" class="form-control" name="num_vaga">
				</div>
			</div>
			<hr />
			<div id="actions" class="row">
				<div class="col-md-12">
					<button type="submit" class="btn btn-dark">Salvar</button>
				</div>
			</div>
		</form> 
    </div>
</div>