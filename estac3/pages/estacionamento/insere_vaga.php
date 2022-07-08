<?php

$pav = $_POST["pav_vaga"];
$tipo = $_POST["tipo_vaga"];
$setor = $_POST["setor_vaga"];
$num = $_POST["num_vaga"];

$sql = "insert into vagas values(0, '0', '$pav','$tipo','1','$setor','$num');";
$resultado = mysqli_query($con, $sql);

?>