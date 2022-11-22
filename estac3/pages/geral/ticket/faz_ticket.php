<?php
    //TENHO QU TERMINAR
    $placa = $_GET["placa_veic"];
    $formaPagamento = $_POST["forma_pagamento"];

    // Informa ao banco a forma de pagamento
    $sqlFormaPagamento = mysqli_query($con, "update ticket set forma_pagamento='" . $formaPagamento . "' where placa_veic='" . $placa . "' and status_pg !='1';");

    // Pega id_ticket de uma certa placa não paga
    $sqlIdTicket = mysqli_query($con, "select id_ticket from ticket where status_pg='0' and placa_veic='$placa'");
    $resultadoIdTicket = mysqli_fetch_array($sqlIdTicket);
    $idTicket = $resultadoIdTicket["id_ticket"];

    // Se não existir um veículo com essa placa estacionado entra aqui 
    if ($resultadoIdTicket["id_ticket"] == "") {

        header('Location: http://localhost/estacione/estac3/pages/dash.php?msg=14');
    }

   $sql2 = "select *
        from ticket 
        where placa_veic='$placa' 
        and status_pg = 0;";

    $resultadoTicket = mysqli_query($con, $sql2);
    $dadosTicket = mysqli_fetch_array($resultadoTicket);

    $precoFinal = $dadosTicket["valor_total_ticket"];
    //Pega os dados da vaga o veículo estava
    $sql3 = "select pav_vaga, setor_vaga, num_vaga
        from vagas
        join ticket
        on vagas.id_vaga = ticket.id_vaga
        where ticket.placa_veic = '$placa' and status_pg='0';";
    $resultadoVagasTicket = mysqli_query($con, $sql3);
    $dadosVagasTicket = mysqli_fetch_array($resultadoVagasTicket);

    //Pega dados da tabela cliente e da tabela veículo que possuem a mesma placa
    $sql4 = "select * from cliente 
        join veiculo 
        on cliente.id_cli = veiculo.id_cli 
        where veiculo.placa_veic='$placa';";
    $resultadoCliVeic = mysqli_query($con, $sql4);
    $dadosCliVeic = mysqli_fetch_array($resultadoCliVeic);

    echo "<div class='row'> <div class='col-md-2 notatitulo'> <span> ESTACIONE AQUI </span> </div> </div>";
    echo "<div class='row'> <div class='col-md-2 text-secondary text-xs font-weight-bolder opacity-7'>ID</div> ";
    echo "<div class='col-md-2'>" . $dadosTicket['id_ticket'] . "</div></div>";
    echo "<div class='row'> <div class='col-md-2 text-secondary text-xxs font-weight-bolder opacity-7 '>HORA ENTRADA</div> ";
    echo "<div class='col-md-2'>" . $dadosTicket["hr_entrada"] . "</div></div>";
    echo "<div class='row'> <div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Hora Saída</div> ";
    echo "<div class='col-md-2'>" . $dadosTicket["hr_saida"] . "</div></div>";
    echo "<div class='row'><div class='col-md-12'>-----------------------------------------------------------------------------------</div></div>";
    echo "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Placa</div>";
    echo "<div class='col-md-2'>" . $dadosTicket['placa_veic'] . "</div></div>";
    echo "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Chave</div>";
    if ($dadosTicket['chave'] == 1) {
        echo "<div class='col-md-2'> Deixou </div></div>";
    } else {
        echo "<div class='col-md-2'> Não deixou </div></div>";
    }
    echo "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Marca</div>";
    echo "<div class='col-md-2'>" . $dadosCliVeic['marca_veic'] . "</div></div>";
    echo "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Modelo</div>";
    echo "<div class='col-md-2'>" . $dadosCliVeic['modelo_veic'] . "</div></div>";
    echo "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Pavimento</div>";
    echo "<div class='col-md-2'>" . $dadosVagasTicket['pav_vaga'] . "</div></div>";
    echo "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Vaga</div>";
    echo "<div class='col-md-2'>" . $dadosVagasTicket['setor_vaga'], $dadosVagasTicket['num_vaga'] . "</div></div>";
    echo "<div class='row'><div class='col-md-12'>-----------------------------------------------------------------------------------</div></div>";
    if ($dadosCliVeic['cpf_cli'] != 0) {
        echo "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Nome</div>";
        echo "<div class='col-md-2'>" . $dadosCliVeic['nome_cli'] . "</div></div>";
        echo "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>CPF</div>";
        echo "<div class='col-md-2'>" . $dadosCliVeic['cpf_cli'] . "</div></div>";
    }

    echo "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Forma Pagamento</div>";
    if($dadosTicket["forma_pagamento"] == 1){
        echo "<div class='col-md-2'>Dinheiro </div>";
    }elseif($dadosTicket["forma_pagamento"] == 2){
        echo "<div class='col-md-2'>Débito </div>";
    }else{
        echo "<div class='col-md-2'>Crédito </div>";
    }
    echo "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Status Pagamento</div>";
    if ($dadosTicket['status_pg'] == 0) {
        echo "<div class='col-md-2'> Não Pago</div>";
    } else {
        echo "<div class='col-md-2'> Pago</div></div>";
    }
    echo "<div class='row'><div class='col-md-12'>-----------------------------------------------------------------------------------</div></div>";
    echo "<div class='row'><div class='col-md-2 text-uppercase  text-sm font-weight-bolder '>Valor Total</div>";

    echo "<div class='col-md-2'>" . $dadosTicket['valor_total_ticket'] . "</div></div>";


    echo "</tr></thead><tbody>";
    if ($dadosTicket['status_pg'] == 0) {
        echo "<div class='row'><div class='col-md-2'><a class='btn btn-warning btn-xs' href=?page=pagar_ticket&id_ticket=" . $idTicket . "&preco_final=" . $precoFinal . "> Pagar </a></div>";
    }
    echo "<div class='col-md-2'><button class='btn btn-danger' type='submit'>Imprimir</button></div></div>";
    if ($dadosTicket == 0) {
        echo $sql2;
        header('Location: http://localhost/estacione/estac3/pages/dash.php?msg=10');
        mysqli_close($con);
    } else {

        echo "<th class='text-secondary opacity-7'></div>";
    }
    echo "</div>";
?>