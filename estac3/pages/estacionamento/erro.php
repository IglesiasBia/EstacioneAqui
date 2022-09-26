<div id="setor">
    <input type="text" id="quantidadeSetor" style="display: block">
    <button onclick="defineQuantidadeButtonSetor()" id="botaoQuantidadeSetor">vai</button>
    <input type="text" id="setorAtual" onclick="defineSetor()" style="display: none">
    <input type="text" id="corSetorAtual" onclick="defineSetor()" style="display: none">
</div>

<?php
$pavimentoAtual = $_GET["id_pavimento"];

echo '
    <form action="?page=altera_setor&id_pavimento=' . $pavimentoAtual . '"" method="post" >
        <table>
            <tr>
                <div id="teste">
                
                    <input type="text" id="setorA" name="setorA" style="display: none">
                    <input type="text" id="setorB" name="setorB" style="display: none">
                    <input type="text" id="setorC" name="setorC" style="display: none">
                    <input type="text" id="setorD" name="setorD" style="display: none">
                    <input type="text" id="setorE" name="setorE" style="display: none">
                    <td>
                
    ';
// SQL que pega todos os epacos
$sqlPegaEspacos = mysqli_query($con, "select * from vagas where pav_vaga='" . $pavimentoAtual . "' order by num_vaga");

