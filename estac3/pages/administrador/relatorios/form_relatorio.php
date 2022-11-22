<?php
// Somente nível administrador possui acesso
$nivel_necessario = 2;
include "../base/testa_nivel.php";
?>
<!-- <form action="?page=gera_relatorio" method="post"> -->
<form action="http://localhost/estacione/estac3/pages/administrador/relatorios/teste_pdf.php" method="post" target="_blank">
<!-- <form action="?page=teste_pdf" method="post" target="_blank"> -->
    <!-- PRIMEIRA LINHA -->


    <div class="card">
        <div class="cardperfil">


            <div class="row">
                <div class="col-md-4">
                    <label class="fs-4" for="dt_inicio">Tipo Relatório:
                        <select class="selectrel" name="tipoRelatorio" id="tipoRelatorio" required onchange="alteraInput()">
                            <option value="selecione">Selecione</option>
                            <option value="fatura">Fatura</option>
                            <option value="quantidade">Quantidade de veículos</option>
                            <option value="entradaSaida">Entrada/Saída</option>
                            <option value="funcionarios">Funcionários</option>
                        </select> 
                    </label>
                </div>
                
                <div class="col-md-6" id="selectStatusFunc" style="display:none;">
                    <label class="fs-4" for="statusFunc">Status dos funcionários: <br>
                        <select class="selectrel" name="statusFunc" required>
                            <option  selected>Selecione</option>
                            <option value="ativo">Ativos</option>
                            <option value="inativo">Inativos</option>
                            <option value="ativoEInativo">Ativos e Inativos</option>
                        </select>
                    </label>
                </div>
                <div class="col-md-4" id="dtInicio">
                    <label class="fs-4" for="dt_inicio">
                        Data Inicio: <br>
                        <input required type="date" name="dt_inicio">
                    </label>
                </div>
                <div class="col-md-4" id="dtFinal">
                    <label class="fs-4" for="dt_final">
                        Data Final: <br>
                        <input required type="date" name="dt_final">
                    </label>
                </div>
            </div>
            <div class="row"><button type="submit" class="btn btn-danger btnrel">Gerar</button></div>

        </div>
    </div>
</form>

<script>
    function alteraInput() {

        let tipoRelatorio = document.getElementById("tipoRelatorio").value;
        console.log(tipoRelatorio)
        if (tipoRelatorio == "funcionarios") {
            // document.getElementById("dtInicio").style.display = 'none';
            // document.getElementById("dtFinal").style.display = 'none';
            document.getElementById("selectStatusFunc").style.display = 'block';
        }else{
            // document.getElementById("dtInicio").style.display = 'block';
            // document.getElementById("dtFinal").style.display = 'block';
            document.getElementById("selectStatusFunc").style.display = 'none';
        }
    }
</script>