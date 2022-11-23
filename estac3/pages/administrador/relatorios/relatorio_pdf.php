<?php

use Mpdf\Mpdf;

$tipoRelatorio = $_POST["tipoRelatorio"];
if($tipoRelatorio == "funcionarios"){
    $orientation= 'L';
}else{
    $orientation= 'P';
}
require './vendor/autoload.php';
include '../../../base/con_escola.php';
$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => [210, 297],
    "margin_top"=>70,     // margin top    -- au
    'orientation' => $orientation //RAPHA se vc tirar o P e color L a folha fica de lado, escolhe qual tipo vc acha q vai ficar melhor
]);

$stylesheet = file_get_contents("../../../assets/css/pdf.css");


$tipoRelatorio = $_POST["tipoRelatorio"];
$dtInicio = $_POST["dt_inicio"];
$dtFinal = $_POST["dt_final"];

if ($tipoRelatorio == "selecione") {
    header('Location: /estacione/estac3/pages/dash.php?page=form_relatorio');
}

// Dependendo do tipo do relatório escolhido retorna um título
if ($tipoRelatorio == "entradaSaida") {
    $conteudoHeader = "Relatório Entrada/Saída por período";
} elseif ($tipoRelatorio == "faturaEQuantidade") {
    $conteudoHeader = "Relatório Entrada/Saída e fatura por período";
} elseif ($tipoRelatorio == "quantidade") {
    $conteudoHeader = "Relatório quantidade de veículos por período";
} elseif ($tipoRelatorio == "fatura") {
    $conteudoHeader = "Relatório Fatura por período";
} elseif ($tipoRelatorio == "funcionarios") {
    if ($statusFunc = $_POST["statusFunc"] == "ativo") {
        $conteudoHeader = "Relatório de funcionários ativos";
    } elseif ($statusFunc = $_POST["statusFunc"] == "inativo") {
        $conteudoHeader = "Relatório de funcionários inativos";
    } else {

        $conteudoHeader = "Relatório de funcionários"; // Ativo ou inativo
    }
}


$header = "<img src='../../../assets/img/logos/logo.png' height='100px' class='imglogin'>";
$header .= "<h1>" . $conteudoHeader . " </h1>";
$header .= "<h2>Estacione Aqui</h2>";

$header .= "<p>Período: " . date('d/m/Y', strtotime($dtInicio)) . " à " . date('d/m/Y', strtotime($dtFinal)) . "</p>";
//TODO: NUMERO DA PAGINA
// $header .= "<hr>";
$mpdf->SetHeader("<div  name='header' class='header'>".$header."</div>");


$table = "<table class='table align-items-center mb-0'>";
$theadDados .= "<thead><tr>";
if ($tipoRelatorio == "fatura") {

    $theadDados .= "<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Dia</th>";

    $theadDados .= "<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2'>Fatura Total</th>";

    $theadDados .="</tr></thead><tbody>";

} elseif ($tipoRelatorio == "quantidade") {
    // $header .= "<p>Período: " . date('d/m/Y', strtotime($dtInicio)) . " à " . date('d/m/Y', strtotime($dtFinal)) . "</p>";
    // //TODO: NUMERO DA PAGINA
    // $header .= "<hr>";


    // // Cabecalho da tabela de relatório
    // $theadDados = "<table class='table align-items-center mb-0'>";

    $theadDados .= "<thead><tr>";
    $theadDados .= "<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Dia</th>";
    $theadDados .= "<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2'>Carros</th>";

    $theadDados .= "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 d-none d-md-table-cell'>Motocicletas</th>";
    $theadDados .= "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 d-none d-md-table-cell'>Total</th>";

    $theadDados .= "</tr></thead><tbody>";
} elseif ($tipoRelatorio != "funcionarios") {
    // $header .= "<p>Período: " . date('d/m/Y', strtotime($dtInicio)) . " à " . date('d/m/Y', strtotime($dtFinal)) . "</p>";
    // //TODO: NUMERO DA PAGINA
    // $header .= "<hr>";


    // // Cabecalho da tabela de relatório
    // $theadDados = "<table class='table align-items-center mb-0'>";

   
    $theadDados .= "<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Placa</th>";
    $theadDados .= "<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2'>Tipo Veículo</th>";
    $theadDados .= "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 d-none d-md-table-cell'>Marca</th>";
    $theadDados .= "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 d-none d-md-table-cell'>Modelo</th>";
    $theadDados .= "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 d-none d-md-table-cell'>Hora Entrada</th>";
    $theadDados .= "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 d-none d-md-table-cell'>Hora Saída</th>";
    $theadDados .= "</tr></thead><tbody>";
} else {

    //TODO: NUMERO DA PAGINA
    // $header .= "<hr>";


    // Cabecalho da tabela de relatório
    // $theadDados = "<table class='table align-items-center mb-0'>";

    $theadDados .= "<thead><tr>";
    $theadDados .= "<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Nome Funcionário</th>";
    $theadDados .= "<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2'>Nível</th>";
    if ($statusFunc = $_POST["statusFunc"] == "ativoEInativo") {
        // STATUS SE FOR INATIVO E INATIVO
        $theadDados .= "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 d-none d-md-table-cell'>E-mail</th>";
    }

    $theadDados .= "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 d-none d-md-table-cell'>Status</th>";
    $theadDados .= "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 d-none d-md-table-cell'>Data Cadastro</th>";
    $theadDados .= "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 d-none d-md-table-cell'>CPF</th>";
    $theadDados .= "</tr></thead><tbody>";
}


