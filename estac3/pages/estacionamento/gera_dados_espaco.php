<?php
$quantidadePavimentos = $_POST["quantidadePavimentos"];
// echo $quantidadePavimentos;

// $espacosTotal = 121;
$contadorEspaco = 1;
$contadorPavimento = 1;
// Enquanto houver pavimento entra aqui
while($contadorPavimento <= $quantidadePavimentos){
    $espacosTotal = 121;
    // Enquanto houver espaco entra aqui
    while($contadorEspaco <= $espacosTotal){
        // sql para criar novo espaco
        $sqlGeraPavimento = "insert into vagas value (0, '3', '".$contadorPavimento."', '3', 1, 'A', '".$contadorEspaco."');";

        $resultadoSqlGeraPavimento == mysqli_query($con, $sqlGeraPavimento);
    
        $contadorEspaco++;
    }
    // Zera quantidade de espaco para poder entrar na condicao novamente
    $contadorEspaco = 1;
    $contadorPavimento++; 
}

// status_vaga recebe 0 vazia, 2 ocupada , 3 rua
// tipo_vaga recebe 0 carro, 2 moto , 3 rua

// id_vaga=0, status_vaga='3', pav_vaga='".$contadorPavimento."', tipo_vaga='3', id_estac=1, setor_vaga='A', num_vaga='".$contadorEspaco."'
?>