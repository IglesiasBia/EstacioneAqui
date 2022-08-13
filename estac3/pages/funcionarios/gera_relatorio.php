<?php

    $tipoRelatorio = $_POST["tipoRelatorio"];
    $dtInicio = $_POST["dt_inicio"];
    $dtFinal = $_POST["dt_final"];

    if($tipoRelatorio == ""){
        header("Location:  /estacione/estac3/pages/dash.php?page=form_relatorio&msg=16");
    }elseif($tipoRelatorio != "" && $dtInicio != "" && $dtFinal != ""){
        if($tipoRelatorio == "fatura"){
            $sqlRelatorioFatura = "select sum(valor_total_ticket) as credito_total from ticket where hr_saida between '$dtInicio' and '$dtFinal';";
            $resultadoRelatorioFatura = mysqli_query($con,$sqlRelatorioFatura);
            $dadosRelatorioFatura = mysqli_fetch_array($resultadoRelatorioFatura);
            // echo $dtInicio . " ";
            // echo $dtFinal . " ";
            echo $dadosRelatorioFatura["credito_total"];
        }elseif($tipoRelatorio == "quantidade"){
           // $sqlRelatorioQuantidade = "select sum(id_ticket) as total_veiculos, sum(tipo_veic == 1) as total_carros, sum(tipo_veic == 0) as total_motos from veiculo join ticket on ticket.placa_veic where where hr_saida between '$dtInicio' and '$dtFinal';"
           $sqlRelatorioQuantidade = "select count(id_ticket) as total_veiculos from ticket where hr_saida between '$dtInicio' and '$dtFinal';";
           $resultadoRelatorioQuantidade = mysqli_query($con,$sqlRelatorioQuantidade);
           $dadosRelatorioQuantidade = mysqli_fetch_array($resultadoRelatorioQuantidade);
           echo $dadosRelatorioQuantidade["total_veiculos"];
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