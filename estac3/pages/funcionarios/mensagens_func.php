<?php

    if(isset($_GET["msg"])){
        $msg = $_GET["msg"];

        switch($msg){
            case 1:
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Funcionário cadastrado com sucesso!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                break;
            case 2:
                echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                Funcionário atualizado com sucesso!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                break;
            case 3:
                echo '	<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Erro durante acesso a Base de dados! Contate o administrador.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                break;
        }
        $msg = 0;
    }

?>