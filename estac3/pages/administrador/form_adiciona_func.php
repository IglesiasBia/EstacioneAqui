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
				<label for="nome_func" class="fs-4">Nome Completo</label>
				<input type="text" class="form-control fs-5" name="nome_func">
			</div>
			<div class="form-group col-md-3">
				<label for="cpf_func " class="fs-4">CPF</label>
				<input type="text" class="form-control fs-5" name="cpf_func" id="cpf" autocomplete="off" maxlength="14">
			</div>
			<div class="form-group col-md-3">
				<label for="nivel_func " class="fs-4">Nível</label>
				<select class="form-control fs-5" name="nivel_func" id="nivel_funcionario" onchange="dadosNivel()">
					<option> --------- </option>
					<option value="1" class="fs-5">Funcionário Usuário</option>
					<option value="2" class="fs-5">Administrador</option>
					<option value="3" class="fs-5">Funcionário não usuário</option>
				</select>
			</div>
			<div class="form-group col-md-3">
				<label for="status_func" class="fs-4">Status</label><br>
				<input type="radio" name="status_func" value="1" class="fs-5"> Ativo
				<input type="radio" name="status_func" value="0" class="fs-5">Inativo
			</div>

		</div>
		<!-- 2ª LINHA -->
		<div class="row">
			<div class="form-group col-md-3" id="divEmail" style="display: none;">
				<label for="email_func" class="fs-4">E-mail</label>
				<input type="text" class="form-control fs-5" name="email_func">
			</div>
			<div class="form-group col-md-3" id="divSenha" style="display: none;">
				<label for="senha_usu" class="fs-4">Senha</label>
				<input type="text" class="form-control fs-5" name="senha_usu">
			</div>
			<div class="form-group col-md-3" id="divUsuario" style="display: none;">
				<label for="func_usu" class="fs-4">Usuário</label>
				<input type="text" class="form-control fs-5" name="func_usu">
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
		$("#telefone").mask("(99) 99999-9999");

		$("#cep").mask("99999-999");

		$("#cpf").mask("999.999.999-99");

		$("#cnpj").mask("99.999.999/9999-99");

		$("#data").mask("99/99/9999");

        $('#dinheiro').mask("#.##0,00" , { reverse:true});
        $('#dinheiro2').mask("#.##0,00" , { reverse:true});
        $('#dinheiro3').mask("#.##0,00" , { reverse:true});
       
	</script>
<script>
const input = document.querySelector('inputcpf')
input.addEventListener('keypress',() => {
    let inputlength = input.value.length("inputcpf");

    if(inputlength == 3||inputlength == 7){
        input.value += ".";
    } else if(inputlength == 11){
		input.value += "-";
	};
});


let inputlength = document.getElementById("inputcpf");
if(inputlength == 3||inputlength == 7){
        input.value += ".";
    } else if(inputlength == 11){
		input.value += "-";
	};
}



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