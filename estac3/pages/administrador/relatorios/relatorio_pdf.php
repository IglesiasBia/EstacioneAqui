<?php

// require_once __DIR__ . '/vendor/autoload.php';
// // $file = $_FILES["local_doc"]["tmp_name"];
// // $dir = "C:/xampp/htdocs/siscrud/sis/documento/upload/" . $_FILES["local_doc"]["name"];



// //$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/opt/lampp/htdocs/documento/upload/']);

// $mpdf = new \Mpdf\Mpdf();
// $mpdf->WriteHTML('<h1>Hello world!</h1>');
// $mpdf->Output();





$tipoRelatorio = $_POST["tipoRelatorio"];
$dtInicio = $_POST["dt_inicio"];
$dtFinal = $_POST["dt_final"];

// echo $tipoRelatorio;
// echo $dtInicio;
// echo $dtFinal;

if($tipoRelatorio == "Selecione" || $dtInicio == "" || $dtFinal == ""){
    header("Location:  /estacione/estac3/pages/dash.php?page=form_relatorio&msg=16");
}elseif($tipoRelatorio != "Selecione" && $dtInicio != "" && $dtFinal != ""){

    if($tipoRelatorio != "entradaSaida"){
        // Soma o valor total de todos os tickets que utilizaram o estacionamento em um determinado espaco de tempo
        $sqlRelatorioFatura = "select sum(valor_total_ticket) as credito_total from ticket where hr_saida between '$dtInicio' and '$dtFinal';";
        $resultadoRelatorioFatura = mysqli_query($con,$sqlRelatorioFatura);
        $dadosRelatorioFatura = mysqli_fetch_array($resultadoRelatorioFatura);

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

        if($tipoRelatorio == "fatura"){
            echo $dadosRelatorioFatura["credito_total"];
        }elseif($tipoRelatorio == "quantidade"){
            echo "$carro carros e $moto motocicletas utilizaram o estacionamento durante o período de $dtInicio a $dtFinal";
        }else{
            echo $dadosRelatorioFatura["credito_total"];
            echo "$carro carros e $moto motocicletas utilizaram o estacionamento durante o período de $dtInicio a $dtFinal";
        }
        

    }elseif($tipoRelatorio == "entradaSaida"){
        $sqlListaVeiculos = mysqli_query($con, "select * from ticket join veiculo on ticket.placa_veic = veiculo.placa_veic where status_pg=1 and hr_saida between '$dtInicio' and '$dtFinal';");
        
        $tipoRel =  "
            <div class='cabecalho'>
                <div class='row'>
                    <h2> Relatório de Entrada/Saída de Veículos</h2>
                </div>
            </div>
            <hr>
            ";

        // Cabecalho da tabela de relatório
        $theadDados = "<table class='table align-items-center mb-0'>";
        $theadDados .= "<thead><tr>";
        $theadDados .="<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Placa</th>";
        $theadDados .="<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2'>Tipo Veículo</th>";
        $theadDados .= "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 d-none d-md-table-cell'>Marca</th>";
        $theadDados .="<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 d-none d-md-table-cell'>Modelo</th>";
        $theadDados .="<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 d-none d-md-table-cell'>Hora Entrada</th>";
        $theadDados .="<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 d-none d-md-table-cell'>Hora Saída</th>";
        $theadDados .= "</tr></thead><tbody>";

        // echo "<table class='table align-items-center mb-0'>";
        // echo "<thead><tr>";
        // echo "<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Placa</th>";
        // echo "<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2'>Tipo Veículo</th>";
        // echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 d-none d-md-table-cell'>Marca</th>";
        // echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 d-none d-md-table-cell'>Modelo</th>";
        // echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 d-none d-md-table-cell'>Hora Entrada</th>";
        // echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 d-none d-md-table-cell'>Hora Saída</th>";
        // echo "<th class='text-secondary opacity-7'>Hora Saída</th>";
        // echo "</tr></thead><tbody>";
        while($resultadoListaVeiculos = mysqli_fetch_array($sqlListaVeiculos)){
            $dados = "<tr>";
            $dados .= "<td>".$resultadoListaVeiculos['placa_veic']."</td>";

            // echo "<tr>";
            //   echo "<td>".$resultadoListaVeiculos['placa_veic']."</td>";
              if($resultadoListaVeiculos['tipo_veic']==1){
                $dados .="<td>Carro</td>";
                // echo "<td>Carro</td>";
              }else{
                $dados .="<td>Moto</td>";
                // echo "<td>Moto</td>";
              }
              $dados .="<td class='d-none d-md-table-cell'>".$resultadoListaVeiculos['marca_veic']."</td>";
              $dados .="<td class='d-none d-md-table-cell'>".$resultadoListaVeiculos['modelo_veic']."</td>";
              $dados .="<td class='d-none d-md-table-cell'>".$resultadoListaVeiculos['hr_entrada']."</td>";
              $dados .="<td class='d-none d-md-table-cell'>".$resultadoListaVeiculos['hr_saida']."</td>";
              
            //   echo "<td class='d-none d-md-table-cell'>".$resultadoListaVeiculos['marca_veic']."</td>";
            //   echo "<td class='d-none d-md-table-cell'>".$resultadoListaVeiculos['modelo_veic']."</td>";
            //   echo "<td class='d-none d-md-table-cell'>".$resultadoListaVeiculos['hr_entrada']."</td>";
            //   echo "<td class='d-none d-md-table-cell'>".$resultadoListaVeiculos['hr_saida']."</td>";


            }
            $dados .="</tr></tbody></table><hr>";
        // echo "</tr></tbody></table><hr>";

    }
}




require_once __DIR__ . '/vendor/autoload.php';

try {
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->debug = true;
    $mpdf->WriteHTML($theadDados,$dados);
    $mpdf->Output();
} catch (\Mpdf\MpdfException $e) { // Note: safer fully qualified exception 
                                   //       name used for catch
    // Process the exception, log, print etc.
    echo $e->getMessage();
}
?>
