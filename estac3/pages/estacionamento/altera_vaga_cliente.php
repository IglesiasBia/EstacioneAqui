<?php

$pavimentoAtual = $_GET["id_pavimento"]; 
    
$placaVeic = $_POST["placaVeic"];
$numVaga = $_POST["numeroVaga"];
if($placaVeic == "" || $numVaga  == ""){
    header("Location:  /estacione/estac3/pages/dash.php?page=lista_vagas&msg=faltaDadosAlterarVaga&id_pavimento=".$pavimentoAtual);
}
// Verifica se o veículo já está escionado
$sqlVerificaSeVeiculaJaEstaEstacionado = mysqli_query($con, "select id_vaga from ticket where placa_veic='".$placaVeic."' and status_pg='0';");
$respostaVerificaSeVeiculoJaEstaEstacionado = mysqli_fetch_array($sqlVerificaSeVeiculaJaEstaEstacionado);


$sqlPegaDadosVaga = mysqli_query($con, "select id_vaga, tipo_vaga from vagas where num_vaga =".$numVaga. " and pav_vaga='".$pavimentoAtual."';" );
$resultadoDadosVaga = mysqli_fetch_array($sqlPegaDadosVaga);


// Pega tipo do veículo (carro ou moto)
$sqlPegaTipoVeiculo = mysqli_query($con, "select tipo_veic 
from veiculo 
join ticket 
on veiculo.placa_veic = ticket.placa_veic 
where veiculo.placa_veic='".$placaVeic."' and ticket.status_pg='0';");
$resultadoPegaTipoVeiculo = mysqli_fetch_array($sqlPegaTipoVeiculo);
// Verifica se veículo já está estacionado
if($resultadoDadosVaga["tipo_vaga"] != $resultadoPegaTipoVeiculo["tipo_veic"]){
    header("Location:  /estacione/estac3/pages/dash.php?page=lista_vagas&msg=vagaIncompativel&id_pavimento=".$pavimentoAtual);
}
elseif($respostaVerificaSeVeiculoJaEstaEstacionado["id_vaga"] != '0'){
    // echo "oi";
    // echo $respostaVerificaSeVeiculoJaEstaEstacionado["id_vaga"];
    header("Location:  /estacione/estac3/pages/dash.php?page=lista_vagas&msg=veiculoEstacionado&id_pavimento=".$pavimentoAtual);
}
// Verirfica se vaga é compatível com veículo

// Insere na vaga
elseif($respostaVerificaSeVeiculoJaEstaEstacionado["id_vaga"] == 0){

    $idVaga = $resultadoDadosVaga["id_vaga"];

    $sqlAlteraStatusVaga = mysqli_query($con, "update vagas set status_vaga='1' where id_vaga=".$idVaga .";");

    $sqlAlteraVagaCliente = mysqli_query($con, "update ticket set  id_vaga=".$idVaga."  where placa_veic='".$placaVeic."' and status_pg='0'");

    header("Location:  /estacione/estac3/pages/dash.php?page=lista_vagas&msg=sucessoInserirVeiculoVaga&id_pavimento=".$pavimentoAtual);
}

?>