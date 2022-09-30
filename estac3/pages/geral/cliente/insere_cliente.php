<?php
    $placa = strtoupper($_POST["placa_veic"]);
    $tipo = $_POST["tipo_veic"];
    $chave = $_POST["chave"];
    $marca = strtoupper($_POST["marca_veic"]);
    $modelo = strtoupper($_POST["modelo_veic"]);

    if($placa == "" || $tipo == "" || $chave == "" || $marca == "" || $modelo == ""){
        header('Location: http://localhost:8080/estacione/estac3/pages/dash.php?msg=dadosIncompletos');
    }

    // Cria um novo cliente
    $sqlCriaCliente = "insert into cliente values(0,'Cliente não declarado','0');";
    $resultadoCriaCliente = mysqli_query($con, $sqlCriaCliente);

    //Pega o último cliente criado
    $sqlUltimoCliente ="SELECT * FROM cliente ORDER BY id_cli DESC LIMIT 1 ;";
    $resultadoUltimoCliente = mysqli_query($con, $sqlUltimoCliente);
    $final = mysqli_fetch_array($resultadoUltimoCliente);
    $idCli = $final["id_cli"];

    // Pesquisa na query se já existe uma placa e o status_pg
    $sqlExistePlaca = mysqli_query($con, "select veiculo.placa_veic, ticket.status_pg from veiculo join ticket on veiculo.placa_veic = ticket.placa_veic where veiculo.placa_veic='$placa';");
    $resultadoExistePlaca = mysqli_fetch_array($sqlExistePlaca);


    // Se não existir placa
    if($resultadoExistePlaca["placa_veic"] == null){

        $sqlCriaVeiculo = "insert into veiculo values('$placa','$tipo',$idCli, '$marca','$modelo');";

        $resultadoCriaVeiculo = mysqli_query($con, $sqlCriaVeiculo);
    }

$sqlBuscaTicketNaoPago = mysqli_query($con, "select * from ticket where placa_veic='$placa' and status_pg='0';");
$respostaBuscaTicketNaoPago = mysqli_fetch_array($sqlBuscaTicketNaoPago);
    if($respostaBuscaTicketNaoPago != null){
        header('Location: http://localhost:8080/estacione/estac3/pages/dash.php?msg=13');
    }else{

        // Se o status_pg for pago insere dados no sistema 
        $sqlAtulizaIDCli = mysqli_query($con ,"update veiculo set id_cli='$idCli' where placa_veic='$placa';");
        
        //Pega horário atual do sistema
        date_default_timezone_set('America/Sao_Paulo');    
            $hr_entrada = date('Y-m-d H:i:s ', time());  
        
            //Cria ticket
            $sqlCriaTicket = "insert into ticket values(0,'$hr_entrada','$hr_entrada',0, '$chave', '$placa',0,0);";
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
    }
    