<?php
     $id = (int) $_GET['id'];

    $sql = mysqli_query($con, "select * from funcionario where id_func = '".$id."';");
    $row = mysqli_fetch_array($sql);

    if($row["status_func"] == 1){
        $block = "update funcionario set status_func='0' where id_func='$id';";
        $resultadoBlock =  mysqli_query($con, $block); 
        header("Location:  /estacione/estac3/pages/dash.php?page=lista_func");
        // mysqli_close($con);
    }elseif($row["status_func"] == 0){
        $ativar ="update funcionario set status_func='1' where id_func='$id';";
        $resultadoAtiva = mysqli_query($con, $ativar);
        //echo $ativar;
        // mysqli_close($con);
         header("Location:  /estacione/estac3/pages/dash.php?page=lista_func");
    }
?>