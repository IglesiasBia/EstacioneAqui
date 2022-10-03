<?php
$placaVeic = $_POST[""];
//Pega data e horário atual
date_default_timezone_set('America/Sao_Paulo');    
$hr_saida = date('Y-m-d H:i:s ', time());  

// Pega id_ticket de uma certa placa não paga
$sqlIdTicket = mysqli_query($con, "select id_ticket from ticket where status_pg='0' and placa_veic='$placa'");
$resultadoIdTicket = mysqli_fetch_array($sqlIdTicket);
$idTicket = $resultadoIdTicket["id_ticket"];


 //Atualiza o horário de saída do ticket
 $sqlAlteraHoraSaida = "update ticket set hr_saida = '$hr_saida' where placa_veic='$placa';";
 $resultadoAlteraHora = mysqli_query($con, $sqlAlteraHoraSaida);


  //Pega todos os dados do ticket selecionado, pega quanto tempo o veículo ficou estacionado (primeiro pego a diferenca da hora de saída com a hora de entrada com tres dígitos após a vírgula, se ele for maior do que a diferenca da hora de saída com a hora de entrada com somente um dígito isso significa que ele passou um determinado tempo em horas e mais alguns minutos e isso significa que ele pagará aqueles minutos como uma nova hora completa, por isso adiciono um na hora total) e pega se ele pernoitou
  $sql2 = "select *,
  IF(ROUND(TIMESTAMPDIFF(MINUTE, hr_saida, hr_entrada)/60,3)<ROUND(TIMESTAMPDIFF(MINUTE, hr_saida, hr_entrada)/60), ABS(ROUND(TIMESTAMPDIFF(MINUTE, hr_saida, hr_entrada)/60))+1, ABS(ROUND(TIMESTAMPDIFF(MINUTE, hr_saida, hr_entrada)/60))) as tempo_estacionamento,
  day(hr_saida) - day(hr_entrada) as pernoite  
  from ticket where placa_veic='$placa' and status_pg = 0;";
  $resultadoTicket = mysqli_query($con, $sql2);
  $dadosTicket = mysqli_fetch_array($resultadoTicket);


   //Pega o precos do estacionamento
   $sql5 = "select preco_estac, frac_hr_estac, preco_pernoite from estacionamento where id_estac='1';";
   $resultadoEstac = mysqli_query($con, $sql5);
   $dadosEstac = mysqli_fetch_array($resultadoEstac);
   
   //Formatando hora entrada para o padrao brasileiro
   $hrEntrada = $dadosTicket['hr_entrada'];
   $hrEntradaFormat = strtotime($hrEntrada);
   $hrEntradaFinal = date('d-m-y H:i:s', $hrEntradaFormat);

   //Formatando hora saida para o padrao brasileiro
   $hrSaida = $dadosTicket['hr_saida'];
   $hrSaidaFormat = strtotime($hrSaida);
   $hrSaidaFinal = date('d-m-y H:i:s', $hrSaidaFormat);


   $precoFinal;
   $pernoite = $dadosTicket['pernoite'];
   if($pernoite == 0){
       $precoInicial = $dadosEstac['preco_estac'];
       $valorfracHora = $dadosEstac['frac_hr_estac'];

       $totalValorFracao = $valorfracHora * ($dadosTicket['tempo_estacionamento'] - 1) ; 
       $precoFinal = $precoInicial + $totalValorFracao;
       echo "<div class='col-md-2'>" . $precoFinal . "</div>";

       // // Altera no banco o valor final
       // $sqlPrecoFinal = mysqli_query($con,"update ticket set valor_total_ticket='$precoFinal' where id_ticket='$idTicket';");
       
   }else{
       $precoFinal = $dadosEstac['preco_pernoite'] * $pernoite;
       echo "<div class='col-md-2'>" . $precoFinal . "</div></div>";

       // // Altera no banco o valor final
       // $sqlPrecoFinal = mysqli_query($con,"update ticket set valor_total_ticket='$precoPernoite' where id_ticket='$idTicket';");
   }

?>

<div class="modal-dialog modal-lg ">
	<div class="modal-content cardpadding">
		<div id="top" class="row addvaga">
			<div class="col-md-11">
				<div class="modal-header">
					<!-- <h5 class="modal-title">Vagas</h5> -->
					<h2>Forma de Pagamento</h2>
					<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-backdrop="static">
					<span aria-hidden="true">&times;</span>
					</button> -->
					<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" style="color:grey">x</button>
					

					
					
					
				</div>
				<!-- <h2>Vagas</h2> -->
				<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
				<!-- <hr> -->
			</div>
		</div> 
			<!-- 1ª LINHA -->	
			<?php 
			echo $precoFinal;
			if($pavVaga == "0"){
				echo "<p>Infelizmente não foi possível encontrar o veículo.</p>";
			}else{
				
				echo "<p>O veículo de placa <strong>" . $placaVeic . "</strong> está estacionado no: </p>";
				// echo $placaVeic;
				// echo $modal; 
					echo "Pavimento: $pavVaga <br>";
					echo "Setor: $setorVaga <br>";
					echo "Número: $numVaga";
			}
			?>
			<hr />
		</form> 
    </div>
</div>