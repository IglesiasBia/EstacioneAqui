<?php

use Mpdf\Mpdf;

require './vendor/autoload.php';
include '../../../base/con_escola.php';
$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => [210, 297],
    "margin_top"=>40,
    'orientation' => "P",
]);

// // $stylesheet = file_get_contents("../../../assets/css/pdf.css");


$placa =  $_GET["placa_veic"];

$sql2 = "select *
from ticket 
where placa_veic='$placa' 
and status_pg = 0;";

$resultadoTicket = mysqli_query($con, $sql2);
$dadosTicket = mysqli_fetch_array($resultadoTicket);

$precoFinal = $dadosTicket["valor_total_ticket"];
//Pega os dados da vaga o veículo estava
$sql3 = "select pav_vaga, setor_vaga, num_vaga
from vagas
join ticket
on vagas.id_vaga = ticket.id_vaga
where ticket.placa_veic = '$placa' and status_pg='0';";
$resultadoVagasTicket = mysqli_query($con, $sql3);
$dadosVagasTicket = mysqli_fetch_array($resultadoVagasTicket);

//Pega dados da tabela cliente e da tabela veículo que possuem a mesma placa
$sql4 = "select * from cliente 
join veiculo 
on cliente.id_cli = veiculo.id_cli 
where veiculo.placa_veic='$placa';";
$resultadoCliVeic = mysqli_query($con, $sql4);
$dadosCliVeic = mysqli_fetch_array($resultadoCliVeic);


// $header = "<img src='../../../assets/img/logos/logo.png' height='100px' class='imglogin'>";
$header .= "<h1>Recibo </h1>";
$header .= "<h2>Estacione Aqui</h2>";

// $header .= "<hr>";
$mpdf->SetHeader("<div  name='header' class='header'>".$header."</div>");



$conteudo = "<div class='row'> <div class='col-md-2 notatitulo'> <span> ESTACIONE AQUI </span> </div> </div>";

$conteudo .= "<table class='table align-items-center mb-0'>";


$conteudo .="<tr>";
$conteudo .="<td>";
$conteudo.= "<div class='row'> <div class='col-md-2 text-secondary text-xs font-weight-bolder opacity-7'>ID</div> ";
$conteudo .="</td>";
$conteudo .="<td>";
$conteudo .= "<div class='col-md-2'>" . $dadosTicket['id_ticket'] . "</div></div>";
$conteudo .="</td>";
$conteudo .="</tr>";


$conteudo .="<tr>";
$conteudo .="<td>";
$conteudo.= "<div class='row'> <div class='col-md-2 text-secondary text-xxs font-weight-bolder opacity-7 '>HORA ENTRADA</div> ";
$conteudo .="</td>";
$conteudo .="<td>";
$conteudo .= "<div class='col-md-2'>" .  date('d/m/Y h:m:s', strtotime($dadosTicket["hr_entrada"])) . "</div></div>";
$conteudo .="</td>";
$conteudo .="</tr>";


$conteudo .="<tr>";
$conteudo .="<td>";
$conteudo.= "<div class='row'> <div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Hora Saída</div> ";
$conteudo .="</td>";
$conteudo .="<td>";
$conteudo .=  "<div class='col-md-2'>" . date('d/m/Y h:m:s', strtotime($dadosTicket["hr_saida"])) . "</div></div>";

$conteudo .="</td>";
$conteudo .="</tr>";

// $conteudo .="<tr>";
// $conteudo .="<td style='width:100cm'>";
// $conteudo .= "<hr>";
// $conteudo .="</td>";
// $conteudo .="</tr>";

$conteudo .="<tr>";
$conteudo .="<td>";
$conteudo.= "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Placa</div>";
$conteudo .="</td>";
$conteudo .="<td>";
$conteudo .=  "<div class='col-md-2'>" . $dadosTicket['placa_veic'] . "</div></div>";
$conteudo .="</td>";
$conteudo .="</tr>";


$conteudo .="<tr>";
$conteudo .="<td>";
$conteudo.= "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Marca</div>";
$conteudo .="</td>";
$conteudo .="<td>";
$conteudo .=  "<div class='col-md-2'>" . $dadosCliVeic['marca_veic'] . "</div></div>";
$conteudo .="</td>";
$conteudo .="</tr>";


