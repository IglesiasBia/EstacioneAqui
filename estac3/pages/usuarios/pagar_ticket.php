<?php

    $id_ticket = (int) $_GET['id_ticket'];

    $sql = mysqli_query($con, "select status_pg from ticket where id_ticket = '".$id_ticket."';");
    $row = mysqli_fetch_array($sql);

    $sqlIdVaga = mysqli_query($con, "select id_vaga from ticket where id_ticket = '".$id_ticket."';");
    $resultadoIdVaga = mysqli_fetch_array($sqlIdVaga);
    $idVaga = $resultadoIdVaga["id_vaga"];

    $sqlAlteraStatusPg = mysqli_query($con, "update ticket set status_pg=1 where id_ticket='".$id_ticket."';");
    
    $sqlStatusVaga = mysqli_query($con, "update vagas set status_vaga=0 where id_vaga='$idVaga';");

    header("Location:http://localhost:8080/estacione/estac3/pages/dash.php");

    // $sqlStatusVaga = "select status_vaga from vagas"
    // if($row["status_pg"] == 1){
    //     $block = "update funcionario set status_func='0' where id_func='$id';";
    //     $resultadoBlock =  mysqli_query($con, $block); 
    //     header("Location:  /estacione/estac3/pages/dash.php?page=lista_func");
    //     // mysqli_close($con);
    // }elseif($row["status_pg"] == 0){
    //     $ativar ="update funcionario set status_func='1' where id_func='$id';";
    //     $resultadoAtiva = mysqli_query($con, $ativar);
    //     //echo $ativar;
    //     // mysqli_close($con);
    //      header("Location:  /estacione/estac3/pages/dash.php?page=lista_func");
    // }
?>