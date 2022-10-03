<?php
// Pega pvimento atual pela URL
$pavimentoAtual = $_GET["id_pavimento"];

$setorA = $_POST["setorA"];
$setorB = $_POST["setorB"];
$setorC = $_POST["setorC"];
$setorD = $_POST["setorD"];
$setorE = $_POST["setorE"];
echo $setorA."<br>";
echo $setorE;


// SETOR A
// Se houver vaga no setor A entra aqui
if($setorA != ""){
    // Transforma os valores do input em arrays
    $arraySetorA = explode(',',$setorA);
    $contadorSetorA = 0;
    // Enquanto houver vagas do setor A entra aqui 
    while($contadorSetorA < count($arraySetorA)){
        // Pega id da vaga pelo número da vaga
        $sqlPegaIdVagaSetorA = mysqli_query($con, "select id_vaga from vagas where num_vaga='".$arraySetorA[$contadorSetorA]."' and pav_vaga='".$pavimentoAtual."';");
        $resultadoPegaIdVagaSetorA = mysqli_fetch_array($sqlPegaIdVagaSetorA);
    
        // Atualiza o setor da vaga
        $sqlInsereVagaSetorA = mysqli_query($con, "update vagas set setor_vaga='A' where id_vaga=".$resultadoPegaIdVagaSetorA["id_vaga"].";" ) ;
    
        $contadorSetorA++;
    }
}

// SETOR B
// Se houver vaga no setor B entra aqui
if($setorB != ""){
    // Transforma os valores do input em arrays
    $arraySetorB = explode(',',$setorB);
    $contadorSetorB = 0;
    // Enquanto houver vagas do setor A entra aqui 
    while($contadorSetorB < count($arraySetorB)){
        // Pega id da vaga pelo número da vaga
        $sqlPegaIdVagaSetorB = mysqli_query($con, "select id_vaga from vagas where num_vaga='".$arraySetorB[$contadorSetorB]."' and pav_vaga='".$pavimentoAtual."';");
        $resultadoPegaIdVagaSetorB = mysqli_fetch_array($sqlPegaIdVagaSetorB);
        
        // Atualiza o setor da vaga
        $sqlInsereVagaSetorA = mysqli_query($con, "update vagas set setor_vaga='B' where id_vaga=".$resultadoPegaIdVagaSetorB["id_vaga"].";" ) ;
        
        $contadorSetorB++;
    }
}

// SETOR C
// Se houver vaga no setor C entra aqui
if($setorC != ""){
    // Transforma os valores do input em arrays
    $arraySetorC = explode(',',$setorC);
    $contadorSetorC = 0;
    // Enquanto houver vagas do setor C entra aqui 
    while($contadorSetorC < count($arraySetorC)){
        // Pega id da vaga pelo número da vaga
        $sqlPegaIdVagaSetorC = mysqli_query($con, "select id_vaga from vagas where num_vaga='".$arraySetorC[$contadorSetorC]."' and pav_vaga='".$pavimentoAtual."';");
        $resultadoPegaIdVagaSetorC = mysqli_fetch_array($sqlPegaIdVagaSetorC);
    
        // Atualiza o setor da vaga
        $sqlInsereVagaSetorC = mysqli_query($con, "update vagas set setor_vaga='C' where id_vaga=".$resultadoPegaIdVagaSetorC["id_vaga"].";" ) ;
    
        $contadorSetorC++;
    }
}

// SETOR D
// Se houver vaga no setor D entra aqui
if($setorD != ""){
    // Transforma os valores do input em arrays
    $arraySetorD = explode(',',$setorD);
    $contadorSetorD = 0;
    // Enquanto houver vagas do setor D entra aqui 
    
    while($contadorSetorD < count($arraySetorD)){
        // Pega id da vaga pelo número da vaga
        $sqlPegaIdVagaSetorD = mysqli_query($con, "select id_vaga from vagas where num_vaga='".$arraySetorD[$contadorSetorD]."' and pav_vaga='".$pavimentoAtual."';");
        $resultadoPegaIdVagaSetorD = mysqli_fetch_array($sqlPegaIdVagaSetorD);
    
        // Atualiza o setor da vaga
        $sqlInsereVagaSetorD = mysqli_query($con, "update vagas set setor_vaga='D' where id_vaga=".$resultadoPegaIdVagaSetorD["id_vaga"].";" ) ;
    
        $contadorSetorD++;
    }
}

// SETOR E
// Se houver vaga no setor E entra aqui
if($setorE != ""){

    // Transforma os valores do input em arrays
    $arraySetorE = explode(',',$setorE);
    $contadorSetorE = 0;
    // Enquanto houver vagas do setor E entra aqui 
    while($contadorSetorE < count($arraySetorE)){
        // Pega id da vaga pelo número da vaga
        $sqlPegaIdVagaSetorE = mysqli_query($con, "select id_vaga from vagas where num_vaga='".$arraySetorE[$contadorSetorE]."' and pav_vaga='".$pavimentoAtual."';");
        $resultadoPegaIdVagaSetorE = mysqli_fetch_array($sqlPegaIdVagaSetorE);
    
        // Atualiza o setor da vaga
        $sqlInsereVagaSetorE = mysqli_query($con, "update vagas set setor_vaga='E' where id_vaga=".$resultadoPegaIdVagaSetorE["id_vaga"].";" ) ;

        $contadorSetorE++;
    }
}

header('Location: /estacione/estac3/pages/dash.php?page=form_altera_tipo_vaga&id_pavimento='.$pavimentoAtual);
