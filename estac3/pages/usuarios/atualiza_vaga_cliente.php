<?php

$placa = $_POST["placa_veic"];
$tipo = $_POST["tipo_veic"];
$chave = $chave["chave"];

$id = $_POST["id_cli"];
$nome = $_POST["nome_cli"];
$cpf = $_POST["cpf_cli"];

$vaga = $_POST["id_vaga"];
//Atualiza tabela veiculo
$sqlVeic = "update veiculo set placa_veic='$placa', tipo_veic ='$tipo',id_cli='$id' where placa_veic='$placa';";
$resultado = mysqli_query($con, $sqlVeic);

//Atualiza tabela cliente
$sqlCli = "update cliente set id_cli='$id', nome_cli='$nome',cpf_cli='$cpf' where id_cli='$id';";
$resultado = mysqli_query($con, $sqlCli);

//Atualiza tabela ticket
$sqlTicket = "update ticket set id_vaga='$vaga' where placa_veic='$placa';";
$resultado = mysqli_query($con, $sqlTicket);
?>