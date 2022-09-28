<?php
$pavimentoAtual = $_GET["id_pavimento"];

$resultadoTipoVagaCarro = $_POST["carroVaga"];

$resultadoTipoVagaMoto = $_POST["motoVaga"];

// Transforma as strings em arrays
$arrayTipoVagaCarro = explode(',',$resultadoTipoVagaCarro);

$arrayTipoVagaMoto = explode(',',$resultadoTipoVagaMoto);

$sqlPegaVagas = mysqli_query($con, "select * from vagas where tipo_vaga != '3' and pav_vaga = '".$pavimentoAtual."' order by 'num_vaga';");
$resutadoPegaVagas = mysqli_fetch_array($sqlPegaVagas);

$contadorTamanhoArrayMoto = 0;
while($contadorTamanhoArrayMoto <= count($arrayTipoVagaMoto)){
    // Pega somente o numero da vaga carro atual
    $numeroVagaAtualMoto = str_replace("imgMoto", "", $arrayTipoVagaMoto[$contadorTamanhoArrayMoto]);
    // Pega id pelo número da vaga

    $sqlPegaIdVaga = mysqli_query($con,"select id_vaga from vagas where num_vaga=".$numeroVagaAtualMoto." and pav_vaga = '".$pavimentoAtual."';");
    $resultadoIdVagaAtual = mysqli_fetch_array($sqlPegaIdVaga);

    // Id da avaga atual 
    $idVagaMotoAtual = $resultadoIdVagaAtual["id_vaga"];

    // Atualiza tipo vaga para 1 (moto)
    $sqlMudaTipoVagaCarro = mysqli_query($con, "update vagas set tipo_vaga='1' where id_vaga=".$idVagaMotoAtual.";");


    $contadorTamanhoArrayMoto++;
}

$contadorTamanhoArrayCarro = 1;
while($contadorTamanhoArrayCarro <= count($arrayTipoVagaCarro)){
    // Pega somente o numero da vaga carro atual
    $numeroVagaAtualCarro = str_replace("imgCarro", "", $arrayTipoVagaCarro[$contadorTamanhoArrayCarro]);
    // Pega id pelo número
    $sqlPegaIdVaga = mysqli_query($con,"select id_vaga from vagas where num_vaga=".$numeroVagaAtualCarro." and pav_vaga = '".$pavimentoAtual."';");
    $resultadoIdVagaAtual = mysqli_fetch_array($sqlPegaIdVaga);

    $idVagaCarroAtual = $resultadoIdVagaAtual["id_vaga"];

    // Atualiza tipo vaga para 0 (carro)
    $sqlMudaTipoVagaCarro = mysqli_query($con, "update vagas set tipo_vaga='0' where id_vaga=".$idVagaCarroAtual.";");

    $contadorTamanhoArrayCarro++;
}
// PAREI AQUI
// TODO: fazer um header location para vagas
?>