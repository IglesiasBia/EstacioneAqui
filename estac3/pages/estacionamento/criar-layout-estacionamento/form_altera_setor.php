<div id="setor">
<label for="quantidadeSetor">Escolha a quantidade de setores:</label>
<select name="quantidadeSetor" class="quantidadeSetor" id="quantidadeSetor">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>

    <button onclick="defineQuantidadeButtonSetor()" id="botaoQuantidadeSetor" class='btn  btn-success'>Salvar</button>
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
                
                    <input type="text" id="vagasExistentes" name="vagasExistentes" style="display: none">
                    <input type="text" id="rua" name="rua" style="display: none">
                    <input type="text" id="inputSetorA" name="setorA" style="display: none">
                    <input type="text" id="inputSetorB" name="setorB" style="display: none">
                    <input type="text" id="inputSetorC" name="setorC" style="display: none">
                    <input type="text" id="inputSetorD" name="setorD" style="display: none">
                    <input type="text" id="inputSetorE" name="setorE" style="display: none">
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
                <button type="submit" class="btn bg-gradient-danger w-100 my-4 mb-2" onclick="salvaSetor()">Salvar</button>
            </td>
        </tr>

    </form>';
?>

<script>
    var setores = ["A", "B", "C", "D", "E", "F"];

    var corSetor = ["234, 110, 55", "242, 175, 48", "2, 115, 115", "123, 22, 54", "21, 136, 93"];

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

    function defineSetor() {
        let elementoClicado = event.target || event.srcElement;
        let idElemento = elementoClicado.id;
// console.log(idElemento)
        // Pega input invisível que contem o setor atual
        let inputSetorAtual = document.getElementById("setorAtual");
        // Pega input invisível que contem cor do setor atual
        let inputCorSetorAtual = document.getElementById("corSetorAtual");
        if (idElemento.includes("setor")) {

            // Pega setor atual
            let setorAtual = idElemento.replace("setor", "");
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
                // id parágrafo
                let idParagrafo = paragrafo.id;
                console.log(idParagrafo)
                let numeroIdParagrafo = idParagrafo.replace("numeroVaga", "");
                // Pega conteúdo da tag p
                let textoP = paragrafo.innerText;
                // Pega cor do setor atual pelo input invisível
                let corAtual = document.getElementById("corSetorAtual").value;
                console.log(corAtual);

                // Pega background-color atual
                const corBackground = window.getComputedStyle(buttonPeloId, null);
                let corBackGroundButton = corBackground.getPropertyValue("background-color");

                // Se texto do p for maior que 1 , background-color atual do button for diferente do background-color do setor atual e num da vaga for menor que 10
                if (textoP.length > 1 && corBackGroundButton != "rgb(" + corAtual + ")" && numeroIdParagrafo < 10) {
                    console.log("oi")
                    // Tira o setor anterio
                    paragrafo.innerHTML = textoP.slice(0, -1);
                    // Coloca novo setor
                    paragrafo.innerHTML += inputSetorAtual.value;
                }else if(textoP.length > 2 && corBackGroundButton != "rgb(" + corAtual + ")" && numeroIdParagrafo >= 10){
                  // Tira o setor anterio
                  paragrafo.innerHTML = textoP.slice(0, -1);
                    // Coloca novo setor
                    paragrafo.innerHTML += inputSetorAtual.value;
                }
                // Se conteúdo for menor que dois caracteres entra aqui
                // Caso o button for clicado duas vezes sem ter mudado o setor
                if (textoP.length < 2 && numeroIdParagrafo < 10) {
                    // Adiciona setor
                    paragrafo.innerHTML += inputSetorAtual.value;
                }else if(textoP.length < 3 && numeroIdParagrafo >= 10){
                    // Adiciona setor
                    paragrafo.innerHTML += inputSetorAtual.value;
                    
                }

                // Altera cor do button
                buttonPeloId.style.backgroundColor = "rgb(" + corAtual + ")";
                console.log(corAtual);
            }

            inputSetorAtual.value;
            salvaSetor();
        }
    }


    function salvaSetor() {
        let setorA = [];
        let setorB = [];
        let setorC = [];
        let setorD = [];
        let setorE = [];
        let espacos = 121;
        let contadorEspacos = 1;
        while (contadorEspacos <= espacos) {
            let imgLinha = document.getElementById("imgLinha" + [contadorEspacos]);
            if (imgLinha != null) {
                console.log(imgLinha)
                contadorEspacos++;
            } else {
                // Pega button na posição atual
                console.log("vaga" + [contadorEspacos])
                let buttonPeloId = document.getElementById("vaga" + [contadorEspacos]);
                console.log(buttonPeloId);
                // console.log(buttonPeloId)
                // Pega background-color atual
                const corBackground = window.getComputedStyle(buttonPeloId, null);
                let corBackGroundButton = corBackground.getPropertyValue("background-color");
                console.log(corBackGroundButton)
                // console.log("rgb(" + corSetor[1] + ")")
                if (corBackGroundButton == "rgb(" + corSetor[0] + ")") {
                    // console.log("oi")
                    setorA.push(contadorEspacos);
                } else if (corBackGroundButton == "rgb(" + corSetor[1] + ")") {
                    setorB.push(contadorEspacos);

                } else if (corBackGroundButton == "rgb(" + corSetor[2] + ")") {
                    setorC.push(contadorEspacos);

                } else if (corBackGroundButton == "rgb(" + corSetor[3] + ")") {
                    setorD.push(contadorEspacos);

                } else if (corBackGroundButton == "rgb(" + corSetor[4] + ")") {
                    setorE.push(contadorEspacos);

                }
                contadorEspacos++;
            }
            // Muda value do input para o número da vaga que esta nesse setor
            let inputSetorA = document.getElementById("inputSetorA");

            // console.log("oi")
            // console.log(inputSetorA.value)
            inputSetorA.value = setorA;
            // console.log(inputSetorA.value)

            // Muda value do input para o número da vaga que esta nesse setor
            let inputSetorB = document.getElementById("inputSetorB");
            inputSetorB.value = setorB;

            // Muda value do input para o número da vaga que esta nesse setor
            let inputSetorC = document.getElementById("inputSetorC");
            inputSetorC.value = setorC;
            // console.log(inputSetorC)
            // console.log(inputSetorC.value)
            // Muda value do input para o número da vaga que esta nesse setor

            let inputSetorD = document.getElementById("inputSetorD");
            inputSetorD.value = setorD;

            // let inputSetorD = document.getElementById("inputSetorD");
            // console.log(inputSetorD)
            // // inputSetorD.value = setorD;
            // console.log(inputSetorD.value)

            // Muda value do input para o número da vaga que esta nesse setor
            let inputSetorE = document.getElementById("inputSetorE");
            inputSetorE.value = setorE;
            // // console.log(imgLinha);
            // console.log(contadorEspacos);

            console.log(setorA);
            // console.log()
            console.log(setorB);
            console.log(setorC);
            console.log(setorD);
            console.log(setorE);
        }
    }
    console.log(document.getElementById("setorAtual").value);
</script>