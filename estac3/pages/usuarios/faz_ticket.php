<?php
//TENHO QU TERMINAR
$placa = $_POST["placa_veic"];

//Pega data e horário atual
date_default_timezone_set('America/Sao_Paulo');    
$hr_saida = date('Y-m-d h:i:s ', time());  

//Atualiza o horário de saída 
$sql = "update ticket set hr_saida = '$hr_saida' where placa_veic='$placa';";
$resultado = mysqli_query($con, $sql);

//Pega todos os dados do ticket selecionado
$sql2 = "select *, TIMEDIFF(hr_saida, hr_entrada) as tempo  from ticket where placa_veic='$placa';";
$resultado2 = mysqli_query($con, $sql2);
$row = mysqli_fetch_array($resultado2);

//  $hr_entrada = $row['hr_entrada'];
//  $hr_saida= $row['hr_saida'];
//  echo $hr_saida;
// $sql3 = "select TIMEDIFF($hr_saida, $hr_entrada);";
// $resultado3 = mysqli_query($con, $sql3);
// $row2 = mysqli_fetch_array($resultado3);
// echo $row2;

// $data1  = $hr_entrada->format('Y-m-d H:i:s');
// $data2  = $hr_saida->format('Y-m-d H:i:s');

// $dif = $hr_entrada->diff($hr_saida);
// $horas = $dif->h + ($dif->days * 24);

// $dif = $hr_saida - $hr_entrada;
// echo $dif;
// if()
// $interval = date_diff($hr_entrada, $hr_saida);
// echo $interval;

echo "<table class='table align-items-center mb-0'>";
echo "<thead><tr>";
echo "<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>ID</th>";
echo "<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2'>Hora Entrada</th>";
echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Hora Saída</th>";
echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Valor Total</th>";
echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Chave</th>";
echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Placa</th>";
echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Vaga</th>";
echo "<th class='text-secondary opacity-7'></th>";
echo "</tr></thead><tbody>";

echo "<tr>";
echo "<td>" . $row['id_ticket'] . "</td>";
echo "<td>" . $row['hr_entrada'] . "</td>";
echo "<td>" . $row['hr_saida'] . "</td>";
// echo "<td>" . $row['tempo'] . "</td>";
$total = 5;
if($row['tempo'] == "01:00:00"){
    echo "<td>" . $total . "</td>";
}elseif($row['tempo'] > "01:00:00"){
    $total += 1;
    echo "<td>" . $total . "</td>";
}
if($row['chave'] == 0){
    echo "<td> Deixou </td>";
}else{
    echo "<td> Não deixou </td>";
}
echo "<td>" . $row['placa_veic'] . "</td>";
echo "<td>" . $row['id_vaga'] . "</td>";
echo "</tr>";
echo "<tr><button class='btn btn-primary' type='submit'>Imprimir</button></tr>";
echo "</table>";
?>