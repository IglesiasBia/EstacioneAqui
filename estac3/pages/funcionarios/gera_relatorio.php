<?php

    $dtInicio = $_POST["dt_inicio"];
    $dtFinal = $_POST["dt_final"];

    $sql = "select sum(valor_total_ticket) as credito_total,
    count(id_ticket) as total_usuarios from ticket where hr_entrada like '$dtInicio%';";
    $resultadoRelatorio = mysqli_query($con,$sql);
    $dadosRelatorio = mysqli_fetch_array($resultadoRelatorio);
  
    
    echo "<table class='table align-items-center mb-0'>";
    echo "<thead><tr>";
    echo "<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Crédito Total</th>";
    echo "<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2'>Tickets Emitidos</th>";
    echo "<th class='text-secondary opacity-7'></th>";
    echo "</tr></thead><tbody>";   

    echo "<td>" . $dadosRelatorio["credito_total"] . "</td>";
    echo "<td>" . $dadosRelatorio["total_usuarios"] . "</td>";
    echo "</tr>";
    echo "</table>";
?>