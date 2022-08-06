<?php
    $placa = $_POST["placa_veic"];
    $tipo = $_POST["tipo_veic"];
    $chave = $_POST["chave"];
    $marca = $_POST["marca_veic"];
    $modelo = $_POST["modelo_veic"];

    // Cria um novo cliete
    $sqlCriaCliente = "insert into cliente values(0,'Cliente não declarado','0');";
    $resultadoCriaCliente = mysqli_query($con, $sqlCriaCliente);

    //Pega o último cliente criado
    $sqlUltimoCliente ="SELECT * FROM cliente ORDER BY id_cli DESC LIMIT 1 ;";
    $resultadoUltimoCliente = mysqli_query($con, $sqlUltimoCliente);
    $final = mysqli_fetch_array($resultadoUltimoCliente);
    $idCli = $final["id_cli"];

    // Pesquisa na query se já existe uma placa 
    $sqlExistePlaca = mysqli_query($con, "select placa_veic from veiculo where placa_veic='$placa';");
    $resultadoExistePlaca = mysqli_fetch_array($sqlExistePlaca);

    // Se não existir placa
    if($resultadoExistePlaca["placa_veic"] != $placa){
        //Cria o veículo 
        $sqlCriaVeiculo = "insert into veiculo values('$placa','$tipo',$idCli, '$marca','$modelo');";
        echo $sqlCriaVeiculo;
        $resultadoCriaVeiculo = mysqli_query($con, $sqlCriaVeiculo);
        
    }
    // Atualiza id_cli da tabela veiculo
    $sqlAtulizaIDCli = mysqli_query($con ,"update veiculo set id_cli='$idCli' where placa_veic='$placa';");

    //Pega horário atual do sistema
    date_default_timezone_set('America/Sao_Paulo');    
    $hr_entrada = date('Y-m-d H:i:s ', time());  

    //Cria ticket
    $sqlCriaTicket = "insert into ticket values(0,'$hr_entrada','$hr_entrada','0', '$chave', '$placa','1','0');";
    echo $sqlCriaTicket;
    $resultadoCriaTicket = mysqli_query($con, $sqlCriaTicket);
    
    if($resultadoCriaTicket){
        header('Location: http://localhost:8080/estacione/estac3/pages/dash.php?msg=1');
        mysqli_close($con);
    }else{
        echo "nao";
        // header('Location: \siscrud/index.php?page=lista_cli&msg=4');
        mysqli_close($con);
    }
?>