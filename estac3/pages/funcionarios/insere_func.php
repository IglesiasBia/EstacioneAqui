<?php
    //include "../../base/con_escola.php";
    include "../../base/con.php";

    $nome = $_POST["nome_func"];
    $usu = $_POST["usu_func"];
    $senha = $_POST["senha_usu"];
    $email = $_POST["email_func"];
    $nivel = $_POST["nivel_func"];
    $status = $_POST["status_func"];
    date_default_timezone_set('America/Sao_Paulo');    
    $cadastro = date('Y-d-m h:i:s ', time());  
    $sql = "insert into usuarios values(0, '$nome', '$usu' , '$senha', '$email', '$nivel', '$status', '$cadastro');";
    $resultado = mysqli_query($con, $sql);

    echo $sql;
    if($resultado){
        echo "foi";
        header('Location: \estac3/pages/dash.php?page=lista_func&msg=1');
        mysqli_close($con);
    }else{
        echo "nao";
        // header('Location: \siscrud/index.php?page=lista_cli&msg=4');
        mysqli_close($con);
    }
?>