<div class="modal-dialog modal-lg">
	<div class="modal-content cardpadding">
		<div id="top" class="row addvaga">
			<div class="col-md-11">
				<h2> Layout </h2>
				<hr>
			</div>
		</div>
		<form action="?page=layout_teste" class="addvaga" method="post"> 
            <div class="row"> 
                <div class="form-group col-md-4"  >
                    <label for="quantidadePavimentos">Insira quantos pavimentos existem
                    </label>
                    <input type="text"  name="quantidadePavimentos" id="quantidadePavimentos" >
                    
                </div>
            </div>
			<hr />
			<div id="actions" class="row">
				<div class="col-md-12">
                <button class="btn btn-danger" data-toggle="modal" data-target="#dadosPavimento" type="submit">Salvar</button>
				</div>
			</div>
		</form> 
    </div>
</div>
<script src="layout_teste.php"></script>
