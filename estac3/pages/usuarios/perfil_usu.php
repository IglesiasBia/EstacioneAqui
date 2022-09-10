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
	<div class="row"><h3 class="page-header estactitle">Seja bem vindo(a)  <?php echo $nome; ?>! </h3></div>
		
		<div class="card my-4">
        	<div class="card-body px-0 pb-2 ">
			<div class="cardperfil">
				<div class="row">
					<div class="col-md-4">
						<img src="../assets/img/bea.png" class="rounded-circle imgperfil">
					</div>
					<div class="col-md-4">
						<p class="fs-4"><strong>ID</strong></p>
						<p class="fs-4 estacdados"><?php echo $row['id_func'];?></p>
					</div>
					<div class="col-md-4">
						<p class="fs-4"><strong>Nome Completo</strong></p>
						<p class="fs-4 estacdados"><?php echo $row['nome_func'];?></p>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<p class="fs-4"><strong>CPF</strong></p>
						<p class="fs-4 estacdados"><?php echo $row['cpf_func'];?></p>
					</div>
					<div class="col-md-4">
						<p class="fs-4"><strong>E-mail</strong></p>
						<p class="fs-4 estacdados"><?php echo $row['email_func'];?></p>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-3">
						<p class="fs-4"><strong>Usuário</strong></p>
						<p class="fs-4 estacdados"><?php echo $row2['func_usu'];?></p>
					</div>
					<div class="col-md-3">
						<p class="fs-4"><strong>Senha</strong></p>
						<p class="fs-4 estacdados"><?php echo $row2['senha_func'];?></p>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalExemplo">
						Alterar senha</button>

            			<!-- <a href="?page=form_altera_senha_usu" class="senha" data-bs-toggle="modal" data-bs-target="#final">Alterar senha</a> -->
						<!-- <button type="button" class="btn btn-primary botao" data-bs-toggle="modal" data-bs-target="#final">Finalizar</button> -->
					</div>
					<div class="col-md-3">
						<p class="fs-4"><strong>Nível de Acesso</strong></p>
            			<?php
                			if($row["nivel_func"] == 1){
                    			echo "<td>
								<p class='fs-4 estacdados'>Funcionário Usuário</p></td>";
                			}else if($row["nivel_func"] == 2){
                    			echo "<td><p class='fs-4 estacdados'>Administrador </p></td>";
                			}
            			?>
					</div>
					<div class="col-md-3">
						<p class="fs-4"><strong>Status</strong></p>
						<?php 
							if($row['status_func'] == 1){
								echo "<td><p class='fs-4 estacdados'>Ativo</p></td>";
							}elseif($row['status_func'] ==  0){
								echo "<td><p class='fs-4 estacdados'>Inativo</p></td>";
							}
						?>
					</div>
				</div>

				</div>
        	</div>
        </div>
	
		  
	
	
	
	<div class="row">
		
		
		
	</div>
	
	<div class="row">
		
		
		
	</div>
	
	<div class="row">
		
		
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


<!-- <div class="modal" tabindex="-1" id="final">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pedido Finalizado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><output id="msg"> </output></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div> -->
<!-- Botão para acionar modal -->

<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <?php include "form_altera_senha_usu.php"; ?>
</div>