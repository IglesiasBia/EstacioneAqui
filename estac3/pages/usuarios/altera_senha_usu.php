<?php
    $id = $_SESSION['UsuarioID'];
    $senha = $_POST["senha"];
    $sql = "update func_usu set senha_func='$senha' where id_func='$id';";
    $resultado = mysqli_query($con,$sql);

    if($resultado){
        header('Location: http://localhost:8080/estacione/estac3/pages/dash.php?page=perfil_usu&msg=4');
        mysqli_close($con);
    }else{
        echo "nao";
        header('Location: http://localhost:8080/estacione/estac3/pages/dash.php?page=perfil_usu&msg=5')
    }
?>