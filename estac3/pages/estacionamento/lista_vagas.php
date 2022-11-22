<?php
$pavimentoAtual = $_GET["id_pavimento"];
// echo $pavimentoAtual;


$sqlPegaQuantidadePavimentos = mysqli_query($con, "select quant_pavimento from estacionamento;");
$resultadoQuantidadePavimentos = mysqli_fetch_array($sqlPegaQuantidadePavimentos);
$totalPavimentos = $resultadoQuantidadePavimentos["quant_pavimento"];


$contadorPavimento = 1;
// Enquanto houver pavimentos entra aqui
while ($contadorPavimento <= $totalPavimentos) {
    echo "<a class='btn btn-danger btn-xs' href=?page=lista_vagas&id_pavimento=" . $contadorPavimento . ">Pavimento " . $contadorPavimento . "</a>";
    $contadorPavimento++;
}

echo '<form action="?page=altera_vaga_cliente&id_pavimento=' . $pavimentoAtual . '" method="post">
<h3>Digite a placa do veículo</h3>



<input type="text" style="display: none;" id="numeroVaga" name="numeroVaga">

<div class="input-group">
    <input type="text" class="form-control" style="background-color:white;"id="inputvaga" name="placaVeic">
    <button class="btn btn-danger" id="buttonsalva"type="submit" > salvar </button>
</div>

<br>';

echo'<div class="grid-container">';


