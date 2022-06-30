<?php
    //Fazer um perfil para o usaurio
    //Ele pode atualizar sua senha
    $nome = $_SESSION['Usuario'];
    $id = $_SESSION['UsuarioID'];
	$sql = mysqli_query($con, "select * from funcionario where id_func = '".$id."';");
	$row = mysqli_fetch_array($sql);
	$sql2 = mysqli_query($con, "select * from func_usu where id_func = '".$id."';");
	$row2 = mysqli_fetch_array($sql2);
?>

<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro do Usuário - <?php echo $nome; ?> </h3>
	<div class="row">
		<div class="col-md-2">
			<p><strong>ID</strong></p>
			<p><?php echo $row['id_func'];?></p>
		</div>
		<div class="col-md-5">
			<p><strong>Nome Completo</strong></p>
			<p><?php echo $row['nome_func'];?></p>
		</div>
		<div class="col-md-3">
			<p><strong>Nível de Acesso</strong></p>
            <?php
                if($row["nivel_func"] == 1){
                    echo "<td>Funcionário Usuário</td>";
                }else if($row["nivel_func"] == 2){
                    echo "<td>Administrador</td>";
                }
            ?>
		</div>

	</div>
	<div class="row">
		<div class="col-md-5">
			<p><strong>E-mail</strong></p>
			<p><?php echo $row['email_func'];?></p>
		</div>

		<div class="col-md-3">
			<p><strong>Status</strong></p>
			<?php 
				if($row['status_func'] == 1){
					echo "<td>Ativo</td>";
				}elseif($row['status_func'] ==  0){
					echo "<td>Inativo</td>";
				}
			?>
		</div>
		<div class="col-md-2">
			<p><strong>Senha</strong></p>
			<p><?php echo $row2['senha_func'];?></p>
            <a href="?page=form_altera_senha_usu">*Alterar senha</a>
		</div>
		<div class="col-md-5">
			<p><strong>CPF</strong></p>
			<p><?php echo $row['cpf_func'];?></p>
		</div>
		<div class="col-md-3">
			<p><strong>Usuário</strong></p>
			<p><?php echo $row2['func_usu'];?></p>
		</div>

	</div>
	<hr/>
	<!-- <div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_func" class="btn btn-default">Voltar</a>
				<?php
                //  echo "<a href=?page=form_att_func&id=".$row['id']." class='btn btn-primary'>Editar</a>";
                 ?>
				<?php
                //  echo "<a href=?page=excluir_cli&id=".$row['id']." class='btn btn-danger'>Excluir</a>";
                 ?>
		</div> -->
	</div>
</div>
