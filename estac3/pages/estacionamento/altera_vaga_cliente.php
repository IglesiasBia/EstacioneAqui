<?php
    $pavimentoAtual = $_GET["id_pavimento"]; 
        
    $placaVeic = $_POST["placaVeic"];
    $numVaga = $_POST["numeroVaga"];
    echo $numVaga;
    
    echo  "select id_vaga from vagas where num_vaga =".$numVaga. "and pav_vaga='".$pavimentoAtual."';" ;
    $sqlPegaIdVagaPeloNumero = mysqli_query($con, "select id_vaga from vagas where num_vaga =".$numVaga. " and pav_vaga='".$pavimentoAtual."';" );
    $resultadoIdVagaPeloNumero = mysqli_fetch_array($sqlPegaIdVagaPeloNumero);
    echo "ooi";

    $idVaga = $resultadoIdVagaPeloNumero["id_vaga"];
    $sqlAlteraVagaCliente = "update ticket set  id_vaga=".$idVaga."  where placa_veic='".$placaVeic."' and status_pg='0'";
    echo $sqlAlteraVagaCliente;

?>