$totalEspacos = 132;
$contadorEspaco = 1;
$numeroVaga = 1;
while ($contadorEspaco <= $totalEspacos) {

    $sqlPegaDadosEstacinamento = mysqli_query($con, "select * from vagas where num_vaga=" . $contadorEspaco . " and pav_vaga='" . $pavimentoAtual . "';");
    $resultadoDadosEstacinamento = mysqli_fetch_array($sqlPegaDadosEstacinamento);

// var corSetor = ["126, 76, 175", "242, 175, 48", "2, 115, 115", "123, 22, 54", "29, 40, 210"
    // echo "oi";
    if ($resultadoDadosEstacinamento["tipo_vaga"] == "0") {
        // TODO
        if ($resultadoDadosEstacinamento["setor_vaga"] == "A" && $resultadoDadosEstacinamento["status_vaga"] == "0") {
            echo "<div class='grid-item'>";
            echo "<button type='button' class='btn btnvaga btn-success' id='vaga" . $contadorEspaco . "'name='vaga` " . $numeroVaga . "`' style='position: static; background-color: rgb(126, 76, 175)' onclick='alteraStatusVaga()' >";
            echo "<img src='../assets/img/icons/carlayout.png' width='30em'alt='' class='imgCarro' >";
            echo "<p id='vagaCarro".$numeroVaga."' style='display: inline'>" . $numeroVaga . "A</p>";
            echo "</button>";
            echo "</div>";
        } elseif ($resultadoDadosEstacinamento["setor_vaga"] == "B" && $resultadoDadosEstacinamento["status_vaga"] == "0") {
            echo "<div class='grid-item'>";
            echo "<button type='button' class='btn btnvaga btn-success' id='vaga" . $contadorEspaco . "'name='vaga` " . $numeroVaga . "`' style='position: static; background-color: rgb(242, 175, 48)' onclick='alteraStatusVaga()' >";
            echo "<img src='../assets/img/icons/carlayout.png' width='30em'alt='' class='imgCarro' >";
            echo "<p id='vagaCarro".$numeroVaga."' style='display: inline'>" . $numeroVaga . "B</p>";
            echo "</button>";
            echo "</div>";
        } elseif ($resultadoDadosEstacinamento["setor_vaga"] == "C" && $resultadoDadosEstacinamento["status_vaga"] == "0") {
            echo "<div class='grid-item'>";
            echo "<button type='button' class='btn btnvaga btn-success' id='vaga" . $contadorEspaco . "'name='vaga` " . $numeroVaga . "`' style='position: static; background-color: rgb(2, 115, 115)' onclick='alteraStatusVaga()' >";
            echo "<img src='../assets/img/icons/carlayout.png' width='30em'alt='' class='imgCarro' >";
            echo "<p id='vagaCarro".$numeroVaga."' style='display: inline'>" . $numeroVaga . "C</p>";
            echo "</button>";
            echo "</div>";
        } elseif ($resultadoDadosEstacinamento["setor_vaga"] == "D" && $resultadoDadosEstacinamento["status_vaga"] == "0") {
            echo "<div class='grid-item'>";
            echo "<button type='button' class='btn btnvaga btn-success' id='vaga" . $contadorEspaco . "'name='vaga` " . $numeroVaga . "`' style='position: static; background-color: rgb(123, 22, 54)' onclick='alteraStatusVaga()' >";
            echo "<img src='../assets/img/icons/carlayout.png' width='30em'alt='' class='imgCarro' >";
            echo "<p id='vagaCarro".$numeroVaga."' style='display: inline'>" . $numeroVaga . "D</p>";
            echo "</button>";
            echo "</div>";
        } elseif ($resultadoDadosEstacinamento["setor_vaga"] == "E" && $resultadoDadosEstacinamento["status_vaga"] == "0") {
            echo "<div class='grid-item'>";
            echo "<button type='button' class='btn btnvaga btn-success' id='vaga" . $contadorEspaco . "'name='vaga` " . $numeroVaga . "`' style='position: static; background-color: rgb(29, 40, 210)' onclick='alteraStatusVaga()' >";
            echo "<img src='../assets/img/icons/carlayout.png' width='30em'alt='' class='imgCarro' >";
            echo "<p id='vagaCarro".$numeroVaga."' style='display: inline'>" . $numeroVaga . "E</p>";
            echo "</button>";
            echo "</div>";
        }else{
            echo "<div class='grid-item'>";
            echo "<button type='button' class='btn btnvaga btn-danger' id='vaga" . $contadorEspaco . "'name='vaga` " . $numeroVaga . "`' style='position: static;' >";
            echo "<img src='../assets/img/icons/carlayout.png' width='30em'alt='' class='imgCarro' >";
            echo "<p id='vagaCarro".$numeroVaga."' style='display: inline'>" . $numeroVaga . $resultadoDadosEstacinamento["setor_vaga"]. "</p>";
            echo "</button>";
            echo "</div>";
        }

        $numeroVaga++;
    } elseif ($resultadoDadosEstacinamento["tipo_vaga"] == "1") {

        // TODO
        if ($resultadoDadosEstacinamento["setor_vaga"] == "A" && $resultadoDadosEstacinamento["status_vaga"] == "0") {
            echo "<div class='grid-item'>";
            echo "<button type='button' class='btn btnvaga btn-success' id='vaga" . $numeroVaga . "'name='vaga` " . $numeroVaga . "`' style='position: static; background-color: rgb(126, 76, 175)' onclick='alteraStatusVaga()' >";
            echo "<img src='../assets/img/icons/moto.png' width='30em'alt='' class='imgCarro' >";
            echo "<p id='vagaMoto".$numeroVaga."' style='display: inline'>" . $numeroVaga . "A</p>";
            echo "</button>";
            echo "</div>";

        } elseif ($resultadoDadosEstacinamento["setor_vaga"] == "B" && $resultadoDadosEstacinamento["status_vaga"] == "0") {
            echo "<div class='grid-item'>";
            echo "<button type='button' class='btn btnvaga btn-success' id='vaga" . $contadorEspaco . "'name='vaga` " . $numeroVaga . "`' style='position: static; background-color: rgb(242, 175, 48)' onclick='alteraStatusVaga()' >";
            echo "<img src='../assets/img/icons/moto.png' width='30em'alt='' class='imgCarro' >";
            echo "<p  style='display: inline'>" . $numeroVaga . "B</p>";
            echo "</button>";
            echo "</div>";
        } elseif ($resultadoDadosEstacinamento["setor_vaga"] == "C" && $resultadoDadosEstacinamento["status_vaga"] == "0") {
            echo "<div class='grid-item'>";
            echo "<button type='button' class='btn btnvaga btn-success' id='vaga" . $contadorEspaco . "'name='vaga` " . $numeroVaga . "`' style='position: static; background-color: rgb(2, 115, 115)' onclick='alteraStatusVaga()' >";
            echo "<img src='../assets/img/icons/moto.png' width='30em'alt='' class='imgCarro' >";
            echo "<p id='vagaMoto".$numeroVaga."' style='display: inline'>" . $numeroVaga . "C</p>";
            echo "</button>";
            echo "</div>";
        } elseif ($resultadoDadosEstacinamento["setor_vaga"] == "D" && $resultadoDadosEstacinamento["status_vaga"] == "0") {
            echo "<div class='grid-item'>";
            echo "<button type='button' class='btn btnvaga btn-success' id='vaga" . $contadorEspaco . "'name='vaga` " . $numeroVaga . "`' style='position: static; background-color: rgb(123, 22, 54)' onclick='alteraStatusVaga()' >";
            echo "<img src='../assets/img/icons/moto.png' width='30em'alt='' class='imgCarro' >";
            echo "<p id='vagaMoto".$numeroVaga."' style='display: inline'>" . $numeroVaga . "D</p>";
            echo "</button>";
            echo "</div>";
        } elseif ($resultadoDadosEstacinamento["setor_vaga"] == "E" && $resultadoDadosEstacinamento["status_vaga"] == "0") {
            echo "<div class='grid-item'>";
            echo "<button type='button' class='btn btnvaga btn-success' id='vaga" . $contadorEspaco . "'name='vaga` " . $numeroVaga . "`' style='position: static; background-color: rgb(29, 40, 210)' onclick='alteraStatusVaga()' >";
            echo "<img src='../assets/img/icons/moto.png' width='30em'alt='' class='imgCarro' >";
            echo "<p id='vagaMoto".$numeroVaga."' style='display: inline'>" . $numeroVaga . "C</p>";
            echo "</button>";
            echo "</div>";
        }else{
            echo "<div class='grid-item'>";
            echo "<button type='button' class='btn btnvaga btn-danger' id='vaga" . $contadorEspaco . "'name='vaga` " . $numeroVaga . "`' style='position: static;' >";
            echo "<img src='../assets/img/icons/moto.png' width='30em'alt='' class='imgCarro' >";
            echo "<p id='vagaMoto".$numeroVaga."' style='display: inline'>" . $numeroVaga . $resultadoDadosEstacinamento["setor_vaga"]. "</p>";
            echo "</button>";
            echo "</div>";
        }

        $numeroVaga++;
    } elseif ($resultadoDadosEstacinamento["tipo_vaga"] == "3") {
        echo "<div class='grid-item'>";
        echo "<button type='button' class='btn btnvaga bs-gray-700' id='vaga` + contador + `'name='vaga` " . $contadorEspaco . "`' style='position: static; '>";
        echo "<img src='../assets/img/icons/linha.png' width='30em' class='imgLinha '>";
        echo "</button>";
        echo "</div>";
    } elseif ($resultadoDadosEstacinamento["tipo_vaga"] == "4") {
        echo "<div class='grid-item'>";
        echo "<button type='button' class='btn btnvaga' id='vaga` + contador + `'name='vaga` " . $contadorEspaco . "`' style='position: static; ' disabled>";
        echo "</button>";
        echo "</div>";
    }

    $contadorEspaco++;
}
echo "</div>";
?>



