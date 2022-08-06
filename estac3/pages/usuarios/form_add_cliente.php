<div id="main" class="container-fluid">
 	<div id="top" class="row">
		<div class="col-md-11">
			<h2>Clientes</h2>
		</div>

	</div>
	<form action="?page=insere_cli" method="post">
		<!-- 1ª LINHA -->	
		<div class="row"> 
			<div class="form-group col-md-3">
				<label for="placa_veic">Placa</label>
				<input type="text" class="form-control" name="placa_veic">
			</div>
			<div class="form-group col-md-3">
				<label for="tipo_veic">Tipo</label>
				<select class="form-control" name="tipo_veic">
					<option> --------- </option>
					<option value="1">Carro</option>
					<option value="0">Motocicleta</option>
				</select>
			</div>
			<div class="form-group col-md-3">
				<label for="id_vaga">Vaga Utilizada</label>
				<input type="text" class="form-control" name="id_vaga">
			</div>
		</div>

		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-dark">Salvar</button>
				<a href="?page=lista_func" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</form> 
</div>