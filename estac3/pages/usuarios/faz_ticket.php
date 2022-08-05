<?php
    //TENHO QU TERMINAR
    $placa = $_POST["placa_veic"];

    //Pega data e horário atual
    date_default_timezone_set('America/Sao_Paulo');    
    $hr_saida = date('Y-m-d H:i:s ', time());  

    //Pega o status do pagamento do veículo pela placa
    $sql4 = "select status_pg, id_ticket from ticket where placa_veic='$placa';";
    $resultado4 = mysqli_query($con, $sql4);
    $resultadoStatusPg = mysqli_fetch_array($resultado4);   
    $statusPg = $resultadoStatusPg["status_pg"];
   
    //Atualiza o horário de saída se o ticket não estiver pago
    if($statusPg == '0'){
        $sql = "update ticket set hr_saida = '$hr_saida' where placa_veic='$placa';";
        $resultadoAlteraHora = mysqli_query($con, $sql);
    }

    //Pega todos os dados do ticket selecionado, pega quanto tempo o veículo ficou estacionado (primeiro pego a diferenca da hora de saída com a hora de entrada com tres dígitos após a vírgula, se ele for maior do que a diferenca da hora de saída com a hora de entrada com somente um dígito isso significa que ele passou um determinado tempo em horas e mais alguns minutos e isso significa que ele pagará aqueles minutos como uma nova hora completa, por isso adiciono um na hora total) e pega se ele pernoitou
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

    //Pega o preco inicial e a fracao por hora do estacionamento
    $sql5 = "select preco_estac, frac_hr_estac, preco_pernoite from estacionamento where id_estac='1';";
    $resultadoEstac = mysqli_query($con, $sql5);
    $dadosEstac = mysqli_fetch_array($resultadoEstac);

    echo "<table class='table align-items-center mb-0'>";
    echo "<thead><tr>";
    echo "<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>ID</th>";
    echo "<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2'>Hora Entrada</th>";
    echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Hora Saída</th>";
    echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Valor Total</th>";
    echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Chave</th>";
    echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Placa</th>";
    echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Marca</th>";
    echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Modelo</th>";
    if($dadosCliVeic['cpf_cli'] != 0){
        echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Nome</th>";
        echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>CPF</th>";
    }
    echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Pavimento</th>";
    echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Vaga</th>";    
    echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Status Pagamento</th>";
    echo "<th class='text-secondary opacity-7'></th>";
    echo "</tr></thead><tbody>";   

    if($dadosTicket == 0){
        header('Location: http://localhost:8080/estacione/estac3/pages/dash.php?msg=10');
        mysqli_close($con);
    }else{

    echo "<tr>";
    echo "<td>" . $dadosTicket['id_ticket'] . "</td>";

    //Formatando hora entrada para o padrao brasileiro
    $hrEntrada = $dadosTicket['hr_entrada'];
    $hrEntradaFormat = strtotime($hrEntrada);
    $hrEntradaFinal = date('d-m-y H:i:s', $hrEntradaFormat);
    echo "<td>" . $hrEntradaFinal . "</td>";
    //Formatando hora saida para o padrao brasileiro
    $hrSaida = $dadosTicket['hr_saida'];
    $hrSaidaFormat = strtotime($hrSaida);
    $hrSaidaFinal = date('d-m-y H:i:s', $hrSaidaFormat);
    echo "<td>" . $hrSaidaFinal . "</td>";

    $pernoite = $dadosTicket['pernoite'];
    if($pernoite == 0){
        $precoInicial = $dadosEstac['preco_estac'];
        $valorfracHora = $dadosEstac['frac_hr_estac'];

        $totalValorFracao = $valorfracHora * ($dadosTicket['tempo_estacionamento'] - 1) ; 
        $precoFinal = $precoInicial + $totalValorFracao;
        echo "<td>" . $precoFinal . "</td>";
        
    }else{
        $precoPernoite = $dadosEstac['preco_pernoite'] * $pernoite;
        echo "<td>" . $precoPernoite . "</td>";
    }

    if($dadosTicket['chave'] == 1){
        echo "<td> Deixou </td>";
    }else{
        echo "<td> Não deixou </td>";
    }
    echo "<td>" . $dadosTicket['placa_veic'] . "</td>";
    echo "<td>" . $dadosCliVeic['marca_veic'] . "</td>";
    echo "<td>" . $dadosCliVeic['modelo_veic'] . "</td>";
    if($dadosCliVeic['cpf_cli'] != 0){
        echo "<td>" . $dadosCliVeic['nome_cli'] . "</td>";
        echo "<td>" . $dadosCliVeic['cpf_cli'] . "</td>";
    }
    echo "<td>" . $dadosVagasTicket['pav_vaga'] . "</td>";
    echo "<td>" . $dadosVagasTicket['setor_vaga'], $dadosVagasTicket['num_vaga'] . "</td>";
    if($dadosTicket['status_pg'] == 0){
        echo "<td> Não Pago</td>";
    }else{
        echo "<td> Pago</td>";
    }

    echo "</tr>";
    if($dadosTicket['status_pg'] == 0){
        echo "<a class='btn btn-warning btn-xs' href=?page=pagar_ticket&id_ticket=".$resultadoStatusPg['id_ticket']."> Pagar </a>";
    }

    echo "<tr><button class='btn btn-danger' type='submit'>Imprimir</button></tr>";
}
    echo "</table>";
?>