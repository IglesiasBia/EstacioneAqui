<?php

    $id_ticket = (int) $_GET['id_ticket'];
    $precoFinal = (int) $_GET['preco_final'];

    // Pega o id_vaga que o veículo estav estacionado 
    $sqlIdVaga = mysqli_query($con, "select id_vaga from ticket where id_ticket = '".$id_ticket."';");
    $resultadoIdVaga = mysqli_fetch_array($sqlIdVaga);
    $idVaga = $resultadoIdVaga["id_vaga"];

    // Atualiza preco e status do ticket
    $sqlAlteraStatusPg = mysqli_query($con, "update ticket set status_pg=1, valor_total_ticket=$precoFinal where id_ticket='".$id_ticket."';");
    
    // Muda status da vaga para vazio
    $sqlStatusVaga = mysqli_query($con, "update vagas set status_vaga=0 where id_vaga='$idVaga';");

    if($sqlAlteraStatusPg){
        header("Location:http://localhost:8080/estacione/estac3/pages/dash.php?msg=15");
    }
    



?>