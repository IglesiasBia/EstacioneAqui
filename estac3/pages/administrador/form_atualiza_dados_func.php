<?php
	// Somente nível administrador possui acesso
	$nivel_necessario = 2;
	include "../base/testa_nivel.php";
	
	$id = (int) $_GET['id'];
	$sql = mysqli_query($con, "select * from funcionario where id_func = '".$id."';");
	$row = mysqli_fetch_array($sql);

	if($row["nivel_func"] == 1 || $row["nivel_func"] == 2){
		$sql2 ="select * from funcionario 
		join func_usu 
		on funcionario.id_func = func_usu.id_func
		where funcionario.id_func = '".$id."';";
		$sql2= mysqli_query($con, $sql2);
		$row2 = mysqli_fetch_array($sql2);
	}
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro do Funcionário - <?php echo $id;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_func&id=<?php echo $row['id_func']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<div class="form-group col-md-4">
			<label for="id">ID</label>
			<input type="text" class="form-control" name="id_func" value="<?php echo $row["id_func"]; ?> "readonly>
		</div>
		<div class="form-group col-md-4">
			<label for="nome">Nome Completo</label>
			<input type="text" class="form-control" name="nome_func" value="<?php echo $row["nome_func"]; ?>">
		</div>
		<div class="form-group col-md-4">
			<label for="cpf_func">CPF</label>
			<input type="text" class="form-control" name="cpf_func" value="<?php echo $row["cpf_func"]; ?>">
		</div>
	</div>

	<!-- 2ª LINHA -->
	<div class="row"> 
		<div class="form-group col-md-4">
			<label for="email">E-mail</label>
			<input type="text" class="form-control" name="email_func" value="<?php echo $row["email_func"]; ?>">
		</div>
		<div class="col-md-4">
			<?php
				if($row["nivel_func"] == 1 || $row["nivel_func"] == 2){
					echo "<label for='func_usu'>Usuário</label>";
					echo "<input type='text' class='form-control' name='func_usu' value='" . $row2["func_usu"] . "'>";
				}
			?>
		</div>
        <div class="form-group col-md-4">
			<label for="status_func">Status</label><br>
			<?php 
				if($row["status_func"]== 1){
					echo "<input type='radio' name='status_func' value='1' checked> Ativo ";
					echo "<input type='radio' name='status_func' value='0'> Inativo";
				}elseif($row["status_func"]== 0){
					echo "<input type='radio' name='status_func' value='1'> Ativo ";
					echo "<input type='radio' name='status_func' value='0' checked> Inativo";
				}
			?>
		</div>
		<div class="form-group col-md-2">
			<label for="nivel_func">Nível</label>
			<!-- Estudar esse select -->
			<select class="form-control" name="nivel_func">
				<option value="1"<?php if (!(strcmp(1, htmlentities($row['nivel_func'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>Funcionário Usuário</option>
				<option value="2"<?php if (!(strcmp(2, htmlentities($row['nivel_func'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>Administrador</option>
				<option value="3"<?php if (!(strcmp(3, htmlentities($row['nivel_func'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>Funcionário não usuário</option>		
			</select>

		</div>
	</div>
	
	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_func" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-danger">Salvar Alterações</button>
		</div>
	</div>
</div>
