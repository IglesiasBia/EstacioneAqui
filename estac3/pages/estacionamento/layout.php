<?php
$numLinhas = 2;
$num = 0;
$ultimaVagaLinhas = array();
while($num < $numLinhas){
    $ultimavaga[$num] = $_POST["ultimaVaga"[$num]];   
    array_push($ultimaVagaLinhas, $ultimavaga[$num]);
    $num++;
}
echo $ultimaVagaLinhas;

// $array = [];
// while($num < $numLinhas){
//     echo "<tr>"; 
//     // while(){}
// }
// $inicioPrimeiraLinha = 1;
// $finalPrimeiraLinha = 5;

// $inicioSegundaLinha = 6;
// $finalSegundaLinha = 10;

?>


<table>
    
<tr>
        <td>oi</td>
        <td>oi</td>
    </tr>
</table>