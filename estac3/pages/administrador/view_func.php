<?php
	// Somente nível administrador possui acesso
	$nivel_necessario = 2;
    include "../base/testa_nivel.php";

    $id = (int) $_GET["id"];
	//Talvez esse sql precise de alteração
	$sql = mysqli_query($con, "select * from funcionario 
	join func_usu 
	on funcionario.id_func = func_usu.id_func
	where funcionario.id_func = '".$id."';");
	$row = mysqli_fetch_array($sql);
?>

<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro do Usuário - <?php echo $id; ?> </h3>
	<div class="row">
		<div class="col-md-4">
			<p><strong>ID</strong></p>
			<p><?php echo $row['id_func'];?></p>
		</div>
		<div class="col-md-4">
			<p><strong>Nome Completo</strong></p>
			<p><?php echo $row['nome_func'];?></p>
		</div>
		<div class="col-md-4">
			<p><strong>Nível de Acesso</strong></p>
			<p><?php echo $row['nivel_func'];?></p>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-4">
			<p><strong>Nível</strong></p>
			<?php
				if($row["nivel_func"] == 1){
					echo "<td class='d-none d-md-table-cell'>Funcionário Usuário</td>";
				}else if($row["nivel_func"] == 2){
					echo "<td class='d-none d-md-table-cell'>Administrador</td>";
				}else if($row["nivel_func"] == 3){
					echo "<td class='d-none d-md-table-cell'>Funcionário não-usuário</td>";
				}	
			?>
		</div>
		<div class="col-md-4">
			<p><strong>E-mail</strong></p>
			<p><?php echo $row['email_func'];?></p>
		</div>
		<div class="col-md-4">
			<p><strong>Data de Cadastro</strong></p>
			<p><?php echo $row['dt_cadastro_func'];?></p>
		</div>

	</div>
	<div class="row">
		<div class="col-md-4">
			<p><strong>CPF</strong></p>
			<p><?php echo $row['cpf_func'];?></p>
		</div>
		<div class="col-md-4">
			<?php
				if($row["nivel_func"] == 1 || $row["nivel_func"] == 2){
					echo "<p><strong>Usuário</strong></p>";
					echo "<p>" . $row['func_usu'] . "</p>";
				}
			?>
		</div>
	</div>

	<hr/>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_func" class="btn btn-dark">Voltar</a>
				<?php echo "<a href=?page=form_att_func&id=".$row['id_func']." class='btn btn-danger'>Editar</a>";?>
		</div>
	</div>
</div>
