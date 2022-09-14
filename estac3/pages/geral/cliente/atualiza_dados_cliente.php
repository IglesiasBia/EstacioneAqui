<?php

    // if($statusPg == '0'){
    //     $sql = "update ticket set hr_saida = '$hr_saida' where placa_veic='$placa';";
    //     $resultadoAlteraHora = mysqli_query($con, $sql);
    // }
    
    //Dados da tabela veiculo 
    $placa = $_POST["placa_veic"];
    $tipo = $_POST["tipo_veic"];
    $chave = $_POST["chave"];
    $marca = $_POST["marca_veic"];
    $modelo = $_POST["modelo_veic"];

    //Dados da tabela cliente
    $id = $_POST["id_cli"];
    $nome = $_POST["nome_cli"];
    $cpf = $_POST["cpf_cli"];

    //Dados da tabela vaga
    $pav = $_POST["pav_vaga"];
    $setor = $_POST["setor_vaga"];
    $numVaga = $_POST["num_vaga"];

    //Dados da tabela ticket
    $statusPg = $_POST["status_pg"];

    //Atualiza tabela veiculo
    $sqlVeic = "update veiculo set placa_veic='$placa', tipo_veic ='$tipo',id_cli='$id', marca_veic='$marca', modelo_veic='$modelo' where placa_veic='$placa';";
    $resultado = mysqli_query($con, $sqlVeic);

    //Atualiza tabela cliente
    $sqlCli = "update cliente set id_cli='$id', nome_cli='$nome',cpf_cli='$cpf' where id_cli='$id';";
    $resultado = mysqli_query($con, $sqlCli);


    //Pega id da nova vaga
    $sqlVaga = "select id_vaga, status_vaga
    from vagas 
    where pav_vaga='$pav' and setor_vaga ='$setor' and num_vaga='$numVaga';";
    $resultadoVaga = mysqli_query($con, $sqlVaga);
    $row = mysqli_fetch_array($resultadoVaga);
    $idVaga = $row["id_vaga"];

    // Atualiza status da nova vaga 
    $sqlAtulizaStatusVaga = "update vagas set status_vaga=1 where id_vaga='$idVaga';";
    $resultadoAtulizaStatusVaga = mysqli_query($con,$sqlAtulizaStatusVaga);

    //Atualiza tabela ticket
    $sqlTicket = "update ticket set id_vaga='$idVaga', status_pg='$statusPg'  where placa_veic='$placa';";
    $resultado = mysqli_query($con, $sqlTicket);

    if($resultado){
        header('Location: http://localhost:8080/estacione/estac3/pages/dash.php?page=busca_cliente_atualizar&msg=6');
        mysqli_close($con);
    }else{
        header('Location: http://localhost:8080/estacione/estac3/pages/dash.php?page=busca_cliente_atualizar&msg=7');
    }

?>