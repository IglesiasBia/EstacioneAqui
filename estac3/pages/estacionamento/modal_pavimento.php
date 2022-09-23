<?php
$sqlQuantidadePavimentos = mysqli_query($con, "select quant_pavimento from estacionamento where id_estac=1");
$resultadoQuantidadePavimento = mysqli_fetch_array($sqlQuantidadePavimentos);

?>

<div class="modal-dialog modal-lg">
	<div class="modal-content cardpadding">
		<div id="top" class="row addvaga">
			<div class="col-md-12">
				<h2> Layout </h2>
				<hr>
			</div>
		</div>
		<div class="row">
			<form action="?page=layout_teste" class="addvaga" method="post">
				<div class="form-group">
					<?php 
					// echo $resultadoQuantidadePavimento["quant_pavimento"];
					
						echo "<h3>Escolha o pavimento que deseja atualizar</h3>";
						$contador = 1;

						while($contador <= $resultadoQuantidadePavimento["quant_pavimento"]){
							echo "
							<a class='btn btn-success btn-xs'  href=?page=layout_teste&id_pavimento=".$contador.">Pavimento ".$contador."</a></td>";
							$contador++;
						}
						
					?>

				</div>
			
				<hr />
		
			</form>
		</div>
	</div>
</div>

	<!-- <div id="actions" class="row">
				<div class="col-md-12">
					<button class="btn btn-danger" data-toggle="modal" data-target="#dadosPavimento" type="submit">Salvar</button>
				</div>
			</div> -->
