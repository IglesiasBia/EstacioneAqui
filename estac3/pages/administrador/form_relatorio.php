<?php
	// Somente nível administrador possui acesso
  	$nivel_necessario = 2;
    include "../base/testa_nivel.php";
?> 
<form action="?page=gera_relatorio" method="post">
   
<!-- PRIMEIRA LINHA -->
    

    <div class="card">
		<div class="cardperfil">

            <div class="row">
                <div class="col-md-4">
                    <label class="fs-4"for="dt_inicio">Tipo Relatório:
                        <select class="selectrel" name="tipoRelatorio" required>
                            <option selected>Selecione</option>
                            <option value="fatura">Fatura</option>
                            <option value="quantidade">Quantidade de veículos</option>
                            <option value="faturaEQuantidade">Fatura e quantidade</option>
                            <option value="entradaSaida">Entrada/Saída</option>
                    </select>
                    </label>
                </div>
    
                <div class="col-md-4">
                    <label class="fs-4" for="dt_inicio">
                        Data Inicio: <br>
                        <input type="date" name="dt_inicio">
                    </label>
                    
                </div>
        
                <div class="col-md-4">
                    <label class="fs-4" for="dt_final">
                        Data Final: <br>
                        <input type="date" name="dt_final">
                    </label>
                </div>
            </div>
            <div class="row"><button type="submit" class="btn btn-danger btnrel">Gerar</button></div>

		</div>
	</div>

    
</form> 
            

            
           