</form>

<script>
    // var corSetor = ["126, 76, 175", "242, 175, 48", "2, 115, 115", "123, 22, 54", "29, 40, 210"
    function alteraStatusVaga() {
        console.log("oi")
        let elementoClicado = event.target || event.srcElement;
        let buttonClass = elementoClicado.className;
        let buttonClicado = document.getElementById(elementoClicado.id);
        let paragrafo = buttonClicado.children[1];
        let conteudoParagrafo = document.getElementById(paragrafo.id).textContent;

        console.log(paragrafo);
        if (buttonClass.includes("btn-success")) {
            buttonClicado.removeAttribute("style");
            buttonClicado.classList.remove("btn-success");
            buttonClicado.classList.add("btn-danger");
        }else if(conteudoParagrafo.includes("A")){
            buttonClicado.style.backgroundColor = "rgb(126, 76, 175)"
            buttonClicado.classList.remove("btn-danger");
            buttonClicado.classList.add("btn-success");
        }else if(conteudoParagrafo.includes("B")){
            buttonClicado.style.backgroundColor = "rgb(242, 175, 48)"
            buttonClicado.classList.remove("btn-danger");
            buttonClicado.classList.add("btn-success");
        } else if(conteudoParagrafo.includes("C")){
            buttonClicado.style.backgroundColor = "rgb(2, 115, 115)"
            buttonClicado.classList.remove("btn-danger");
            buttonClicado.classList.add("btn-success");
        } else if(conteudoParagrafo.includes("D")){
            buttonClicado.style.backgroundColor = "rgb(123, 22, 54)"
            buttonClicado.classList.remove("btn-danger");
            buttonClicado.classList.add("btn-success");
        } else if(conteudoParagrafo.includes("E")){
            buttonClicado.style.backgroundColor = "rgb(29, 40, 210)"
            buttonClicado.classList.remove("btn-danger");
            buttonClicado.classList.add("btn-success");
        } 

        let inputNumeroVaga = document.getElementById("numeroVaga");
        inputNumeroVaga.value = elementoClicado.id.replace("vaga", "");
        console.log(inputNumeroVaga.value)

    }
</script>