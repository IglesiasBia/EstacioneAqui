<?php
$pavimentoAtual = $_GET["id_pavimento"];

$resultadoTipoVagaCarro = $_POST["carroVaga"];

$resultadoTipoVagaMoto = $_POST["motoVaga"];

echo $resultadoTipoVagaCarro."<br>";
echo $resultadoTipoVagaMoto;

// Transforma as strings em arrays
$arrayTipoVagaCarro = explode(',', $resultadoTipoVagaCarro);

$arrayTipoVagaMoto = explode(',', $resultadoTipoVagaMoto);
// echo count($arrayTipoVagaMoto);
$sqlPegaVagas = mysqli_query($con, "select * from vagas where tipo_vaga != '3' and tipo_vaga != '4' and pav_vaga = '" . $pavimentoAtual . "' order by 'num_vaga';");
$resutadoPegaVagas = mysqli_fetch_array($sqlPegaVagas);

// Se houver alguma vaga moto entra aqui
if ($resultadoTipoVagaMoto != "") {
    // Contador para ir para posição do array
    $contadorPosicaoArrayMoto = 0;
    $contadorTamanhoArrayMoto = 1;
    while ($contadorTamanhoArrayMoto <= count($arrayTipoVagaMoto)) {
        // Pega somente o numero da vaga carro atual
        $numeroVagaAtualMoto = str_replace("imgMoto", "", $arrayTipoVagaMoto[$contadorPosicaoArrayMoto]);
        // echo $numeroVagaAtualMoto;
        // Pega id pelo número da vaga

        $sqlPegaIdVaga = mysqli_query($con, "select id_vaga from vagas where num_vaga=" . $numeroVagaAtualMoto . " and pav_vaga = '" . $pavimentoAtual . "';");
        $resultadoIdVagaAtual = mysqli_fetch_array($sqlPegaIdVaga);

        // Id da avaga atual 
        $idVagaMotoAtual = $resultadoIdVagaAtual["id_vaga"];

        // Atualiza tipo vaga para 1 (moto)
        $sqlMudaTipoVagaCarro = mysqli_query($con, "update vagas set tipo_vaga='1' where id_vaga=" . $idVagaMotoAtual . ";");

        $contadorTamanhoArrayMoto++;
        $contadorPosicaoArrayMoto++;
    }
}

if($resultadoTipoVagaCarro != ""){
    $contadorPosicaoArrayCarro = 0;
    $contadorTamanhoArrayCarro = 1;
    while ($contadorTamanhoArrayCarro <= count($arrayTipoVagaCarro)) {
        // Pega somente o numero da vaga carro atual
        $numeroVagaAtualCarro = str_replace("imgCarro", "", $arrayTipoVagaCarro[$contadorPosicaoArrayCarro]);
        // Pega id pelo número
        $sqlPegaIdVaga = mysqli_query($con, "select id_vaga from vagas where num_vaga=" . $numeroVagaAtualCarro . " and pav_vaga = '" . $pavimentoAtual . "';");
        $resultadoIdVagaAtual = mysqli_fetch_array($sqlPegaIdVaga);
    
        $idVagaCarroAtual = $resultadoIdVagaAtual["id_vaga"];
    
        // Atualiza tipo vaga para 0 (carro)
        $sqlMudaTipoVagaCarro = mysqli_query($con, "update vagas set tipo_vaga='0' where id_vaga=" . $idVagaCarroAtual . ";");
        $contadorPosicaoArrayCarro++;
        $contadorTamanhoArrayCarro++;
        
    }
}
// PAREI AQUI
// TODO: fazer um header location para vagas
header('Location: /estacione/estac3/pages/dash.php?page=lista_vagas&id_pavimento=1');
