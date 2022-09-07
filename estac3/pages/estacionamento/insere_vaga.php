<?php
    $pav = $_POST["pav_vaga"];
    $tipo = $_POST["tipo_vaga"];
    $setor = $_POST["setor_vaga"];
    $num = $_POST["num_vaga"];

    if($pav == "" || $tipo == "" || $setor  == "" || $num  == ""){
        header("Location:  /estacione/estac3/pages/dash.php?page=view_estac&msg=erroInserirVaga");
    }

    $sql = "insert into vagas values(0, '0', '$pav','$tipo','1','$setor','$num');";
    $resultado = mysqli_query($con, $sql);
    header("Location:  /estacione/estac3/pages/dash.php?page=view_estac&msg=sucessoInserirVaga");

?>