<?php
    $id = $_SESSION['UsuarioID'];
    $senha = $_POST["senha"];


    // $file = $_FILES["local_doc"]["tmp_name"];
    // $dir = "estacione/estac3/assets/img/foto-perfil" . $_FILES["local_doc"]["name"];

    // copy($file, $dir);
    // Mensagem de erro se a senha for nula
    if($senha == ""){
        header('Location: http://localhost/estacione/estac3/pages/dash.php?page=perfil_usu&msg=senhaVazia');
    }else{
        $sql = "update func_usu set senha_func='$senha' where id_func='$id';";
        echo $sql;
        $resultado = mysqli_query($con,$sql);
        
        if($resultado){
            header('Location: http://localhost/estacione/estac3/pages/dash.php?page=perfil_usu&msg=4');
        }
    }
?>