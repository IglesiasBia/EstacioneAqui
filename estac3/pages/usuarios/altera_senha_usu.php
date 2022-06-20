<?php
    $id = $_SESSION['UsuarioID'];
    $senha = $_POST["senha"];
    $sql = "update usuarios set senha='$senha' where id='$id';";
    $resultado = mysqli_query($con,$sql);
?>