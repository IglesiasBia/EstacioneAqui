<?php
// Pega quantidadeLinhas do banco
// echo "oi";
$quantidadeLinhas =2;
// Cria no banco colunas para inserir o número de vagas que cada coluna possui 
$contadorColuna = 1; 
while($contadorColuna <= $quantidadeLinhas){
    $sqlCriaColuna = "alter table layout add vagasLinha".$contadorColuna." int;<br>";
    echo $sqlCriaColuna;
    // mysqli_query()
    $contadorColuna++;
}

$contadorDados = 1;
while($contadorDados <= $quantidadeLinhas){
    $quantidadeVagas = $_POST["vagasLinha".$contadorDados];
    $sqlInsereQuantidadeVagasColuna = "update layout set vagasLinha".$contadorDados." = '". $quantidadeVagas."';<br>";
    echo $sqlInsereQuantidadeVagasColuna;
    $contadorDados++;
}
?>