<?php
    $pav = strtoupper($_POST["pav_vaga"]);
    $tipo = $_POST["tipo_vaga"];
    $setor = strtoupper($_POST["setor_vaga"]);
    $numVagaInicial = $_POST["num_vaga_inicial"];
    $numVagaFinal = $_POST["num_vaga_final"];

    $sqlBuscaVagas = mysqli_query($con, "select * from vagas;");
    $resultadoBuscaVagas = mysqli_fetch_array($sqlBuscaVagas);

    $sqlPegaUltimoNumeroVaga = mysqli_query($con, "select num_vaga from vagas where pav_vaga='$pav' and setor_vaga='$setor' order by num_vaga desc;");
    $resultadoPegaUltimoNumeroVaga = mysqli_fetch_array($sqlPegaUltimoNumeroVaga);

    if ($pav == "" || $tipo == "" || $setor  == "" || $numVagaInicial  == "") {
        header("Location:  /estacione/estac3/pages/dash.php?page=view_estac&msg=erroInserirVaga");
    }

    $vagaExiste = false;

    if($numVagaInicial == 0 || $numVagaInicial <= $numVagaFinal ){
        if($numVagaInicial-1 > $resultadoPegaUltimoNumeroVaga["num_vaga"]){
            header("Location:  /estacione/estac3/pages/dash.php?page=view_estac&msg=numVagaInvalido");
        }else{
            while($numVagaInicial <= $numVagaFinal){
                while ($resultadoBuscaVagas = mysqli_fetch_array($sqlBuscaVagas)) {
                    if ($pav == $resultadoBuscaVagas["pav_vaga"] && $setor == $resultadoBuscaVagas["setor_vaga"] && $numVagaInicial == $resultadoBuscaVagas["num_vaga"]) {
                        $vagaExiste = true;
                        break;
                    }
                }
                if ($vagaExiste) {
                    header("Location:  /estacione/estac3/pages/dash.php?page=view_estac&msg=VagaExistente");
                }
                // Se vaga não existir ela é inserida no banco
                else {
                    $sql = "insert into vagas values(0, '0', '$pav','$tipo','1','$setor','$numVagaInicial');";
                    $resultado = mysqli_query($con, $sql);
                    header("Location:  /estacione/estac3/pages/dash.php?page=view_estac&msg=sucessoInserirVaga");
                }
                $numVagaInicial++;
            }
        }

    }
    elseif($numVagaInicial > $numVagaFinal){
        header("Location:  /estacione/estac3/pages/dash.php?page=view_estac&msg=numFinalMenorNumInicial");
    }


?>