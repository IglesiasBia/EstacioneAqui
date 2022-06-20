<?php

    $id = (int) $_GET['id'];

    $sql = mysqli_query($con, "select * from usuarios where id = '".$id."';");
    $row = mysqli_fetch_array($sql);

    if($row["ativo"] == 1){
        //muda o status do func de ativo para bloqueado 
        $block = "update usuarios set ativo='0' where id='$id';";
        $resultadoBlock =  mysqli_query($con, $block);
        header("Location:  /estac3/pages/dash.php?page=lista_func"); 
    }elseif($row["ativo"] == 0){
        //muda o status do func de bloqueado para ativo
        $ativar ="update usuarios set ativo='1' where id='$id';";
        $resultadoAtiva = mysqli_query($con, $ativar);
        header("Location:  /estac3/pages/dash.php?page=lista_func");
    }
?>