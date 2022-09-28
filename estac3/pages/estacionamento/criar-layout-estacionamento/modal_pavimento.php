<?php
// Pega no banco a quantidade total de pavimentos
$sqlQuantidadePavimentos = mysqli_query($con, "select quant_pavimento from estacionamento where id_estac=1");
$resultadoQuantidadePavimento = mysqli_fetch_array($sqlQuantidadePavimentos);

echo '<input type="text" value="'.$resultadoQuantidadePavimento["quant_pavimento"].'" id="totalPavimento" style="display: none;">';
?>

<div class="modal-dialog modal-lg">
	<div class="modal-content cardpadding ">
		<div id="top" class="row addvaga">
			<div class="col-md-12">
				<h2> Layout </h2>
				<hr>
			</div>
		</div>
		<div class="row">
			<form action="?page=layout_desenha_vagas" class="addvaga" method="post">
				<div class="form-group" id="modalPavimento">
					<?php 

						echo "<h3>Escolha o pavimento que deseja atualizar</h3>";
						$contador = 1;
						// Enquanto houver pavimentos entra aqui
						while($contador <= $resultadoQuantidadePavimento["quant_pavimento"]){


							$sqlDadosPavimento = mysqli_query($con, "select pav_vaga from vagas where pav_vaga = ".$contador.";");
							$resultadoDadosPavimento = mysqli_fetch_array($sqlDadosPavimento);

							// echo "select pav_vaga from vagas where pav_vaga = ".$contador.";";

							if($resultadoDadosPavimento["pav_vaga"] != $contador){
							// Cria link que redirecioa para atualizar layout
								echo "
								<a class='btn btn-success btn-xs' id='link".$contador."' href=?page=layout_desenha_vagas&id_pavimento=".$contador.">Pavimento ".$contador."</a></td>";
							}else{
								echo "
								<a class='btn btn-success btn-xs' id='link".$contador."' onclick='confirmaMudanca()'>Pavimento ".$contador."</a></td>";
								// echo "
								// <a class='btn btn-success btn-xs sumir'  href=?page=layout_desenha_vagas&id_pavimento=".$contador."  onclick='confirmaMudanca()'>Pavimento ".$contador."</a></td>";
							}

							$contador++;
						}
						echo '<p id="paragrafoConfirmacao" style="display: none;"></p>'	;

						echo '<div style="display: inline-block;" id="divButtons"></div>';
					?>
				</div>
			
				<hr />
		
			</form>
		</div>
	</div>
</div>

<script>

	function confirmaMudanca(){
		let elementoClicado = event.target || event.srcElement;
		let idElementoCliacado = elementoClicado.id;
		
		let totalPavimento = document.getElementById("totalPavimento").value;
		
		let contadorLink = 1;
		while(contadorLink <= totalPavimento){
			let link = document.getElementById("link"+contadorLink);
			link.style.display = "none";
			contadorLink++;
		}

		let paragrafo = document.getElementById("paragrafoConfirmacao");
		paragrafo.style.display = "block";
		// Limpa o parágrafo
		paragrafo.innerText = "";
		paragrafo.innerText += "Você realmente deseja alterar o pavimento " +idElementoCliacado.replace("link", " ") + "?";

		let divButtons = document.getElementById("divButtons");

		divButtons.innerHTML += '<button type="button" class="btn btn-danger" onclick="cancelaMudanca()" id="buttonCancela" style="display: inline-block;"> Não </button>';
		divButtons.innerHTML += "<a class='btn btn-success btn-xs'  href=?page=layout_desenha_vagas&id_pavimento="+idElementoCliacado.replace("link", "")+" id='buttonConfirma' style='display: inline-block;'>Sim</a>"
		console.log("href=?page=layout_desenha_vagas&id_pavimento="+idElementoCliacado.replace("link", ""));

	}

	function cancelaMudanca(){
		let totalPavimento = document.getElementById("totalPavimento").value;
		
		let contadorLink = 1;
		while(contadorLink <= totalPavimento){
			let link = document.getElementById("link"+contadorLink);
			link.style.display = "inline-block";
			contadorLink++;
		}

		let paragrafo = document.getElementById("paragrafoConfirmacao");
		paragrafo.style.display = "none";

		let divButtons = document.getElementById("divButtons");
		divButtons.innerText = "";

	}
</script>