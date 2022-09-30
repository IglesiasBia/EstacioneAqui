<?php
// echo "oi"
$pavimentoAtual = $_GET["id_pavimento"];

echo '
    <form action="?page=altera_tipo_vaga&id_pavimento=' . $pavimentoAtual . '"" method="post" >
        <h1>Defina se a vaga é para motocicletas ou para carro</h1>
        <p>Basta clicar para alterar o tipo da vaga</p>
        <table>
            <tr>
                <div id="teste">
                
                    <input type="text" id="carroVaga" name="carroVaga" style="display: none">
                    <input type="text" id="motoVaga" name="motoVaga" style="display: none">
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
        $idVaga = $resultadoPegaEspacos["num_vaga"];
        if($resultadoPegaEspacos["setor_vaga"] == "A"){

            //Faz button aparecer na tela 
    
            echo " <button type='button' class='btn btnvaga btn-success' onclick='tipoVaga()' id='vaga" . $idVaga . "' name='vaga" . $idVaga . "'  style='position: static; background-color: rgb(126, 76, 175)'>";
            // Imagem carro
            echo "<img src='../assets/img/icons/carlayout.png' width='30em'alt='' style='display: block' class='imgCarro' id='imgCarro" . $idVaga . "' name='imgCarro" . $idVaga . "' onclick='tipoVaga()'>";
            // Imagem moto
            echo "<img src='../assets/img/icons/moto.png' width='30em'alt='' style='display: none' class='imgMoto' id='imgMoto" . $idVaga . "' name='imgMoto" . $idVaga . "' onclick='tipoVaga()'>";
            // Click me
            echo "<p id='numeroVaga" . $numeroVaga . "' name='numeroVaga" . $idVaga . "' style='display: inline' onclick='tipoVaga()'>".$numeroVaga ."A</p>";
            echo "</button>";
        }elseif($resultadoPegaEspacos["setor_vaga"] == "B"){

            //Faz button aparecer na tela 
    
            echo " <button type='button' class='btn btnvaga btn-success' onclick='tipoVaga()' id='vaga" . $idVaga . "' name='vaga" . $idVaga . "'  style='position: static; background-color: rgb(242, 175, 48)'>";
            // Imagem carro
            echo "<img src='../assets/img/icons/carlayout.png' width='30em'alt='' style='display: block' class='imgCarro' id='imgCarro" . $idVaga . "' name='imgCarro" . $idVaga . "' onclick='tipoVaga()'>";
            // Imagem moto
            echo "<img src='../assets/img/icons/moto.png' width='30em'alt='' style='display: none' class='imgMoto' id='imgMoto" . $idVaga . "' name='imgMoto" . $idVaga . "' onclick='tipoVaga()'>";
            // Click me
            echo "<p id='numeroVaga" . $numeroVaga . "' name='numeroVaga" . $idVaga . "' style='display: inline' onclick='tipoVaga()'>".$numeroVaga ."B</p>";
            echo "</button>";
        }elseif($resultadoPegaEspacos["setor_vaga"] == "C"){

            //Faz button aparecer na tela 
    
            echo " <button type='button' class='btn btnvaga btn-success' onclick='tipoVaga()' id='vaga" . $idVaga . "' name='vaga" . $idVaga . "'  style='position: static; background-color: rgb(2, 115, 115)'>";
            // Imagem carro
            echo "<img src='../assets/img/icons/carlayout.png' width='30em'alt='' style='display: block' class='imgCarro' id='imgCarro" . $idVaga . "' name='imgCarro" . $idVaga . "' onclick='tipoVaga()'>";
            // Imagem moto
            echo "<img src='../assets/img/icons/moto.png' width='30em'alt='' style='display: none' class='imgMoto' id='imgMoto" . $idVaga . "' name='imgMoto" . $idVaga . "' onclick='tipoVaga()'>";
            // Click me
            echo "<p id='numeroVaga" . $numeroVaga . "' name='numeroVaga" . $idVaga . "' style='display: inline' onclick='tipoVaga()'>".$numeroVaga ."C</p>";
            echo "</button>";
        }elseif($resultadoPegaEspacos["setor_vaga"] == "D"){

            //Faz button aparecer na tela 
    
            echo " <button type='button' class='btn btnvaga btn-success' onclick='tipoVaga()' id='vaga" . $idVaga . "' name='vaga" . $idVaga . "'  style='position: static; background-color: rgb(123, 22, 54)'>";
            // Imagem carro
            echo "<img src='../assets/img/icons/carlayout.png' width='30em'alt='' style='display: block' class='imgCarro' id='imgCarro" . $idVaga . "' name='imgCarro" . $idVaga . "' onclick='tipoVaga()'>";
            // Imagem moto
            echo "<img src='../assets/img/icons/moto.png' width='30em'alt='' style='display: none' class='imgMoto' id='imgMoto" . $idVaga . "' name='imgMoto" . $idVaga . "' onclick='tipoVaga()'>";
            // Click me
            echo "<p id='numeroVaga" . $numeroVaga . "' name='numeroVaga" . $idVaga . "' style='display: inline' onclick='tipoVaga()'>".$numeroVaga ."D</p>";
            echo "</button>";
        }elseif($resultadoPegaEspacos["setor_vaga"] == "E"){

            //Faz button aparecer na tela 
    
            echo " <button type='button' class='btn btnvaga btn-success' onclick='tipoVaga()' id='vaga" . $idVaga . "' name='vaga" . $idVaga . "'  style='position: static; background-color: rgb(29, 40, 210)'>";
            // Imagem carro
            echo "<img src='../assets/img/icons/carlayout.png' width='30em'alt='' style='display: block' class='imgCarro' id='imgCarro" . $idVaga . "' name='imgCarro" . $idVaga . "' onclick='tipoVaga()'>";
            // Imagem moto
            echo "<img src='../assets/img/icons/moto.png' width='30em'alt='' style='display: none' class='imgMoto' id='imgMoto" . $idVaga . "' name='imgMoto" . $idVaga . "' onclick='tipoVaga()'>";
            // Click me
            echo "<p id='numeroVaga" . $numeroVaga . "' name='numeroVaga" . $idVaga . "' style='display: inline' onclick='tipoVaga()'>".$numeroVaga ."E</p>";
            echo "</button>";
        }

        $numeroVaga++;
    } else {
        $idVaga = $resultadoPegaEspacos["num_vaga"];


        echo " <button type='button' class='btn btnvaga bs-gray-700' ' id='vaga" . $idVaga . "' name='vaga" . $idVaga . "'  style='position: static'>";
        echo "<img src='../assets/img/icons/linha.png' width='30em'alt='' style='display: block' class='imgLinha' id='imgLinha" . $idVaga . "' name='imgLinha" . $idVaga . "'>";
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
    function tipoVaga() {
        let elementoClicado = event.target || event.srcElement;
        let classeElemento = elementoClicado.className;
        // console.log(elementoClicado)

        if (classeElemento == "btn btnvaga btn-success") {
            let imgMoto = elementoClicado.children[1];
            let imgCarro = elementoClicado.children[0];

            const estadoDisplay = window.getComputedStyle(imgCarro, null);
            let displayImagemCarro = estadoDisplay.getPropertyValue("display");
            if (displayImagemCarro == "block") {

                imgCarro.style.display = "none";
                imgMoto.style.display = "block";
            } else {
                imgCarro.style.display = "block";
                imgMoto.style.display = "none";
            }
        } else if (classeElemento == "imgCarro" || classeElemento == "imgMoto") {

            // Pega id do elemnrto clicado
            let idImgClicada = elementoClicado.id;

            if (classeElemento.includes("imgCarro")) {
                // console.log(idCarro)
                // Pega elemento pelo id 
                let imgCarro = document.getElementById(idImgClicada);
                // Pega o outro elemento 
                let idMoto = idImgClicada.replace("imgCarro", "imgMoto");
                let imgMoto = document.getElementById(idMoto);
                // Faz img moto aparecer
                imgMoto.style.display = "block";
                // Faz img carro sumir
                imgCarro.style.display = "none";
            } else {

                // Pega elemento pelo id 
                let imgMoto = document.getElementById(idImgClicada)

                // Pega elemento img moto pelo id
                let idCarro = idImgClicada.replace("imgMoto", "imgCarro");
                let imgCarro = document.getElementById(idCarro);
                // Faz img carro aparecer
                imgCarro.style.display = "block";
                // Faz img moto sumir
                imgMoto.style.display = "none";
            }

        } else {
            // console.log("oi")
            // Pega button que é o elemento pai de p
            var labelPai = elementoClicado.parentNode;

            let buttonPai = labelPai.parentNode;
            // console.log(buttonPai)
            // Pega os filhos de button, que são as imgs
            let imgCarro = buttonPai.children[0];

            console.log(imgCarro)
            let imgMoto = buttonPai.children[1];
            console.log(imgMoto)
            // Pega o estado do display
            const estadoDisplay = window.getComputedStyle(imgCarro, null);
            let displayImagemCarro = estadoDisplay.getPropertyValue("display");

            let carroPeloId = document.getElementById(imgCarro.id);
            let motoPeloId = document.getElementById(imgMoto.id);
            // console.log(carroPeloId)

            // // Se display de carro for block entra aqui
            // if(displayImagemCarro == "block"){
            //     console.log("oi")

            //     // Faz img carro sumir 
            //     carroPeloId.style.display = "none";
            //     // Faz imf moto aparecer
            //     motoPeloId.style.display = "block";
            //     console.log(carroPeloId)
            //     console.log(displayImagemCarro)
            // }else if(displayImagemCarro == "none"){
            //     console.log("oi")
            //     // console.log(displayImagemCarro)
            //     // // Faz img moto sumir
            //     motoPeloId.style.display = "none";

            //     // // Faz img carro aparecer
            //     // carroPeloId.style.display = "block";
            //     console.log(displayImagemCarro)
            // }
        }
        defineTipoVaga()
    }

    function defineTipoVaga() {
        let totalEspacos = 121;
        let vagaCarro = [];
        let motoVaga = [];
        // Pega inputs invisíveis que guardarão os dados 
        let resultadoVagaCarro = document.getElementById("carroVaga");
        let resulatdoMotoVaga = document.getElementById("motoVaga");

        let contador = 1;
        // Enquanto hover espacos entra aqui
        while (contador <= totalEspacos) {
            // Pega linha na posição atual
            let rua = document.getElementById("imgLinha" + contador);
            // Se linha existir entra aqui
            if (rua != null) {
                // Só vai para próxima posição
                contador++;
            } //Se linha não existir entra aqui
            else {
                // Pega as img carro na posição atual
                let imgCarro = document.getElementById("imgCarro" + contador);

                // Pega display da img Carro
                const estadoDisplay = window.getComputedStyle(imgCarro, null);
                let displayImagemCarro = estadoDisplay.getPropertyValue("display");
                // Se display for block (img aparecendo) entra aqui
                if (displayImagemCarro == "block") {
                    // coloca id img carro no array de toipo vaga carro
                    let idImgCarro = imgCarro.id;
                    vagaCarro.push(idImgCarro);
                } // Se display for none (img carro não aparecendo) entra aqui 
                else {
                    // Pega as img moto na posição atual
                    let imgMoto = document.getElementById("imgMoto" + contador);
                    // Coloca id moto na posição atual no array do tipo vaga moto
                    motoVaga.push(imgMoto.id);
                }
                contador++;

                // Altera valor do inpu escondido
                resultadoVagaCarro.value = vagaCarro;
                resulatdoMotoVaga.value = motoVaga;
                // console.log(motoVaga)
                // console.log(vagaCarro)
            }
        }
    }
    // PAREI AQUI
    // TODO: Se clicar no numero da pagina de selecionar Vagas
</script>