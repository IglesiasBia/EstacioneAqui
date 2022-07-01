<?php

$placa = $_POST["placa_veic"];
$tipo = $_POST["tipo_veic"];
$chave = $chave["chave"];

// Cria um novo cliete
$sql = "insert into cliente values(0,'Cliente não declarado','0');";
$resultado = mysqli_query($con, $sql);

//Pega o último cliente criado
$sql2 ="SELECT * FROM cliente ORDER BY id_cli DESC LIMIT 1 ;";
$resultado2 = mysqli_query($con, $sql2);
$final = mysqli_fetch_array($resultado2);
$idCli = $final["id_cli"];

// $final = mysqli_fetch_array($resultado);
// echo $final["id_cli"];

// $sql2 = "SELECT MAX(id_cli) FROM cliente;";
// $resultado2 = mysqli_query($con, $sql2);
// $final = mysqli_fetch_array($resultado2);
// echo $final["nome_cli"];

// echo mysql_result($result2, 2); 
// $final = mysqli_result($resultado2);

//Cria o veículo 
$sql3 = "insert into veiculo values('$placa','$tipo',$idCli);";
$resultado = mysqli_query($con, $sql3);

//Pgea horário atual do sistema
date_default_timezone_set('America/Sao_Paulo');    
$hr_entrada = date('Y-m-d h:i:s ', time());  

//Cria ticket

$sql4 = "insert into ticket values(0,'$hr_entrada','$hr_entrada','0', '$chave', '$placa','1');";
$resultado = mysqli_query($con, $sql4);
echo $sql4;

if($resultado){
    header('Location: /estacione/estac3/pages/dash.php?msg=1');
    mysqli_close($con);
}else{
    echo "nao";
    // header('Location: \siscrud/index.php?page=lista_cli&msg=4');
    mysqli_close($con);
}
?>