// Contador que vai fazer com que as vagas sejam numeradas corretamente
$numeroVaga = 1;
// Enquanto houver espacos fica nesse lopp
while ($resultadoPegaEspacos = mysqli_fetch_array($sqlPegaEspacos)) {
    // Se o espaco atual for do tpo 0 (vaga) entra aqui
    if ($resultadoPegaEspacos["tipo_vaga"] == 0) {
        // Pega id do espaco atual
        $idVaga = $resultadoPegaEspacos["num_vaga"];

        //Faz button aparecer na tela 

        echo " <button type='button' class='btn btnvaga btn-success' onclick='defineSetor()' id='vaga" . $idVaga . "' name='vaga" . $idVaga . "'  style='position: static'>";
        echo "<img src='../assets/img/icons/carlayout.png' width='30em'alt='' style='display: block' class='imgCarro' id='imgCarro" . $idVaga . "' name='imgCarro" . $idVaga . "'  >";

        echo "<p id='numeroVaga" . $numeroVaga . "' name='numeroVaga" . $idVaga . "' style='display: inline'  >$numeroVaga</p>";
        echo "</button>";
        $numeroVaga++;
    } else {
        $idVaga = $resultadoPegaEspacos["num_vaga"];


        echo " <button type='button' class='btn btnvaga bs-gray-700'' onclick='defineSetor()' id='vaga" . $idVaga . "' name='vaga" . $idVaga . "'  style='position: static'>";
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
    var setores = ["A", "B", "C", "D", "E", "F"];

    var corSetor = ["0, 0, 255", "128, 0, 128", "186, 208, 0", "30, 160, 48 ", "208, 0, 170 "];

    function defineQuantidadeButtonSetor() {

        let inputQuantidadeSetor = document.getElementById("quantidadeSetor");
        inputQuantidadeSetor.style.display = 'none';
        let botaoQuantidadeSetor = document.getElementById("botaoQuantidadeSetor");
        botaoQuantidadeSetor.style.display = 'none';

        let quantidadeSetor = document.getElementById("quantidadeSetor").value;

        let divSetor = document.getElementById("setor");

        let contador = 0;
        while (contador < quantidadeSetor) {
            // console.log("oi"); rgb(' + corSetor[contador] + ')"
            divSetor.innerHTML += '<button type="button" class="btn btn-danger" style="background-color: rgb(' + corSetor[contador] + ')" id="setor' + setores[contador] + '"  onclick="defineSetor()">Setor ' + setores[contador] + '</button> ';
            contador++;
        }
    }
    let teste = document.getElementById("setorAtual");
        console.log(teste.value)
    function defineSetor() {
        let elementoClicado = event.target || event.srcElement;
        let idElemento = elementoClicado.id;

        // Pega input invisível que contem o setor atual
        let inputSetorAtual = document.getElementById("setorAtual");
        console.log(inputSetorAtual.value)
        // Pega input invisível que contem cor do setor atual
        let inputCorSetorAtual = document.getElementById("corSetorAtual");
        if (idElemento.includes("setor")) {

            // Pega setor atual
            let setorAtual = idElemento.replace("setor", "setorA");
            // Pega posição do setor atual no array
            let indexSetorAtual = setores.indexOf(setorAtual);
            // Pega cor do setor que possui o esmo index do setor
            inputCorSetorAtual.value = corSetor[indexSetorAtual];

            // console.log()

            // console.log(indexSetorAtual)
            // Altera valor do input invisível
            inputSetorAtual.value = setorAtual;
            // console.log(inputSetorAtual.value);
            // console.log(inputCorSetorAtual.value);
        } else {
            if (idElemento.includes("vaga")) {
                // let idButtonAtual = idElemento.replace("vaga","imgCarro");
                let buttonPeloId = document.getElementById(idElemento);
                // Pega tag p filha do botao atual
                let paragrafo = buttonPeloId.children[1];
                // Pega conteúdo da tag p
                let textoP = paragrafo.innerText;
                // Pega cor do setor atual pelo input invisível
                let corAtual = document.getElementById("corSetorAtual").value;

                // Pega background-color atual
                const corBackground = window.getComputedStyle(buttonPeloId, null);
                let corBackGroundButton = corBackground.getPropertyValue("background-color");

                // Se texto do p for maior que 1 e background-color atual do button for diferente do background-color do setor atual 
                if (textoP.length > 1 && corBackGroundButton != "rgb(" + corAtual + ")") {
                    console.log("oi")
                    // Tira o setor anterio
                    paragrafo.innerHTML = textoP.slice(0, -1);
                    // Coloca novo setor
                    paragrafo.innerHTML += inputSetorAtual.value;
                }
                // Se conteúdo for menor que dois caracteres entra aqui
                // Caso o button for clicado duas vezes sem ter mudado o setor
                if (textoP.length < 2) {
                    // Adiciona setor
                    paragrafo.innerHTML += inputSetorAtual.value;
                }

                // Altera cor do button
                buttonPeloId.style.backgroundColor = "rgb(" + corAtual + ")";
            }

            inputSetorAtual.value;
           
        }
        // salvaSetor();
    }
    // let setorA = [];
    // let setorB = [];
    // let setorC = [];
    // let setorD = [];
    // let setorE = [];

    function salvaSetor() {
        // let espacos = 121;
        // let contadorEspacos = 1;
        // while (contadorEspacos <= espacos) {
        //     let imgLinha = document.getElementById("imgLinha" + [contadorEspacos]);
        //     if (imgLinha == null) {
        //         contadorEspacos++;
        //     } else {
        //         // Pega button na posição atual
        //         let buttonPeloId = document.getElementById("vaga" + [contadorEspacos]);
        //         // Pega background-color atual
        //         const corBackground = window.getComputedStyle(buttonPeloId, null);
        //         let corBackGroundButton = corBackground.getPropertyValue("background-color");
        //         console.log(corBackGroundButton)
        //         if (corBackGroundButton == "rgb(" + corSetor[0] + ")") {
        //             setorA.push(contadorEspacos);
        //         } else if (corBackGroundButton == "rgb(" + corSetor[1] + ")") {
        //             setorB.push(contadorEspacos);

        //         } else if (corBackGroundButton == "rgb(" + corSetor[2] + ")") {
        //             setorC.push(contadorEspacos);

        //         } else if (corBackGroundButton == "rgb(" + corSetor[3] + ")") {
        //             setorD.push(contadorEspacos);

        //         } else if (corBackGroundButton == "rgb(" + corSetor[4] + ")") {
        //             setorE.push(contadorEspacos);

        //         }
        //         // Muda value do input para o número da vaga que esta nesse setor
        //         let inputSetorA = document.getElementById("setorA");
        //         inputSetorA.value = setorA;

        //         // Muda value do input para o número da vaga que esta nesse setor
        //         let inputSetorB = document.getElementById("setorB");
        //         inputSetorA.value = setorB;

        //         // Muda value do input para o número da vaga que esta nesse setor
        //         let inputSetorC = document.getElementById("setorC");
        //         inputSetorA.value = setorC;

        //         // Muda value do input para o número da vaga que esta nesse setor
        //         let inputSetorD = document.getElementById("setorD");
        //         inputSetorA.value = setorD;

        //         // Muda value do input para o número da vaga que esta nesse setor
        //         let inputSetorE = document.getElementById("setorE");
        //         inputSetorA.value = setorE;

                
        //         console.log(setorA);
        //         console.log(setorB);
        //         console.log(setorC);
        //         console.log(setorD);
        //         console.log(setorE);
        //     }
        //     console.log(imgLinha);
        //     console.log(contadorEspacos);

        //     contadorEspacos++;

        // }
    }
    console.log(document.getElementById("setorAtual").value);
</script>