<?php

// echo "oi";
$pavimentoAtual = $_GET["id_pavimento"];
echo $pavimentoAtual;
// $pavimentoAtual = $_POST["pavimentoAtual"];
// echo $pavimentoAtual;
$vagasExistentes = $_POST["vagasExistentes"];
$rua = $_POST["rua"];
// echo $vagasExistentes. "<br>";
$arrayVagas = explode(',',$vagasExistentes);


$sqlDadosPavimento = mysqli_query($con, "select num_vaga from vagas where pav_vaga=".$pavimentoAtual);
$resultadoDadosPaviemento = mysqli_fetch_array($sqlDadosPavimento);


if($resultadoDadosPaviemento["num_vaga"] == null){
    
    $contadorEspaco = 1;
    $espacosTotal = 121;
    // Enquanto houver espaco entra aqui
    while($contadorEspaco <= $espacosTotal){
        // sql para criar novo espaco
        $sqlGeraPavimento = "insert into vagas value (0, '3', '".$pavimentoAtual."', '3', 1, 'A', '".$contadorEspaco."');";

        $resultadoSqlGeraPavimento == mysqli_query($con, $sqlGeraPavimento);
    
        $contadorEspaco++;
    }

}
$contadorVagas = 0;
$numVaga = 1;

while($contadorVagas <count($arrayVagas)){
    $posicaoImgCarro = $arrayVagas[$contadorVagas];
    // echo $posicaoImgCarro;
    // echo $numVaga;
    
    $numeroPosicaoImgCarro = str_replace("imgCarro","",$posicaoImgCarro);
    // echo $numeroPosicaoImgCarro;
    // echo "select id_vaga from vagas where num_vaga='".$numeroPosicaoImgCarro ."' and pav_vaga='".$pavimentoAtual."';<br>";
    $sqlPegaIdVagaAtual = mysqli_query($con,"select id_vaga from vagas where num_vaga='".$numeroPosicaoImgCarro ."' and pav_vaga='".$pavimentoAtual."';");

        
    $resultadoPegaIdVagaAtual = mysqli_fetch_array($sqlPegaIdVagaAtual);
    $idVaga = $resultadoPegaIdVagaAtual["id_vaga"];
// echo $idVaga."<br>";

    $sqlCriaVaga = "update vagas set status_vaga='0', pav_vaga='".$pavimentoAtual."', tipo_vaga='0', id_estac=1, setor_vaga='A',num_vaga='".$numeroPosicaoImgCarro ."' where id_vaga=".$idVaga.";";
    $resultadoCriaVaga = mysqli_query($con, $sqlCriaVaga);

    // echo $sqlCriaVaga ."<br>";
    $contadorVagas++;
    $numVaga++;
}
// echo "oi";
header('Location: /estacione/estac3/pages/dash.php?page=form_altera_setor&id_pavimento='.$pavimentoAtual);
