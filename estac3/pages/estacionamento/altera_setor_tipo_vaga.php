<!-- PAREI AQUI -->

<!-- <form action="?page=altera_layout_novo" method="post" >
    <table>
        <tr>
            <div id="teste">
            
                <input type="text" id="vagasExistentes" name="vagasExistentes" style="display: none">
                <input type="text" id="rua" name="rua" style="display: none">
            </div> -->
<?php


$pavimentoAtual = $_GET["id_pavimento"];
// echo $pavimentoAtual;

echo '
<form action="?page=altera_layout_novo" method="post" >
    <table>
        <tr>
            <div id="teste">
            
                <input type="text" id="vagasExistentes" name="vagasExistentes" style="display: none">
                <input type="text" id="rua" name="rua" style="display: none">
            
';
$sqlPegaEspacos = mysqli_query($con,"select * from vagas where pav_vaga='".$pavimentoAtual."' order by num_vaga");


while($resultadoPegaEspacos = mysqli_fetch_array($sqlPegaEspacos)){
    if($resultadoPegaEspacos["tipo_vaga"] == 0){
        // echo "oi";
        $idVaga = $resultadoPegaEspacos["id_vaga"];
        echo $idVaga. "<br>";
        $numeroVaga = $resultadoPegaEspacos["num_vaga"];
        echo $numeroVaga. "<br>";
        echo "<td>";
        
        // echo "oi";
        // echo "<button type='button' class='btn btnvaga bs-gray-700' onclick='apagaVaga()' id=>";
        echo " <button type='button' class='btn btnvaga btn-success' onclick='apagaVaga()' id='vaga" . $idVaga . "' name='vaga" . $idVaga ."'  style='position: static'>";
        echo "<img src='../../assets/img/icons/carlayout.png' width='30em'alt='' style='display: none' class='imgCarro' id='imgCarro" . $idVaga . "' name='imgCarro" . $idVaga . "'>";
        echo "<p id='numeroVaga" . $idVaga . "' name='numeroVaga" . $idVaga . "' style='display: inline'>$numeroVaga</p>";
        echo "</button>";
        echo "</td>";
    //     echo "<td>
    //     <button type='button' class='btn btnvaga bs-gray-700' onclick='apagaVaga()' id='vaga" + $idVaga + "'name='vaga" + $idVaga + "' style='position: static'>
    //         <img src='../assets/img/icons/carlayout.png' width='30em'alt='' style='display: none' class='imgCarro' id='imgCarro" + $idVaga + "' name='imgCarro" + $idVaga + "'>
    
    //         <p id='numeroVaga" + $idVaga + "' name='numeroVaga" + $idVaga + "' style='display: inline'>$numeroVaga</p>
    //     </button>
    // </td>";
    }else{
        $idVaga = $resultadoPegaEspacos["id_vaga"];
        // echo $idVaga. "<br>";
        $numeroVaga = $resultadoPegaEspacos["num_vaga"];
        // echo $numeroVaga. "<br>";
        // echo "<td>";
        
        // echo "oi";
        // echo "<button type='button' class='btn btnvaga bs-gray-700' onclick='apagaVaga()' id=>";
        echo " <button type='button' class='btn btnvaga bs-gray-700'' onclick='apagaVaga()' id='vaga" . $idVaga . "' name='vaga" . $idVaga ."'  style='position: static'>";
        echo "<img src='../../assets/img/icons/carlayout.png' width='30em'alt='' style='display: none' class='imgCarro' id='imgCarro" . $idVaga . "' name='imgCarro" . $idVaga . "'>";
        echo "<p id='numeroVaga" . $idVaga . "' name='numeroVaga" . $idVaga . "' style='display: inline'>$numeroVaga</p>";
        echo "</button>";
        echo "</td>";
    }
}



echo '</div>
</tr>
</table>
<tr><td><button type="submit" class="btn bg-gradient-danger w-100 my-4 mb-2">Salvar</button></td></tr>

</form>';
?>





<!-- <img src="../../assets/img/icons/carlayout.png" alt=""> -->