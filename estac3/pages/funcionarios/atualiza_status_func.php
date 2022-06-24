<?php

    $id = (int) $_GET['id'];

    $sql = mysqli_query($con, "select * from usuarios where id = '".$id."';");
    $row = mysqli_fetch_array($sql);

    if($row["ativo"] == 1){
        $block = "update usuarios set ativo='0' where id='$id';";
        $resultadoBlock =  mysqli_query($con, $block); 
        header("Location:  /estac3/pages/dash.php?page=lista_func");
        // mysqli_close($con);
    }elseif($row["ativo"] == 0){
        $ativar ="update usuarios set ativo='1' where id='$id';";
        $resultadoAtiva = mysqli_query($con, $ativar);
        //echo $ativar;
        // mysqli_close($con);
         header("Location:  /estac3/pages/dash.php?page=lista_func");
    }
?>