<?php
	// Somente nível administrador possui acesso
  	$nivel_necessario = 2;
    include "../base/testa_nivel.php";
?> 
<form action="?page=gera_relatorio" method="post">
   
<!-- PRIMEIRA LINHA -->
    
</form>
    <div class="card">
		<div class="cardperfil">
            <div class="row">  
                <div class="col-md-4">
                    <label class="fs-4"for="dt_inicio">Tipo Relatório:</label>
                </div>

                <div class="col-md-4 ">
                    <label class="fs-4" for="dt_inicio">Data Inicio:</label>
                </div>

                <div class="col-md-4 ">
                    <label class="fs-4" for="dt_final">Data Final:</label>
                </div>
            </div>
    
            <div class="row">
                <div class="col-md-4">
                    <select class="selectrel" name="tipoRelatorio" id="" required>
                        <option selected>Selecione</option>
                        <option value="fatura">Fatura</option>
                        <option value="quantidade">Quantidade de veículos</option>
                        <option value="faturaEQuantidade">Fatura e quantidade</option>
                        <option value="entradaSaida">Entrada/Saída</option>
                    </select>
                </div>
    
                <div class="col-md-4">
                    <input type="date" name="dt_inicio">
                </div>
        
                <div class="col-md-4">
                    <input type="date" name="dt_final">
                </div>
            </div>
            <div class="row"><button type="submit" class="btn btn-danger btnrel">Gerar</button></div>

		</div>
	</div>

    
    
            

            
           