<?php

//Dados da tabela veiculo 
$placa = $_POST["placa_veic"];
$tipo = $_POST["tipo_veic"];
$chave = $chave["chave"];

//Dados da tabela cliente
$id = $_POST["id_cli"];
$nome = $_POST["nome_cli"];
$cpf = $_POST["cpf_cli"];

//Dados da tabela vaga
$pav = $_POST["pav_vaga"];
$setor = $_POST["setor_vaga"];
$numVaga = $_POST["num_vaga"];

//Atualiza tabela veiculo
$sqlVeic = "update veiculo set placa_veic='$placa', tipo_veic ='$tipo',id_cli='$id' where placa_veic='$placa';";
$resultado = mysqli_query($con, $sqlVeic);

//Atualiza tabela cliente
$sqlCli = "update cliente set id_cli='$id', nome_cli='$nome',cpf_cli='$cpf' where id_cli='$id';";
$resultado = mysqli_query($con, $sqlCli);


//Pega id da nova vaga
$sqlVaga = "select id_vaga 
from vagas 
where pav_vaga='$pav' and setor_vaga ='$setor' and num_vaga='$numVaga';";
$resultadoVaga = mysqli_query($con, $sqlVaga);
$row = mysqli_fetch_array($resultadoVaga);
$idVaga = $row["id_vaga"];

//Atualiza tabela ticket
$sqlTicket = "update ticket set id_vaga='$idVaga' where placa_veic='$placa';";
$resultado = mysqli_query($con, $sqlTicket);

?>