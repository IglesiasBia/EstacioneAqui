<?php
        //include "../../base/con_escola.php";
        //include "../../base/con.php";

        $sql = mysqli_query($con, "select cadastro and senha from usuarios where id = '".$id."';");


        $nome = $_POST["nome_func"];
        $usu = $_POST["usu_func"];

        $email = $_POST["email_func"];
        $nivel = $_POST["nivel_func"];
        $status = $_POST["status_func"];
// echo $nome;
        // date_default_timezone_set('America/Sao_Paulo');    
        // $cadastro = date('Y-d-m h:i:s ', time());  

?>