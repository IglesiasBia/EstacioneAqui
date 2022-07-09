<?php
    //TENHO QU TERMINAR
    $placa = $_POST["placa_veic"];

    //Pega data e horário atual
    date_default_timezone_set('America/Sao_Paulo');    
    $hr_saida = date('Y-m-d H:i:s ', time());  
    //echo $hr_saida;

    $sql4 = "select status_pg from ticket where placa_veic='$placa';";
    // echo $sql4;
    $resultado4 = mysqli_query($con, $sql4);
    $row4 = mysqli_fetch_array($resultado4);   
    $statusPg = $row4["status_pg"];
   
    //Atualiza o horário de saída se o ticket não estiver pago
    if($statusPg == '0'){
        $sql = "update ticket set hr_saida = '$hr_saida' where placa_veic='$placa';";
        $resultado = mysqli_query($con, $sql);
    }

    // //Atualiza o horário de saída 
    // $sql = "update ticket set hr_saida = '$hr_saida' where placa_veic='$placa';";
    // $resultado = mysqli_query($con, $sql);

    // Pega todos os dados do ticket selecionado
    $sql2 = "select *, TIMEDIFF(hr_saida, hr_entrada) as tempo  from ticket where placa_veic='$placa';";
    $resultado2 = mysqli_query($con, $sql2);
    $row = mysqli_fetch_array($resultado2);

    //Pega os dados da vaga o veículo estava
    $sql3 = "select pav_vaga, setor_vaga, num_vaga
    from vagas
    join ticket
    on vagas.id_vaga = ticket.id_vaga
    where ticket.placa_veic = '$placa';";
    $resultado3 = mysqli_query($con, $sql3);
    $row3 = mysqli_fetch_array($resultado3);

    //Pega o preco inicial e a fracao por hora do estacionamento
    $sql5 = "select preco_estac, frac_hr_estac from estacionamento where id_estac='1';";
    $resultado5 = mysqli_query($con, $sql5);
    $row5 = mysqli_fetch_array($resultado5);

    echo "<table class='table align-items-center mb-0'>";
    echo "<thead><tr>";
    echo "<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>ID</th>";
    echo "<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2'>Hora Entrada</th>";
    echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Hora Saída</th>";
    echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Valor Total</th>";
    echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Chave</th>";
    echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Placa</th>";
    echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Pavimento</th>";
    echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Vaga</th>";    
    echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Status Pagamento</th>";
    echo "<th class='text-secondary opacity-7'></th>";
    echo "</tr></thead><tbody>";

    echo "<tr>";
    echo "<td>" . $row['id_ticket'] . "</td>";
    //$data = strtotime($row['hr_entrada']);
    // echo $data;
    //echo $data->format('d-m-Y H:i:s');
    //Formatando hora entrada para o padrao brasileiro
    $hrEntrada = $row['hr_entrada'];
    $hrEntradaFormat = strtotime($hrEntrada);
    $hrEntradaFinal = date('d-m-y H:i:s', $hrEntradaFormat);
    echo "<td>" . $hrEntradaFinal . "</td>";
    //Formatando hora saida para o padrao brasileiro
    $hrSaida = $row['hr_saida'];
    $hrSaidaFormat = strtotime($hrSaida);
    $hrSaidaFinal = date('d-m-y H:i:s', $hrSaidaFormat);
    echo "<td>" . $hrSaidaFinal . "</td>";

    // $horaEntrada = $row['hr_entrada'];
    // $hrSaida = $row['hr_saida'];
    // $interval = $hrSaida->diff($horaEntrada);
    
    // echo ($interval->format("%a") * 24) + $interval->format("%h"). " hours". $interval->format(" %i minutes ");
    //TERMINAR PRECO
    $precoInicial = $row5['preco_estac'];
    //echo $row['tempo'];
    //Pega o tempo total que ficou no estacionamento
    $tempo = $row['tempo'];
    //Pega os dois primeiros digitos de tempo(hora) e passa pra number
    $total = substr($tempo,-8,2);

    //Se tempo for menor ou igual uma hora
    if($total <= "01:00:00"){
        echo "<td>" . $row5['preco_estac'] . "</td><br>";
    }
    //Se tempo passar de uma hora
    elseif($total > "01:00:00"){
        //echo $total;
        //Pega a fracao por hora
        $fracHora = $row5['frac_hr_estac'];
        //Calcula enquanto hora for maior que contador uma fracao sera adicionada
        $i=1;
        while($total > $i){
            $precoInicial += $fracHora;
            $i++;
        }
        echo "<td>" . $precoInicial . "</td>";
    }

    if($row['chave'] == 0){
        echo "<td> Deixou </td>";
    }else{
        echo "<td> Não deixou </td>";
    }
    echo "<td>" . $row['placa_veic'] . "</td>";
    echo "<td>" . $row3['pav_vaga'] . "</td>";
    echo "<td>" . $row3['setor_vaga'], $row3['num_vaga'] . "</td>";
    if($row['status_pg'] == 0){
        echo "<td> Não Pago</td>";
    }elseif($row['status_pg'] ==1){
        echo "<td> Pago</td>";
    }
    // echo "<td>" . $row['status_pg'] . "</td>";
    echo "</tr>";
    echo "<tr><button class='btn btn-danger' type='submit'>Imprimir</button></tr>";
    echo "</table>";
?>