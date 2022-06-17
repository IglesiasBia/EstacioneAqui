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
			<!-- <div class="form-group col-md-3">
				<label for="modelo_carro">Modelo</label>
				<input type="text" class="form-control" name="modelo_carro">
			</div> -->

			<!-- <div class="form-group col-md-5">
				<label for="nome_func">Nome Completo</label>
				<input type="text" class="form-control" name="nome_func">
			</div>
			<div class="form-group col-md-3">
				<label for="usu_func">Usuário</label>
				<input type="text" class="form-control" name="usu_func">
			</div>
			<div class="form-group col-md-3">
				<label for="senha_usu">Senha</label>
				<input type="text" class="form-control" name="senha_usu">
			</div>
			<div class="form-group col-md-3">
				<label for="email_func">E-mail</label>
				<input type="text" class="form-control" name="email_func">
			</div> -->

		</div>
		<!-- 2ª LINHA -->
		<!-- <div class="row"> 
			<div class="form-group col-md-2">
				<label for="nivel_func">Nível</label>
				<select class="form-control" name="nivel_func">
					<option> --------- </option>
					<option value="1">Funcionário Usuário</option>
					<option value="2">Administrador</option>
					<option value="3">Funcionário não usuário</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for="status_func">Status</label>
				<select class="form-control" name="status_func">
					<option> --------- </option>
					<option value="1">Ativo</option>
					<option value="0">Inativo</option>
				</select>
			</div>
		</div> -->
		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=lista_func" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</form> 
</div>