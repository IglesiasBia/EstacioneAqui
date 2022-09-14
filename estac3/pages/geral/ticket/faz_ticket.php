<?php
    //TENHO QU TERMINAR
    $placa = $_POST["placa_veic"];

    //Pega data e horário atual
    date_default_timezone_set('America/Sao_Paulo');    
    $hr_saida = date('Y-m-d H:i:s ', time());  

    // Pega id_ticket de uma certa placa não paga
    $sqlIdTicket = mysqli_query($con, "select id_ticket from ticket where status_pg='0' and placa_veic='$placa'");
    $resultadoIdTicket = mysqli_fetch_array($sqlIdTicket);
    $idTicket = $resultadoIdTicket["id_ticket"];

    // Se não existir um veículo com essa placa estacionado entra aqui 
    if($resultadoIdTicket["id_ticket"] == ""){
        header('Location: http://localhost:8080/estacione/estac3/pages/dash.php?msg=14');
    }

    //Atualiza o horário de saída do ticket
    $sqlAlteraHoraSaida = "update ticket set hr_saida = '$hr_saida' where placa_veic='$placa';";
    $resultadoAlteraHora = mysqli_query($con, $sqlAlteraHoraSaida);


    // //Pega o status do pagamento do veículo pela placa
    // $sqlStatusPagamento = "select status_pg, id_ticket from ticket where placa_veic='$placa';";
    // $resultadoStatusPagamento = mysqli_query($con, $sqlStatusPagamento);
    // $resultadoStatusPagamento = mysqli_fetch_array($resultadoStatusPagamento);   
    // $statusPg = $resultadoStatusPagamento["status_pg"];
   
    //Atualiza o horário de saída se o ticket não estiver pago
    // if($statusPg == '0'){
    //     $sql = "update ticket set hr_saida = '$hr_saida' where placa_veic='$placa';";
    //     $resultadoAlteraHora = mysqli_query($con, $sql);
    // }

