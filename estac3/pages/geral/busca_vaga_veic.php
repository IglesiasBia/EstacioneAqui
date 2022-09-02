<?php
	$placaVeic = $GET["placa_veic"];

	// Pega id_vaga pela placa
	$sqlBuscaIdVagaVeiculo = mysqli_query($con,"select id_vaga from ticket where placa_veic='$placaVeic' and status_pg=0;");
	$resultadoBuscaIdVagaVeiculo  = mysqli_fetch_array($sqlBuscaIdVagaVeiculo);

	// Se a busca for nula aparece mensagem de erro
	if($resultadoBuscaIdVagaVeiculo == ""){
		header("Location:  /estacione/estac3/pages/dash.php?msg=10");
	}
	$idVaga = $resultadoBuscaIdVagaVeiculo["id_vaga"];

	// Pega dados da vaga pelo id
	$sqlDadosVaga = mysqli_query($con, "select * from vagas where id_vaga='$idVaga';");
	$resultadoDadosVaga = mysqli_fetch_array($sqlDadosVaga);

	$pavVaga = $resultadoDadosVaga["pav_vaga"];
	$setorVaga = $resultadoDadosVaga["setor_vaga"];
	$numVaga = $resultadoDadosVaga["num_vaga"];

	// echo "Pavimento: $pavVaga <br>";
	// echo "Setor: $setorVaga <br>";
	// echo "Número: $numVaga";

	// header('Location: /estacione/estac3/pages/dash.php?modal='.$modal.'&placa='.$placaVeic);
?>

<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div id="top" class="row addvaga">
			<div class="col-md-11">
				<h2>Vagas</h2>
				<hr>
			</div>
		</div>
		<form action="?page=insere_vaga" class="addvaga" method="post"> 
			<!-- 1ª LINHA -->	
			<?php echo $modal; 
				echo "Pavimento: $pavVaga <br>";
	echo "Setor: $setorVaga <br>";
	echo "Número: $numVaga";
			?>
			<hr />
			<div id="actions" class="row">
				<div class="col-md-12">
					<button type="submit" class="btn btn-dark">Salvar</button>
				</div>
			</div>
		</form> 
    </div>
</div>