<?php

    $tipoRelatorio = $_POST["tipoRelatorio"];
    $dtInicio = $_POST["dt_inicio"];
    $dtFinal = $_POST["dt_final"];

    if($tipoRelatorio == ""){
        header("Location:  /estacione/estac3/pages/dash.php?page=form_relatorio&msg=16");
    }elseif($tipoRelatorio != "" && $dtInicio != "" && $dtFinal != ""){

        if($tipoRelatorio == "fatura" || $tipoRelatorio == "faturaEQuantidade"){
            // Soma o valor total de todos os tickets que utilizaram o estacionamento em um determinado espaco de tempo
            $sqlRelatorioFatura = "select sum(valor_total_ticket) as credito_total from ticket where hr_saida between '$dtInicio' and '$dtFinal';";
            $resultadoRelatorioFatura = mysqli_query($con,$sqlRelatorioFatura);
            $dadosRelatorioFatura = mysqli_fetch_array($resultadoRelatorioFatura);

            if($tipoRelatorio == "fatura"){
                echo $dadosRelatorioFatura["credito_total"];
            }
            $creditoTotal = $dadosRelatorioFatura["credito_total"];
            
        }elseif($tipoRelatorio == "quantidade" || $tipoRelatorio == "faturaEQuantidade"){
            // Pega placa_veic que utilizaram o estacionamento durante um período de tempo 
            $resultadoRelatorioQuantidade = mysqli_query($con,"select placa_veic from ticket where hr_saida between '$dtInicio' and '$dtFinal';");

            $carro = 0;
            $moto = 0;
            // Enquando houver placa_veic esse while roda
            while($dadosRelatorioQuantidade = mysqli_fetch_array($resultadoRelatorioQuantidade)){
                // Pega o id-Vaga pela placa
                $sqlIdVaga = mysqli_query($con,"select id_vaga from ticket where placa_veic='".$dadosRelatorioQuantidade["placa_veic"]."';");
                $resultadoIdVaga = mysqli_fetch_array($sqlIdVaga);
                
                // Pega o tipo da avaga pelo id
                $sqlTipoVagaVeic = mysqli_query($con,"select tipo_vaga from vagas where id_vaga='".$resultadoIdVaga["id_vaga"]."';");
                $resultadoTipoVagaVeic = mysqli_fetch_array($sqlTipoVagaVeic);
                // Adiciona mais um a variável dependendo se for carro ou moto 
                if($resultadoTipoVagaVeic["tipo_vaga"] = 1){
                    $carro += 1;
                }else{
                    $moto += 1;
                }
            }
            echo "$carro carros e $moto motocicletas utilizaram o estacionamento durante o período de $dtInicio a $dtFinal";

            if($tipoRelatorio == "quantidade"){
                echo $dadosRelatorioQuantidade["total_veiculos"];
                }
                $creditoTotal = $dadosRelatorioQuantidade["total_veiculos"];


        }
    }
    
    // $sql = "select sum(valor_total_ticket) as credito_total,
    // count(id_ticket) as total_usuarios from ticket where hr_entrada like '$dtInicio%';";
    // $resultadoRelatorio = mysqli_query($con,$sql);
    // $dadosRelatorio = mysqli_fetch_array($resultadoRelatorio);
  
    
    // echo "<table class='table align-items-center mb-0'>";
    // echo "<thead><tr>";
    // echo "<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Crédito Total</th>";
    // echo "<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2'>Tickets Emitidos</th>";
    // echo "<th class='text-secondary opacity-7'></th>";
    // echo "</tr></thead><tbody>";   

    // echo "<td>" . $dadosRelatorio["credito_total"] . "</td>";
    // echo "<td>" . $dadosRelatorio["total_usuarios"] . "</td>";
    // echo "</tr>";
    // echo "</table>";
?>