//     //Pega todos os dados do ticket selecionado, pega quanto tempo o veículo ficou estacionado (primeiro pego a diferenca da hora de saída com a hora de entrada com tres dígitos após a vírgula, se ele for maior do que a diferenca da hora de saída com a hora de entrada com somente um dígito isso significa que ele passou um determinado tempo em horas e mais alguns minutos e isso significa que ele pagará aqueles minutos como uma nova hora completa, por isso adiciono um na hora total) e pega se ele pernoitou
    $sql2 = "select *,
    IF(ROUND(TIMESTAMPDIFF(MINUTE, hr_saida, hr_entrada)/60,3)<ROUND(TIMESTAMPDIFF(MINUTE, hr_saida, hr_entrada)/60), ABS(ROUND(TIMESTAMPDIFF(MINUTE, hr_saida, hr_entrada)/60))+1, ABS(ROUND(TIMESTAMPDIFF(MINUTE, hr_saida, hr_entrada)/60))) as tempo_estacionamento,
    day(hr_saida) - day(hr_entrada) as pernoite  
    from ticket where placa_veic='$placa' and status_pg = 0;";
    $resultadoTicket = mysqli_query($con, $sql2);
    $dadosTicket = mysqli_fetch_array($resultadoTicket);

    //Pega os dados da vaga o veículo estava
    $sql3 = "select pav_vaga, setor_vaga, num_vaga
    from vagas
    join ticket
    on vagas.id_vaga = ticket.id_vaga
    where ticket.placa_veic = '$placa';";
    $resultadoVagasTicket = mysqli_query($con, $sql3);
    $dadosVagasTicket = mysqli_fetch_array($resultadoVagasTicket);

    //Pega dados da tabela cliente e da tabela veículo que possuem a mesma placa
    $sql4 = "select * from cliente 
    join veiculo 
    on cliente.id_cli = veiculo.id_cli 
    where veiculo.placa_veic='$placa';";
    $resultadoCliVeic = mysqli_query($con,$sql4);
    $dadosCliVeic = mysqli_fetch_array($resultadoCliVeic); 

    //Pega o precos do estacionamento
    $sql5 = "select preco_estac, frac_hr_estac, preco_pernoite from estacionamento where id_estac='1';";
    $resultadoEstac = mysqli_query($con, $sql5);
    $dadosEstac = mysqli_fetch_array($resultadoEstac);
    
    //Formatando hora entrada para o padrao brasileiro
    $hrEntrada = $dadosTicket['hr_entrada'];
    $hrEntradaFormat = strtotime($hrEntrada);
    $hrEntradaFinal = date('d-m-y H:i:s', $hrEntradaFormat);

    //Formatando hora saida para o padrao brasileiro
    $hrSaida = $dadosTicket['hr_saida'];
    $hrSaidaFormat = strtotime($hrSaida);
    $hrSaidaFinal = date('d-m-y H:i:s', $hrSaidaFormat);

    
    
    
    // if($dadosTicket['status_pg'] == 0){
    //     echo "<div class='row'><div class='col-md-2'><a class='btn btn-warning btn-xs' href=?page=pagar_ticket&id_ticket=".$idTicket."&preco_final=".$precoFinal."> Pagar </a></div>";
    // }


    // echo "<div class='col-md-2'><button class='btn btn-danger' type='submit'>Imprimir</button></div></div>";
    echo "<div class='row'> <div class='col-md-2 notatitulo'> <span> ESTACIONE AQUI </span> </div> </div>";
    echo "<div class='row'> <div class='col-md-2 text-secondary text-xs font-weight-bolder opacity-7'>ID</div> ";
    echo "<div class='col-md-2'>" . $dadosTicket['id_ticket'] . "</div></div>";
    echo "<div class='row'> <div class='col-md-2 text-secondary text-xxs font-weight-bolder opacity-7 '>HORA ENTRADA</div> ";
    echo "<div class='col-md-2'>" . $hrEntradaFinal . "</div></div>";
    echo "<div class='row'> <div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Hora Saída</div> ";
    echo "<div class='col-md-2'>" . $hrSaidaFinal . "</div></div>";
    echo "<div class='row'><div class='col-md-12'>-----------------------------------------------------------------------------------</div></div>";
    echo "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Placa</div>";
    echo "<div class='col-md-2'>". $dadosTicket['placa_veic'] ."</div></div>";
    echo "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Chave</div>";
    if($dadosTicket['chave'] == 1){
        echo "<div class='col-md-2'> Deixou </div></div>";
    }else{
        echo "<div class='col-md-2'> Não deixou </div></div>";
    }
    echo "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Marca</div>";
    echo "<div class='col-md-2'>". $dadosCliVeic['marca_veic'] . "</div></div>";
    echo "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Modelo</div>";
    echo "<div class='col-md-2'>" . $dadosCliVeic['modelo_veic'] . "</div></div>";
    echo "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Pavimento</div>";
    echo "<div class='col-md-2'>" . $dadosVagasTicket['pav_vaga'] . "</div></div>";
    echo "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Vaga</div>"; 
    echo "<div class='col-md-2'>" . $dadosVagasTicket['setor_vaga'], $dadosVagasTicket['num_vaga'] . "</div></div>";
    echo "<div class='row'><div class='col-md-12'>-----------------------------------------------------------------------------------</div></div>"; 
    if($dadosCliVeic['cpf_cli'] != 0){
        echo "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Nome</div>";
        echo "<div class='col-md-2'>" . $dadosCliVeic['nome_cli'] . "</div></div>";
        echo "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>CPF</div>";
        echo "<div class='col-md-2'>" . $dadosCliVeic['cpf_cli'] . "</div></div>";
    }    
    echo "<div class='row'><div class='col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Status Pagamento</div>";
    if($dadosTicket['status_pg'] == 0){
        echo "<div class='col-md-2'> Não Pago</div>";
    }else{
        echo "<div class='col-md-2'> Pago</div></div>";
    }
    echo "<div class='row'><div class='col-md-12'>-----------------------------------------------------------------------------------</div></div>"; 
    echo "<div class='row'><div class='col-md-2 text-uppercase  text-sm font-weight-bolder '>Valor Total</div>";
    $precoFinal;
    $pernoite = $dadosTicket['pernoite'];
    if($pernoite == 0){
        $precoInicial = $dadosEstac['preco_estac'];
        $valorfracHora = $dadosEstac['frac_hr_estac'];

        $totalValorFracao = $valorfracHora * ($dadosTicket['tempo_estacionamento'] - 1) ; 
        $precoFinal = $precoInicial + $totalValorFracao;
        echo "<div class='col-md-2'>" . $precoFinal . "</div>";

        // // Altera no banco o valor final
        // $sqlPrecoFinal = mysqli_query($con,"update ticket set valor_total_ticket='$precoFinal' where id_ticket='$idTicket';");
        
    }else{
        $precoFinal = $dadosEstac['preco_pernoite'] * $pernoite;
        echo "<div class='col-md-2'>" . $precoFinal . "</div></div>";

        // // Altera no banco o valor final
        // $sqlPrecoFinal = mysqli_query($con,"update ticket set valor_total_ticket='$precoPernoite' where id_ticket='$idTicket';");
    }
    echo "</tr></thead><tbody>";   
    if($dadosTicket['status_pg'] == 0){
        echo "<div class='row'><div class='col-md-2'><a class='btn btn-warning btn-xs' href=?page=pagar_ticket&id_ticket=".$idTicket."&preco_final=".$precoFinal."> Pagar </a></div>";
    }
    echo "<div class='col-md-2'><button class='btn btn-danger' type='submit'>Imprimir</button></div></div>";
    if($dadosTicket == 0){
        header('Location: http://localhost:8080/estacione/estac3/pages/dash.php?msg=10');
        mysqli_close($con);
    }else{

    echo "<th class='text-secondary opacity-7'></div>";
    
}
    echo "</div>";
?>