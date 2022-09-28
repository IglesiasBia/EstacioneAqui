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
				<div class="form-group col-md-4">
					<label for="pav_vaga" class="fs-4">Pavimento</label>
					<input type="text" class="form-control fs-4" name="pav_vaga">
				</div>
				<div class="form-group col-md-4">
					<label for="tipo_vaga" class="fs-4">Tipo</label>
					<select class="form-control fs-4"  name="tipo_vaga">
						<option class="fs-4"> --------- </option>
						<option value="1" class="fs-4">Carro</option>
						<option value="0" class="fs-4">Motocicleta</option>
					</select>
				</div>
				<div class="form-group col-md-4">
					<label for="setor_vaga" class="fs-4">Setor Vaga</label>
					<input type="text" class="form-control fs-4" name="setor_vaga">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label for="num_vaga" class="fs-4">Número Vaga Inicial</label>
					<input type="number" class="form-control fs-4" name="num_vaga_inicial" min="1">
				</div>
				<div class="form-group col-md-4">
					<label for="num_vaga" class="fs-4">Número Vaga Final</label>
					<input type="number" class="form-control fs-4" name="num_vaga_final" min="0">
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