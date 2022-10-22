<?php
// Somente nível administrador possui acesso
$nivel_necessario = 2;
include "../base/testa_nivel.php";
?>

<div id="main" class="container-fluid">
	<div id="top" class="row">
		<div class="col-md-11">
			<h2>Funcionários</h2>
		</div>

	</div>
	<form action="?page=insere_func" method="post">
		<!-- 1ª LINHA -->
		<div class="row">
			<div class="form-group col-md-3">
				<label for="nome_func">Nome Completo</label>
				<input type="text" class="form-control" name="nome_func">
			</div>
			<div class="form-group col-md-3">
				<label for="cpf_func">CPF</label>
				<input type="text" class="form-control" name="cpf_func">
			</div>
			<div class="form-group col-md-3">
				<label for="nivel_func">Nível</label>
				<select class="form-control" name="nivel_func" id="nivel_funcionario" onchange="dadosNivel()">
					<option> --------- </option>
					<option value="1">Funcionário Usuário</option>
					<option value="2">Administrador</option>
					<option value="3">Funcionário não usuário</option>
				</select>
			</div>
			<div class="form-group col-md-3">
				<label for="status_func">Status</label><br>
				<input type="radio" name="status_func" value="1"> Ativo
				<input type="radio" name="status_func" value="0"> Inativo
			</div>

		</div>
		<!-- 2ª LINHA -->
		<div class="row">
			<div class="form-group col-md-3" id="divEmail" style="display: none;">
				<label for="email_func">E-mail</label>
				<input type="text" class="form-control" name="email_func">
			</div>
			<div class="form-group col-md-3" id="divSenha" style="display: none;">
				<label for="senha_usu">Senha</label>
				<input type="text" class="form-control" name="senha_usu">
			</div>
			<div class="form-group col-md-3" id="divUsuario" style="display: none;">
				<label for="func_usu">Usuário</label>
				<input type="text" class="form-control" name="func_usu">
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
<script>
	function dadosNivel() {
		// Pega nível do funcionário
		let nivelFuncionario = document.getElementById("nivel_funcionario");
		// Se nível for usuário ou administrador entera aqui
		if (nivelFuncionario.value == 1 || nivelFuncionario.value == 2) {
			// Deixa visível divs de email, senha e usuário
			let divEmail = document.getElementById("divEmail");
			divEmail.style.display = "block";
			let divSenha = document.getElementById("divSenha");
			divSenha.style.display = "block";
			let divUsuario = document.getElementById("divUsuario");
			divUsuario.style.display = "block";
		} else {
			// Some divs de email, senha e usuário
			let divEmail = document.getElementById("divEmail");
			divEmail.style.display = "none";
			let divSenha = document.getElementById("divSenha");
			divSenha.style.display = "none";
			let divUsuario = document.getElementById("divUsuario");
			divUsuario.style.display = "none";
		}
	}
</script>