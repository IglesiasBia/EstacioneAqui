<?php
    //include "../../base/con_escola.php";
    //include "../../base/con.php";

    $nome = $_POST["nome_func"];
    
    $nivel = $_POST["nivel_func"];
    $email = $_POST["email_func"];
    $status = $_POST["status_func"];
    date_default_timezone_set('America/Sao_Paulo');    
    $cadastro = date('Y-m-d h:i:s ', time());  
    $cpf = $_POST["cpf_func"];

    $senha = $_POST["senha_usu"];
    $usu = $_POST["func_usu"];

    $sql = "insert into funcionario values(0, '$nome', '$nivel' , '$email', '$status', '$cadastro', '$cpf');";
    $resultado = mysqli_query($con, $sql);

    $sql2 = "select * from funcionario where nome_func='$nome' and email_func='$email';";
    $resultado2 = mysqli_query($con, $sql2);
	$row = mysqli_fetch_array($resultado2);
    $id = $row["id_func"];

    $sql3 = "insert into func_usu values('$senha','$id', '$usu');";

    $resultado3 = mysqli_query($con, $sql3);

    if($resultado && $resultado2 && $resultado3){
        header('Location: /estacione/estac3/pages/dash.php?page=lista_func&msg=1');
        mysqli_close($con);
    }else{
        echo "nao";
        // header('Location: \siscrud/index.php?page=lista_cli&msg=4');
        mysqli_close($con);
    }
?>