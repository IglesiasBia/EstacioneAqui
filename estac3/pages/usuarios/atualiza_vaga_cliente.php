<?php

    //Dados da tabela veiculo 
    $placa = $_POST["placa_veic"];
    $tipo = $_POST["tipo_veic"];
    $chave = $_POST["chave"];

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
    $sqlVeic = "update veiculo set placa_veic='$placa', tipo_veic ='$tipo',id_cli='$id' where placa_veic='$placa';";
    $resultado = mysqli_query($con, $sqlVeic);

    //Atualiza tabela cliente
    $sqlCli = "update cliente set id_cli='$id', nome_cli='$nome',cpf_cli='$cpf' where id_cli='$id';";
    $resultado = mysqli_query($con, $sqlCli);


    //Pega id da nova vaga
    $sqlVaga = "select id_vaga 
    from vagas 
    where pav_vaga='$pav' and setor_vaga ='$setor' and num_vaga='$numVaga';";
    $resultadoVaga = mysqli_query($con, $sqlVaga);
    $row = mysqli_fetch_array($resultadoVaga);
    $idVaga = $row["id_vaga"];

    //Atualiza tabela ticket
    $sqlTicket = "update ticket set id_vaga='$idVaga', status_pg='$statusPg'  where placa_veic='$placa';";
    $resultado = mysqli_query($con, $sqlTicket);

    if($resultado){
        header('Location: http://localhost:8080/estacione/estac3/pages/dash.php?page=form_att_cliente&msg=6');
        mysqli_close($con);
    }else{
        header('Location: http://localhost:8080/estacione/estac3/pages/dash.php?page=form_att_cliente&msg=7');
    }

?>