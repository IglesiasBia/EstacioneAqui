<?php

// echo "oi";
$pavimentoAtual = $_GET["id_pavimento"];

$vagasExistentes = $_POST["vagasExistentes"];
$rua = $_POST["rua"];
$nada = $_POST["nada"];
echo $nada;
$arrayNada = explode(',',$nada); 

$arrayRua = explode(',',$rua);
// echo $arrayRua[0];
// echo $vagasExistentes. "<br>";
$arrayVagas = explode(',',$vagasExistentes);


$sqlDadosPavimento = mysqli_query($con, "select num_vaga from vagas where pav_vaga=".$pavimentoAtual);
$resultadoDadosPaviemento = mysqli_fetch_array($sqlDadosPavimento);


if($resultadoDadosPaviemento["num_vaga"] == null){
    
    $contadorEspaco = 1;
    $espacosTotal = 132;
    // Enquanto houver espaco entra aqui
    while($contadorEspaco <= $espacosTotal){
        // sql para criar novo espaco
        $sqlGeraPavimento = "insert into vagas value (0, '3', '".$pavimentoAtual."', '3', 1, 'A', '".$contadorEspaco."');";

        $resultadoSqlGeraPavimento = mysqli_query($con, $sqlGeraPavimento);
    
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

$contadorRua = 0;
$numRua = 1;
while($contadorRua < count($arrayRua)){
    $posicaoRua = $arrayRua[$contadorRua];
    echo $posicaoRua;
    $numeroPosicaoRua = str_replace("imgCarro","",$posicaoRua);
    $sqlPegaIdRua = mysqli_query($con,"select id_vaga from vagas where num_vaga='".$numeroPosicaoRua ."' and pav_vaga='".$pavimentoAtual."';");
            
    $resultadoPegaIdRua = mysqli_fetch_array($sqlPegaIdRua);
    $idRua = $resultadoPegaIdRua["id_vaga"];

    // echo $idVaga."<br>";

    $sqlCriaRua = "update vagas set status_vaga='3', pav_vaga='".$pavimentoAtual."', tipo_vaga='3', id_estac=1, setor_vaga='A',num_vaga='".$numeroPosicaoRua ."' where id_vaga=".$idRua.";";
    $resultadoCriaVaga = mysqli_query($con, $sqlCriaRua);
    $contadorRua++;
}

$contadorNada = 0;
$numNada = 1;
while($contadorNada < count($arrayNada)){
    $posicaoNada = $arrayNada[$contadorNada];
    echo $posicaoNada;
    $numeroPosicaoNada = str_replace("imgCarro","",$posicaoNada);
    $sqlPegaIdNada = mysqli_query($con,"select id_vaga from vagas where num_vaga='".$numeroPosicaoNada ."' and pav_vaga='".$pavimentoAtual."';");
            
    $resultadoPegaIdNada = mysqli_fetch_array($sqlPegaIdNada);
    $idNada = $resultadoPegaIdNada["id_vaga"];

    // echo $idVaga."<br>";

    $sqlCriaNada = "update vagas set status_vaga='4', pav_vaga='".$pavimentoAtual."', tipo_vaga='4', id_estac=1, setor_vaga='A',num_vaga='".$numeroPosicaoNada ."' where id_vaga=".$idNada.";";
    echo $sqlCriaNada . "<br>";
    $resultadoCriaVaga = mysqli_query($con, $sqlCriaNada);
    $contadorNada++;
}
// echo "oi";
header('Location: /estacione/estac3/pages/dash.php?page=form_altera_setor&id_pavimento='.$pavimentoAtual);
