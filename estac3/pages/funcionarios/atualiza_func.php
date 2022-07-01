<?php
        //include "../../base/con_escola.php";
        //include "../../base/con.php";
        $id = $_POST["id_func"];
        
        //Peguei a data cadastro do banco, pois é imutável
        $sql = "select dt_cadastro_func, nivel_func from funcionario where id_func = '".$id."';";
        $resultado = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($resultado);

        //Dados postos no form
        $nome = $_POST["nome_func"];
        $nivel = $_POST["nivel_func"];
        $email = $_POST["email_func"];
        $status = $_POST["status_func"];
        $dtCadastro = $row["dt_cadastro_func"];
        $cpf = $_POST["cpf_func"];
        
        //Update dados funcionário
        $sql2 = "update funcionario set id_func='$id', nome_func='$nome', nivel_func='$nivel', email_func='$email', status_func='$status', dt_cadastro_func='$dtCadastro', cpf_func='$cpf' where id_func='$id';";
        $resultado2 = mysqli_query($con,$sql2);

        //Se o funcionário tiver acesso ao sistema
        if($row["nivel_func"] == 1 || $row["nivel_func"] == 2){
                $sql3 = "select senha_func from func_usu where id_func = '".$id."';";
                $resultado3 = mysqli_query($con,$sql3);
                $row3 = mysqli_fetch_array($resultado3);

                $senha = $row3["senha_func"];
                $usu = $_POST["func_usu"];

                //Update dados do funcionário usuário
                $sql4 = "update func_usu set senha_func='$senha', id_func='$id', func_usu='$usu' where id_func='$id';";

                $resultado4 = mysqli_query($con,$sql4);
        }
?>