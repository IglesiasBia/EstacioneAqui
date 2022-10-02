<div class="modal-dialog modal-lg ">
	<div class="modal-content cardpadding">
		<div id="top" class="row addvaga">
			<div class="col-md-11">
				<div class="modal-header">
					<!-- <h5 class="modal-title">Vagas</h5> -->
					<h2>Vagas</h2>
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