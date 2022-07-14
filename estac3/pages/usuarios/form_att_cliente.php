<div id="main" class="container-fluid">
 	<div id="top" class="row">
		<div class="col-md-11">
			<h2>Clientes</h2>
		</div>

	</div>
	<form action="?page=form_atualiza_vaga_cliente" method="post">
		<!-- 1ª LINHA -->	
		<div class="row"> 
			<div class="form-group col-md-3">
				<label for="placa_veic">Placa</label>
				<input type="text" class="form-control" name="placa_veic">
			</div>
		</div>

		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-dark">Buscar</button>
				<!-- <a href="dash.php" class="btn btn-danger">Cancelar</a> -->
			</div>
		</div>
	</form> 
</div>