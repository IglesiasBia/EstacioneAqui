<?php
    $placa = $_POST["placa_veic"];

    //Pega pela placa os dados da tebela veículo e cliente com o mesmo id 
    $sql = "select * from veiculo 
    join cliente 
    on veiculo.id_cli = cliente.id_cli
    where placa_veic='$placa';";
    $resultadoVeicCli = mysqli_query($con, $sql);
    $veiculoCliente = mysqli_fetch_array($resultadoVeicCli);

    //Pega pela placa os dados da tebela veículo e ticket com a mesma placa
    $sql2 ="select * from veiculo 
    join ticket 
    on veiculo.placa_veic = ticket.placa_veic
    where veiculo.placa_veic='$placa';";
    $resultadoVeicTicket = mysqli_query($con, $sql2);
    $veicTicket = mysqli_fetch_array($resultadoVeicTicket);

    //Pega os dados da vaga que o veículo estava
    $sql3 = "select pav_vaga, setor_vaga, num_vaga
    from vagas
    join ticket
    on vagas.id_vaga = ticket.id_vaga
    where ticket.placa_veic = '$placa';";
    $resultadoVagasTicket = mysqli_query($con, $sql3);
    $vagasTicket = mysqli_fetch_array($resultadoVagasTicket);

    if($veiculoCliente == 0){
        header('Location: http://localhost:8080/estacione/estac3/pages/dash.php?page=form_att_cliente&msg=10');
        mysqli_close($con);
    }
?>