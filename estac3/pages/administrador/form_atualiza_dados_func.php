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
	<br><h2 class="page-header">Editar registro do Funcionário - <?php echo $id;?></h2>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_func&id=<?php echo $row['id_func']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<div class="form-group col-md-4">
			<label for="id" class="fs-4">ID</label>
			<input type="text"  class="form-control fs-4" name="id_func" value="<?php echo $row["id_func"]; ?> "readonly>
		</div>
		<div class="form-group col-md-4">
			<label for="nome" class="fs-4">Nome Completo</label>
			<input type="text" class="form-control fs-4" name="nome_func" value="<?php echo $row["nome_func"]; ?>">
		</div>
		<div class="form-group col-md-4">
			<label for="cpf_func" class="fs-4">CPF</label>
			<input type="text" class="form-control fs-4" name="cpf_func" value="<?php echo $row["cpf_func"]; ?>">
		</div>
	</div>

	<!-- 2ª LINHA -->
	<div class="row"> 
		<div class="form-group col-md-4">
			<label for="email" class="fs-4">E-mail</label>
			<input type="text" class="form-control fs-4" name="email_func" value="<?php echo $row["email_func"]; ?>">
		</div>
		<div class="col-md-4">
			<?php
				if($row["nivel_func"] == 1 || $row["nivel_func"] == 2){
					echo "<label for='func_usu' class='fs-4'>Usuário</label>";
					echo "<input type='text' class='form-control fs-4' name='func_usu' value='" . $row2["func_usu"] . "'>";
				}
			?>
		</div>
        <div class="form-group col-md-4">
			<label for="status_func" class="fs-4">Status</label><br>
			<?php 
				if($row["status_func"]== 1){
					echo "<input type='radio' class='fs-4' name='status_func' value='1'  checked > Ativo ";
					echo "<input type='radio' class='fs-4' name='status_func' value='0' > Inativo";
				}elseif($row["status_func"]== 0){
					echo "<input type='radio'  class='fs-4' name='status_func' value='1' > Ativo ";
					echo "<input type='radio'  class='fs-4' name='status_func' value='0'  checked> Inativo";
				}
			?>
		</div>
		<div class="form-group col-md-2">
			<label for="nivel_func" class="fs-4">Nível</label>
			<!-- Estudar esse select -->
			<select class="form-control fs-4" name="nivel_func" >
				<option value="1"<?php if (!(strcmp(1, htmlentities($row['nivel_func'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?> class="fs-4">Funcionário Usuário</option>
				<option value="2"<?php if (!(strcmp(2, htmlentities($row['nivel_func'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?> class="fs-4">Administrador</option>
				<option value="3"<?php if (!(strcmp(3, htmlentities($row['nivel_func'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?> class="fs-4">Funcionário não usuário</option>		
			</select>

		</div>
	</div>
	
	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_func" class="btn btn-dark">Voltar</a>
			<button type="submit" class="btn btn-danger ">Salvar Alterações</button>
		</div>
	</div>
</div>
