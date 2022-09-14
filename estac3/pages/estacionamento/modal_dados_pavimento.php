<?php

    $quantidadePavimentos = $_POST["quantidadePavimentos"];

?>


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
		<form action="?page=insere_setor_layout" method="post">
		<?php
        $contador = 1;
        while( $contador <= $quantidadePavimentos){
            echo
			'<div class="row">
				<div class="form-group col-md-12">
					<label for="">
						Quantas linhas/setores existem no pavimento ' . $contador . '
					</label>
					<input type="text" name="vagasLinha' . $contador . '">
				</div>
			</div>';
			$contador++;
        }

		?>
		<button type="submit" class="btn btn-danger">Salvar</button>
		</form>

		<hr />
		</form>
	</div>
</div>