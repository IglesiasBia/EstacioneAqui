<?php
//Fazer um perfil para o usaurio
//Ele pode atualizar sua senha
$nome = $_SESSION['Usuario'];
$id = $_SESSION['UsuarioID'];
$sql = mysqli_query($con, "select * from funcionario where id_func = '" . $id . "';");
$row = mysqli_fetch_array($sql);
$sql2 = mysqli_query($con, "select * from func_usu where id_func = '" . $id . "';");
$row2 = mysqli_fetch_array($sql2);
?>

 <div id="main" class="container-fluid">
	<div class="row">
		<h3 class="page-header estactitle">Seja bem vindo(a) <?php echo $nome; ?>! </h3>
	</div>
	<div class="row">
		<div class="card">
			<div class="cardperfil">
				<table class="table table-responsive">
        			<tr>
          				<td rowspan="2" colspan="2">
							<img src="../assets/img/bea.png" class="rounded-circle imgperfil">
							</td>
						<td>
							<p class="fs-4"><strong>ID</strong></p>
							<p class="fs-4 estacdados"><?php echo $row['id_func']; ?></p>
						</td>
          				<td>
							<p class="fs-4"><strong>Nome Completo</strong></p>
							<p class="fs-4 estacdados"><?php echo $row['nome_func']; ?></p>
						</td>
        			</tr>
        			<tr>
          				<td>
							<p class="fs-4"><strong>CPF</strong></p>
							<p class="fs-4 estacdados"><?php echo $row['cpf_func']; ?></p>
						</td>
          				<td>
							<p class="fs-4"><strong>E-mail</strong></p>
							<p class="fs-4 estacdados"><?php echo $row['email_func']; ?></p>
						</td>
        			</tr>
        			<tr>
          				<td>
							<p class="fs-4"><strong>Usuário</strong></p>
							<p class="fs-4 estacdados"><?php echo $row2['func_usu']; ?></p>
						</td>
          				<td>
							<p class="fs-4"><strong>Senha</strong></p>
							<p class="fs-4 estacdados"><?php echo $row2['senha_func']; ?></p>
						</td>
          				<td>
							<p class="fs-4"><strong>Nível de Acesso</strong></p>
							<?php
							if ($row["nivel_func"] == 1) {
								echo "<p class='fs-4 estacdados'>Funcionário Usuário</p>";
							} else if ($row["nivel_func"] == 2) {
								echo "<p class='fs-4 estacdados'>Administrador </p>";
							}
							?>
							</td>
          				<td>
							<p class="fs-4"><strong>Status</strong></p>
							<?php
							if ($row['status_func'] == 1) {
								echo "<p class='fs-4 estacdados'>Ativo</p>";
							} elseif ($row['status_func'] ==  0) {
								echo "<p class='fs-4 estacdados'>Inativo</p>";
							}
							?>
							</td>
        			</tr>
    			</table>
				<div class="row">
					<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalExemplo">
						Atualizar perfil
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<?php include "form_altera_senha_usu.php"; ?>
</div> 




			
			
			
			
			
			
			
			
			
			<!-- <div class="table-responsive">
					<table class="table">

					<form action="altera_foto_perfil.php" method="post">
					<label for="uploadImage">
							<img src="../assets/img/bea.png" class="rounded-circle imgperfil">
						</label>
						<input id="uploadImage" type="file" name="foto" id="file" type="hidden">
					</form>
						

						<!-- <input type="file" name="" id="" class="rounded-circle imgperfil">
						<img src="../assets/img/bea.png" class="rounded-circle imgperfil">
						 -->

						<!-- <img src="/estacione/estac3/assets/img/bea.png " class="rounded-circle imgperfil"> -->
					<!-- </div>
					<div class="col-md-4">
						<p class="fs-4"><strong>ID</strong></p>
						<p class="fs-4 estacdados"><?php echo $row['id_func']; ?></p>
					</div>
					<div class="col-md-4">
						<p class="fs-4"><strong>Nome Completo</strong></p>
						<p class="fs-4 estacdados"><?php echo $row['nome_func']; ?></p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<p class="fs-4"><strong>CPF</strong></p>
						<p class="fs-4 estacdados"><?php echo $row['cpf_func']; ?></p>
					</div>
					<div class="col-md-4">
						<p class="fs-4"><strong>E-mail</strong></p>
						<p class="fs-4 estacdados"><?php echo $row['email_func']; ?></p>
					</div>
				</div> -->

				<!-- <div class="row">
					<div class="col-md-3">
						<p class="fs-4"><strong>Usuário</strong></p>
						<p class="fs-4 estacdados"><?php echo $row2['func_usu']; ?></p>
					</div>
					<div class="col-md-3">
						<p class="fs-4"><strong>Senha</strong></p>
						<p class="fs-4 estacdados"><?php echo $row2['senha_func']; ?></p>
					</div>
					<div class="col-md-3">
						<p class="fs-4"><strong>Nível de Acesso</strong></p>
						<?php
						if ($row["nivel_func"] == 1) {
							echo "<td>
								<p class='fs-4 estacdados'>Funcionário Usuário</p></td>";
						} else if ($row["nivel_func"] == 2) {
							echo "<td><p class='fs-4 estacdados'>Administrador </p></td>";
						}
						?>
					</div>
					<div class="col-md-3">
						<p class="fs-4"><strong>Status</strong></p>
						<?php
						if ($row['status_func'] == 1) {
							echo "<td><p class='fs-4 estacdados'>Ativo</p></td>";
						} elseif ($row['status_func'] ==  0) {
							echo "<td><p class='fs-4 estacdados'>Inativo</p></td>";
						}
						?>
					</div>
				</div>
				</table>
			</div> --> 