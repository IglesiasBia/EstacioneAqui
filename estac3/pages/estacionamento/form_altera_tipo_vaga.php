<?php
// echo "oi"
$pavimentoAtual = $_GET["id_pavimento"];

echo '
    <form action="?page=altera_tipo_vaga&id_pavimento='.$pavimentoAtual.'"" method="post" >
        <h1>Defina se a vaga é para motocicletas ou para carro</h1>
        <p>Basta clicar para alterar o tipo da vaga</p>
        <table>
            <tr>
                <div id="teste">
                
                    <input type="text" id="vagasExistentes" name="vagasExistentes" style="display: none">
                    <input type="text" id="rua" name="rua" style="display: none">
                    <td>
                
    ';
// SQL que pega todos os epacos
$sqlPegaEspacos = mysqli_query($con, "select * from vagas where pav_vaga='" . $pavimentoAtual . "' order by num_vaga");
// $sqlPegaEspaco = "select * from vagas order by num_vaga";

// Contador que vai fazer com que as vagas sejam numeradas corretamente
$numeroVaga = 1;

// Enquanto houver espacos fica nesse lopp
while ($resultadoPegaEspacos = mysqli_fetch_array($sqlPegaEspacos)) {
    // Se o espaco atual for do tpo 0 (vaga) entra aqui
    if ($resultadoPegaEspacos["tipo_vaga"] == 0) {
        // Pega id do espaco atual
        $idVaga = $resultadoPegaEspacos["id_vaga"];

        //Faz button aparecer na tela 

        echo " <button type='button' class='btn btnvaga btn-success' onclick='tipoVaga()' id='vaga" . $idVaga . "' name='vaga" . $idVaga . "'  style='position: static'>";
        echo "<img src='../assets/img/icons/carlayout.png' width='30em'alt='' style='display: block' class='imgCarro' id='imgCarro" . $idVaga . "' name='imgCarro" . $idVaga . "' onclick='tipoVaga()'>";
        
        echo "<img src='../assets/img/bea.png' width='30em'alt='' style='display: none' class='imgMoto' id='imgMoto" . $idVaga . "' name='imgMoto" . $idVaga . "' onclick='tipoVaga()'>";

        echo "<p id='numeroVaga" . $numeroVaga . "' name='numeroVaga" . $idVaga . "' style='display: inline'>$numeroVaga</p>";
        echo "</button>";
        $numeroVaga++;
    } else {
        $idVaga = $resultadoPegaEspacos["id_vaga"];


        echo " <button type='button' class='btn btnvaga bs-gray-700' ' id='vaga" . $idVaga . "' name='vaga" . $idVaga . "'  style='position: static'>";
        echo "<img src='../assets/img/icons/linha.png' width='30em'alt='' style='display: block' class='imgCarro' id='imgCarro" . $idVaga . "' name='imgCarro" . $idVaga . "'>";
        echo "</button>";
    }
}



echo '
                    </td>
                </div>
            </tr>
        </table>
        <tr>
            <td>
                <button type="submit" class="btn bg-gradient-danger w-100 my-4 mb-2">Salvar</button>
            </td>
        </tr>

    </form>';
?>

<script>

    function tipoVaga(){
        let elementoClicado = event.target || event.srcElement;
        let classeElemento = elementoClicado.className;
        // console.log(elementoClicado)
        
        if(classeElemento == "btn btnvaga btn-success"){
            let imgMoto = elementoClicado.children[1];
            let imgCarro = elementoClicado.children[0];

            const estadoDisplay = window.getComputedStyle(imgCarro, null);
            let displayImagemCarro = estadoDisplay.getPropertyValue("display");
            if(displayImagemCarro == "block"){
                
                imgCarro.style.display = "none";
                imgMoto.style.display = "block";
            }else{
                imgCarro.style.display = "block";
                imgMoto.style.display = "none";
            }
        }else if(classeElemento == "imgCarro" || classeElemento == "imgMoto"){

            // Pega id do elemnrto clicado
            let idImgClicada = elementoClicado.id;

            if(classeElemento.includes("imgCarro")){
                // console.log(idCarro)
                // Pega elemento pelo id 
                let imgCarro = document.getElementById(idImgClicada);
                // Pega o outro elemento 
                let idMoto =  idImgClicada.replace("imgCarro", "imgMoto");
                let imgMoto = document.getElementById(idMoto);
                // Faz img moto aparecer
                imgMoto.style.display = "block";
                // Faz img carro sumir
                imgCarro.style.display = "none";
            }else{

                // Pega elemento pelo id 
                let imgMoto = document.getElementById(idImgClicada)

                // Pega elemento img moto pelo id
                let idCarro =  idImgClicada.replace("imgMoto", "imgCarro");
                let imgCarro = document.getElementById(idCarro);
                // Faz img carro aparecer
                imgCarro.style.display = "block";
                // Faz img moto sumir
                imgMoto.style.display = "none";
            }

        }else{
            // Pega button que é o elemento pai de p
            var buttonPai = elementoClicado.parentNode;
            // Pega os filhos de button, que são as imgs
            let imgCarro = buttonPai.children[0];
            let imgMoto = buttonPai.children[1];
            // Pega o estado do display
            const estadoDisplay = window.getComputedStyle(imgCarro, null);
            let displayImagemCarro = estadoDisplay.getPropertyValue("display");
            // Se display de carro for block entra aqui
            if(displayImagemCarro == "block"){
                // Faz img carro sumir 
                imgCarro.style.display = "none";
                // Faz imf moto aparecer
                imgMoto.style.display = "block";
            }else{
                // Faz img moto sumir
                imgMoto.style.display = "none";
                // Faz img carro aparecer
                imgCarro.style.display = "block";
            }
        }
    }
    // PAREI AQUI
    // TODO: Se clicar no numero da pagina de selecionar Vagas

</script>