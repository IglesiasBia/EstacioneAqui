<?php
    //TENHO QU TERMINAR
    $placa = $_POST["placa_veic"];

    //Pega data e horário atual
    date_default_timezone_set('America/Sao_Paulo');    
    $hr_saida = date('Y-m-d h:i:s ', time());  

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

    //Pega todos os dados do ticket selecionado
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
    echo "<td>" . $row['hr_entrada'] . "</td>";
    echo "<td>" . $row['hr_saida'] . "</td>";
    // echo "<td>" . $row['tempo'] . "</td>";
    // $total = 5;
    //TERMINAR PRECO
    $precoInicial = $row5['preco_estac'];
    if($row['tempo'] <= "01:00:00"){
        echo "<td>" . $row5['preco_estac'] . "</td>";
    }elseif($row['tempo'] > "01:00:00"){
        $tempo= $row['tempo'];
        $total = substr($tempo,-8,2);
        $i=1;

        echo $precoInicial;
        echo $row['tempo'];
        // $total += 1;
        echo "<td>" . $total . "</td>";
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