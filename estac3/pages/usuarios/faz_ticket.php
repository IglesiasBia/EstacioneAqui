<?php
//TENHO QU TERMINAR
$placa = $_POST["placa_veic"];

$sql = "select * from ticket where placa_veic='$placa';";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_array($resultado);
echo $row["placa_veic"];

?>