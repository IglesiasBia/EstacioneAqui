<?php
    //include "../../base/con_escola.php";
    include "../../base/con.php";
	$id = (int) $_GET['id'];
	$sql = mysqli_query($con, "select * from usuarios where id = '".$id."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro do Funcionário - <?php echo $id;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_func&id=<?php echo $row['id']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<div class="form-group col-md-2">
			<label for="id">ID</label>
			<input type="text" class="form-control" name="id" value="<?php echo $row["id"]; ?>">
		</div>
		<div class="form-group col-md-5">
			<label for="nome">Nome Completo</label>
			<input type="text" class="form-control" name="nome_func" value="<?php echo $row["nome"]; ?>">
		</div>
		<div class="form-group col-md-3">
			<label for="cpf_cli">Usuário</label>
			<input type="text" class="form-control" name="usuario" value="<?php echo $row["usuario"]; ?>">
		</div>
		<div class="form-group col-md-6">
			<label for="email">E-mail</label>
			<input type="text" class="form-control" name="email" value="<?php echo $row["email"]; ?>">
		</div>
	</div>

	<!-- 2ª LINHA -->
	<div class="row"> 

        <div class="form-group col-md-2">
			<label for="nivel_func">Nível</label>
			<select class="form-control" name="nivel_func">
				<?php 
                    if($info["nivel"] == 1){
                        echo "<td>Funcionário Usuário</td>";
                    }else if($info["nivel"] == 2){
                        echo "<td>Administrador</td>";
                    }else if($info["nivel"] == 3){
                        echo "<td>Funcionário não-usuário</td>";
                    }
				?>
			</select>
		</div>

        <div class="form-group col-md-6">
				<label for="status_func">Status</label><br>
				<?php 
					if($info["ativo"]== 1){
						echo "<input type='radio' name='status_func' value='1' checked> Ativo ";
						echo "<input type='radio' name='status_func' value='0'> Inativo";
					}elseif($info["status"]== 0){
						echo "<input type='radio' name='status_func' value='1'> Ativo ";
						echo "<input type='radio' name='status_func' value='0' checked> Inativo";
					}
				?>
				<!-- <select class="form-control" name="status">
					<option> --------- </option>
					<option value="1">Ativo</option>
					<option value="0">Inativo</option>
				</select> -->
			</div>
		</div>
	</div>
	
	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_func" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>
</div>
