<?php
    //Fazer um perfil para o usaurio
    //Ele pode atualizar sua senha
    $nome = $_SESSION['UsuarioNome'];
    $id = $_SESSION['UsuarioID'];
	$sql = mysqli_query($con, "select * from usuarios where id = '".$id."';");
	$row = mysqli_fetch_array($sql);
?>

<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro do Usuário - <?php echo $nome; ?> </h3>
	<div class="row">
		<div class="col-md-2">
			<p><strong>ID</strong></p>
			<p><?php echo $row['id'];?></p>
		</div>
		<div class="col-md-5">
			<p><strong>Nome Completo</strong></p>
			<p><?php echo $row['nome'];?></p>
		</div>
		<div class="col-md-3">
			<p><strong>Usuário</strong></p>
			<p><?php echo $row['usuario'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>Senha</strong></p>
			<p><?php echo $row['senha'];?></p>
            <a href="?page=form_altera_senha_usu">*Alterar senha</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<p><strong>E-mail</strong></p>
			<p><?php echo $row['email'];?></p>
		</div>
		<div class="col-md-3">
			<p><strong>Nível de Acesso</strong></p>
            <?php
                if($row["nivel"] == 1){
                    echo "<td>Funcionário Usuário</td>";
                }else if($row["nivel"] == 2){
                    echo "<td>Administrador</td>";
                }
            ?>
		</div>
		<div class="col-md-3">
			<p><strong>Status</strong></p>
			<?php 
				if($row['ativo'] == 1){
					echo "<td>Ativo</td>";
				}elseif($row['ativo'] ==  0){
					echo "<td>Inativo</td>";
				}
			?>
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