$conteudo .="<tr>";
$conteudo .="<td>";
$conteudo.=  "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Modelo</div>";
$conteudo .="</td>";
$conteudo .="<td>";
$conteudo .= "<div class='col-md-2'>" . $dadosCliVeic['modelo_veic'] . "</div></div>";
$conteudo .="</td>";
$conteudo .="</tr>";


$conteudo .="<tr>";
$conteudo .="<td>";
$conteudo.= "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Pavimento</div>";
$conteudo .="</td>";
$conteudo .="<td>";
$conteudo .=  "<div class='col-md-2'>" . $dadosVagasTicket['pav_vaga'] . "</div></div>";
echo "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Vaga</div>";
$conteudo .="</td>";
$conteudo .="</tr>";


$conteudo .="<tr>";
$conteudo .="<td>";
$conteudo.= "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Marca</div>";
$conteudo .="</td>";
$conteudo .="<td>";
$conteudo .=  "<div class='col-md-2'>" . $dadosCliVeic['marca_veic'] . "</div></div>";
$conteudo .="</td>";
$conteudo .="</tr>";


$conteudo .="<tr>";
$conteudo .="<td>";
$conteudo.= "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Vaga</div>";
$conteudo .="</td>";
$conteudo .="<td>";
$conteudo .=  "<div class='col-md-2'>" . $dadosVagasTicket['setor_vaga']. $dadosVagasTicket['num_vaga'] . "</div></div>";
$conteudo .="</td>";
$conteudo .="</tr>";


if ($dadosCliVeic['cpf_cli'] != 0) {
    $conteudo .= "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Nome</div>";
    $conteudo .= "<div class='col-md-2'>" . $dadosCliVeic['nome_cli'] . "</div></div>";
    $conteudo .= "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>CPF</div>";
    $conteudo .= "<div class='col-md-2'>" . $dadosCliVeic['cpf_cli'] . "</div></div>";
}


$conteudo .="<tr>";
$conteudo .="<td>";
$conteudo.= "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Forma Pagamento</div>";
$conteudo .="</td>";
$conteudo .="<td>";
if($dadosTicket["forma_pagamento"] == 1){
    $conteudo .=  "<div class='col-md-2'>Dinheiro </div>";
}elseif($dadosTicket["forma_pagamento"] == 2){
    $conteudo .=  "<div class='col-md-2'>Débito </div>";
}else{
    $conteudo .=  "<div class='col-md-2'>Crédito </div>";
}
$conteudo .="</td>";
$conteudo .="</tr>";


$conteudo .="<tr>";
$conteudo .="<td>";
$conteudo.= "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Status Pagamento</div>";
$conteudo .="</td>";
$conteudo .="<td>";
if ($dadosTicket['status_pg'] == 0) {
    $conteudo .= "<div class='col-md-2'> Não Pago</div>";
} else {
    $conteudo .= "<div class='col-md-2'> Pago</div></div>";
}
$conteudo .="</td>";
$conteudo .="</tr>";


$conteudo .="<tr>";
$conteudo .="<td>";
$conteudo.= "<div class='row'><div class='col-md-2 text-uppercase  text-sm font-weight-bolder '>Valor Total</div>";
$conteudo .="</td>";
$conteudo .="<td>";
$conteudo .=  "<div class='col-md-2'>" . $dadosTicket['valor_total_ticket'] . "</div></div>";
$conteudo .="</td>";
$conteudo .="</tr>";


$conteudo .= "</table>";


// RAPHA, SE VC FOR DEIXAR ISSO BONITO COMENTA ESSA LINHA DE BAIXO
$mpdf->WriteHTML($conteudo);  
// DESCOMENTA ESSAS DUAS E DECOMETA TAMBEM A VARIAVEL $stylesheet LA NA PARTE DE CIMA, CUIDADO PQ AQUEL ARQUIVO DE CSS EU USO NO RELATORIO ENTAO SE VC QUISER CRIAR OUTRO ARQUIVO PRA NAO DAR RUIM É SÓ MUDAR O CAMINHO LÁ NA VARIAVEL 
// $mpdf->WriteHTML($stylesheet,1);  
// $mpdf->WriteHTML($conteudo,2);  
$mpdf->Output();

?>