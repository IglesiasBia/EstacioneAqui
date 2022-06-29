<?php
    //include "../base/con_escola.php";
    //include "../base/con.php";
    $nome = $_POST["nome_estac"];
    $cnpj = $_POST["cnpj_estac"];
    $num = $_POST["num_estac"];
    $preco = $_POST["preco_estac"];
    $fracao = $_POST["frac_hr_estac"];
    $quant = $_POST["quant_vaga"];
    

    $sql = "update estacionamento set id_estac='1', nome_estac='$nome', cnpj_estac='$cnpj',num_estac='$num', preco_estac='$preco', frac_hr_estac='$fracao' ,quant_vaga='$quant' where id_estac='1';";  
    $resultado = mysqli_query($con, $sql);

    if($resultado){
        // echo "foi";
        // include "dash.php?page=atualiza_estac";
        header('Location: /estac3/pages/dash.php?page=view_estac&msg=2');
        mysqli_close($con);
    }else{
        //echo "nao";
        header('Location: \siscrud/index.php?page=view_estac&msg=4');
        mysqli_close($con);
    }

?>