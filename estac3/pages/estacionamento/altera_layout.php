<?php
    $layout = $_POST["layout"];
    
    $sqlEstacionamentoLayout = mysqli_query($con, "UPDATE estacionamento SET tipo_layout = ".$layout.";");
?>