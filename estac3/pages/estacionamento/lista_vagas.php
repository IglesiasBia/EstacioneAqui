<?php

?>


<?php
    $pavimentoAtual = $_GET["id_pavimento"]; 
    // echo $pavimentoAtual;


echo '<form action="?page=altera_vaga_cliente&id_pavimento='.$pavimentoAtual.'" method="post">
<input type="text" name="placaVeic">
<input type="text" style="display: none;" id="numeroVaga" name="numeroVaga">
<button type="submit" class="btn bg-gradient-danger w-100 my-4 mb-2">Salvar</button>

</form>
<br>';



    $sqlPegaQuantidadePavimentos = mysqli_query($con, "select quant_pavimento from estacionamento;");
    $resultadoQuantidadePavimentos = mysqli_fetch_array($sqlPegaQuantidadePavimentos);
    $totalPavimentos = $resultadoQuantidadePavimentos["quant_pavimento"];

    // $sqlPegaDadosEstacinamento = "select * from vagas order by num_vaga";


    $totalEspacos = 121;
    $contadorEspaco = 1;
    $numeroVaga = 1;
    while($contadorEspaco <= $totalEspacos){

        $sqlPegaDadosEstacinamento = mysqli_query($con,"select * from vagas where num_vaga=".$contadorEspaco." and pav_vaga='".$pavimentoAtual ."';");
        $resultadoDadosEstacinamento = mysqli_fetch_array($sqlPegaDadosEstacinamento);

            if($resultadoDadosEstacinamento["tipo_vaga"] == "0"){
                echo "<td>";
                echo "<button type='button' class='btn btnvaga btn-success' id='vaga".$numeroVaga."'name='vaga` ".$numeroVaga."`' style='position: static;' onclick='alteraStatusVaga()'>";
                echo "<img src='../assets/img/icons/carlayout.png' width='30em'alt='' class='imgCarro' >";
                // TODO
                if($resultadoDadosEstacinamento["setor_vaga"] == "A"){
                    echo "<p  style='display: inline'>".$contadorEspaco."A</p>";
                }elseif($resultadoDadosEstacinamento["setor_vaga"] == "B"){
                    echo "<p  style='display: inline'>".$numeroVaga."B</p>";
                }elseif($resultadoDadosEstacinamento["setor_vaga"] == "C"){
                    echo "<p  style='display: inline'>".$numeroVaga."C</p>";
                }elseif($resultadoDadosEstacinamento["setor_vaga"] == "D"){
                    echo "<p  style='display: inline'>".$numeroVaga."D</p>";
                }elseif($resultadoDadosEstacinamento["setor_vaga"] == "E"){
                    echo "<p  style='display: inline'>".$numeroVaga."E</p>";
                }
                echo "</button>";
                echo "</td>";
                $numeroVaga++;
            }elseif($resultadoDadosEstacinamento["tipo_vaga"] == "1"){
                echo "<td>";
                echo "<button type='button' class='btn btnvaga btn-success' id='vaga".$numeroVaga."'name='vaga` ".$numeroVaga."`' style='position: static; ' onclick='alteraStatusVaga()'> ";
                echo "<img src='../assets/img/icons/moto.png' width='30em'alt='' class='imgCarro' >";
                // TODO
                if($resultadoDadosEstacinamento["setor_vaga"] == "A"){
                    echo "<p  style='display: inline'>".$numeroVaga."A</p>";
                }elseif($resultadoDadosEstacinamento["setor_vaga"] == "B"){
                    echo "<p  style='display: inline'>".$numeroVaga."B</p>";
                }elseif($resultadoDadosEstacinamento["setor_vaga"] == "C"){
                    echo "<p  style='display: inline'>".$numeroVaga."C</p>";
                }elseif($resultadoDadosEstacinamento["setor_vaga"] == "D"){
                    echo "<p  style='display: inline'>".$numeroVaga."D</p>";
                }elseif($resultadoDadosEstacinamento["setor_vaga"] == "E"){
                    echo "<p  style='display: inline'>".$numeroVaga."E</p>";
                }
                echo "</button>";
                echo "</td>";
                $numeroVaga++;
            }elseif($resultadoDadosEstacinamento["tipo_vaga"] == "3"){
                echo "<td>";
                echo "<button type='button' class='btn btnvaga bs-gray-700' id='vaga` + contador + `'name='vaga` ".$contadorEspaco."`' style='position: static; '>";
                echo "<img src='../assets/img/icons/linha.png' width='30em' class='imgLinha '>";
                echo "</button>";
                echo "</td>";
            }

        $contadorEspaco++;
    }

?>
<script>

    function alteraStatusVaga(){
        console.log("oi")
        let elementoClicado = event.target || event.srcElement;
        let buttonClass = elementoClicado.className;
        let buttonClicado = document.getElementById(elementoClicado.id);

        if(buttonClass.includes("btn-success")){
            buttonClicado.classList.remove("btn-success");
            buttonClicado.classList.add("btn-danger");
        }else{
            buttonClicado.classList.remove("btn-danger");
            buttonClicado.classList.add("btn-success");
        }
        
        let inputNumeroVaga = document.getElementById("numeroVaga");
        inputNumeroVaga.value = elementoClicado.id.replace("vaga", "");
        console.log(inputNumeroVaga.value)
       
    }
</script>