// Conteúdo do relatório dependendo do tipo do relatório
if ($tipoRelatorio == "entradaSaida") {
    $sqlListaVeiculos = mysqli_query($con, "select * from ticket join veiculo on ticket.placa_veic = veiculo.placa_veic where status_pg=1 and hr_saida between '$dtInicio' and '$dtFinal';");

    while ($resultadoListaVeiculos = mysqli_fetch_array($sqlListaVeiculos)) {
        $conteudo .= "<br><tr>";
        $conteudo .= "<td>" . $resultadoListaVeiculos['placa_veic'] . "</td>";
        if ($resultadoListaVeiculos['tipo_veic'] == 1) {
            $conteudo .= "<td>Carro</td>";
        } else {
            $conteudo .= "<td>Moto</td>";
        }

        $conteudo .= "<td class='d-none d-md-table-cell'>" . $resultadoListaVeiculos['marca_veic'] . "</td>";
        $conteudo .= "<td class='d-none d-md-table-cell'>" . $resultadoListaVeiculos['modelo_veic'] . "</td>";
        $conteudo .= "<td class='d-none d-md-table-cell'>" . $resultadoListaVeiculos['hr_entrada'] . "</td>";
        $conteudo .= "<td class='d-none d-md-table-cell'>" . $resultadoListaVeiculos['hr_saida'] . "</td>";
    }
    $conteudo .= "</tr>";
} elseif ($tipoRelatorio == "funcionarios") {


    $statusFunc = $_POST["statusFunc"];



    if ($statusFunc == "ativoEInativo") {
        $sqlFuncionarios = mysqli_query($con, "select * from funcionario where dt_cadastro_func between '$dtInicio' and '$dtFinal';");

        while ($resultadoFuncionarios = mysqli_fetch_array($sqlFuncionarios)) {
            $conteudo .= "<br><tr>";
            $conteudo .= "<td class='d-none d-md-table-cell'>" . $resultadoFuncionarios['nome_func'] . "</td>";
            if ($resultadoFuncionarios['nivel_func'] == "1") {
                $conteudo .= "<td class='d-none d-md-table-cell'>Funcionário Usuário</td>";
            } elseif ($resultadoFuncionarios['nivel_func'] == "2") {
                $conteudo .= "<td class='d-none d-md-table-cell'>Administrador</td>";
            } else {
                $conteudo .= "<td class='d-none d-md-table-cell'>Funcionário não-usuário</td>";
            }

            $conteudo .= "<td class='d-none d-md-table-cell'>" . $resultadoFuncionarios['email_func'] . "</td>";
            if ($resultadoFuncionarios['status_func'] == "0") {
                $conteudo .= "<td class='d-none d-md-table-cell'>Inativo</td>";
            } else {
                $conteudo .= "<td class='d-none d-md-table-cell'>Ativo</td>";
            }

            $conteudo .= "<td class='d-none d-md-table-cell'>" . 
            date('d/m/Y h:i:s', strtotime($resultadoFuncionarios['dt_cadastro_func'])) . "</td>";
            $conteudo .= "<td class='d-none d-md-table-cell'>" . $resultadoFuncionarios['cpf_func'] . "</td>";
        }
    } elseif ($statusFunc == "ativo") {
        $sqlFuncionarios = mysqli_query($con, "select * from funcionario where status_func='1'");
        while ($resultadoFuncionarios = mysqli_fetch_array($sqlFuncionarios)) {
            $conteudo .= "<br><tr>";
            $conteudo .= "<td>" . $resultadoFuncionarios['nome_func'] . "</td>";
            if ($resultadoFuncionarios['nivel_func'] == "1") {
                $conteudo .= "<td>Funcionário Usuário</td>";
            } elseif ($resultadoFuncionarios['nivel_func'] == "2") {
                $conteudo .= "<td>Administrador</td>";
            } else {
                $conteudo .= "<td>Funcionário não-usuário</td>";
            }

            $conteudo .= "<td class='d-none d-md-table-cell'>" . $resultadoFuncionarios['email_func'] . "</td>";
            $conteudo .= "<td class='d-none d-md-table-cell'>" . $resultadoFuncionarios['dt_cadastro_func'] . "</td>";
            $conteudo .= "<td class='d-none d-md-table-cell'>" . $resultadoFuncionarios['cpf_func'] . "</td>";
        }
    } elseif ($statusFunc == "inativo") {
        $sqlFuncionarios = mysqli_query($con, "select * from funcionario where status_func='0'");
        while ($resultadoFuncionarios = mysqli_fetch_array($sqlFuncionarios)) {
            $conteudo .= "<br><tr>";
            $conteudo .= "<td>" . $resultadoFuncionarios['nome_func'] . "</td>";
            if ($resultadoFuncionarios['nivel_func'] == "1") {
                $conteudo .= "<td>Funcionário Usuário</td>";
            } elseif ($resultadoFuncionarios['nivel_func'] == "2") {
                $conteudo .= "<td>Administrador</td>";
            } else {
                $conteudo .= "<td>Funcionário não-usuário</td>";
            }

            $conteudo .= "<td class='d-none d-md-table-cell'>" . $resultadoFuncionarios['email_func'] . "</td>";
            $conteudo .= "<td class='d-none d-md-table-cell'>" . $resultadoFuncionarios['dt_cadastro_func'] . "</td>";
            $conteudo .= "<td class='d-none d-md-table-cell'>" . $resultadoFuncionarios['cpf_func'] . "</td>";
        }
    }
} elseif ($tipoRelatorio == "fatura") {
    $dataMomento = $dtInicio;
    while ($dataMomento <= $dtFinal) {

        // Pega fatura do dia
        $sqlFaturaDia = "select valor_total_ticket from  ticket where hr_entrada BETWEEN '$dataMomento 00:00:00' and '$dataMomento 23:59:59';";
        $FaturaDia =  mysqli_query($con, $sqlFaturaDia);
        $resultadoFaturaDia = mysqli_fetch_array($FaturaDia);

        $dataFormatada = date('d/m/Y', strtotime($dataMomento));

        $conteudo .= "<br><tr>";

        $conteudo .= "<td class='d-none d-md-table-cell'>";
        $conteudo .= $dataFormatada . "</td>";

        $conteudo .= "<td class='d-none d-md-table-cell'>";
        $conteudo .= $resultadoFaturaDia["valor_total_ticket"] == '' ? "R$ " . 0  : "R$ " . $resultadoFaturaDia["valor_total_ticket"];

        $conteudo .=  "</td></tr>";

        // Adiciona um dia
        $sqlDataMomento = mysqli_query($con, "SELECT DATE_ADD('$dataMomento', INTERVAL 1 DAY) AS DAY;");
        $resutadoDataMomento = mysqli_fetch_array($sqlDataMomento);
        $dataMomento = $resutadoDataMomento["DAY"];
    }
} elseif ($tipoRelatorio == "quantidade") {
    $dataMomento = $dtInicio;

    while ($dataMomento <= $dtFinal) {
        // Pega carros por dia
        $sqlCarrosDia = "select COUNT(veiculo.tipo_veic) as carros from ticket join veiculo where ticket.placa_veic=veiculo.placa_veic and ticket.hr_entrada between '$dataMomento 00:00:00' and '$dataMomento 23:59:59' and status_pg=1 and veiculo.tipo_veic=0;";
        $CarrosDia =  mysqli_query($con, $sqlCarrosDia);
        $resultadoCarrosDia = mysqli_fetch_array($CarrosDia);

        $dataFormatada = date('d/m/Y', strtotime($dataMomento));

        $conteudo .= "<br><tr>";

        $conteudo .= "<td class='d-none d-md-table-cell'>";
        $conteudo .= $dataFormatada . "</td>";
        $conteudo .= "<td class='d-none d-md-table-cell'>";
        $conteudo .= $resultadoCarrosDia['carros'];
        $conteudo .= "</td>";

        // Pega motos por dia
        $sqlMotosDia = "select COUNT(veiculo.tipo_veic) as motos from ticket join veiculo where ticket.placa_veic=veiculo.placa_veic and ticket.hr_entrada between '$dataMomento 00:00:00' and '$dataMomento 23:59:59' and status_pg=1 and veiculo.tipo_veic=1;";
        $MotosDia =  mysqli_query($con, $sqlMotosDia);
        $resultadoMotosDia = mysqli_fetch_array($MotosDia);

        $conteudo .= "<td class='d-none d-md-table-cell'>";
        $conteudo .= $resultadoMotosDia['motos'];
        $conteudo .= "</td>";
        $conteudo .=  "<br/>";

        $conteudo .= "<td class='d-none d-md-table-cell'>";
        $conteudo .= $resultadoMotosDia['motos'] + $resultadoCarrosDia['carros'];
        $conteudo .= "</td></tr>";

        // Adiciona um dia
        $sqlDataMomento = mysqli_query($con, "SELECT DATE_ADD('$dataMomento', INTERVAL 1 DAY) AS DAY;");
        $resutadoDataMomento = mysqli_fetch_array($sqlDataMomento);
        $dataMomento = $resutadoDataMomento["DAY"];
    }
}


$endDados .= "</tbody></table>";


$mpdf->SetFooter('<tfoot><b>{PAGENO} / {nbpg}</b></tfoot>');




$html = $table. $theadDados . $conteudo . $endDados;
$mpdf->WriteHTML($stylesheet,1);  
$mpdf->WriteHTML($html,2);  
$mpdf->Output();
