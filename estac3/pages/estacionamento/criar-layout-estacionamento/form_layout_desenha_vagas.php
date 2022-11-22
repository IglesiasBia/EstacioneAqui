<script>
    numeraVaga();
</script>
<?php
// Pega id do pavimento atual
$pavimentoAtual = $_GET["id_pavimento"];
$sqlPegadadosEspacos = mysqli_query($con, "select * from vagas where pav_vaga='" . $pavimentoAtual . "';");
if (mysqli_fetch_array($sqlPegadadosEspacos) == null) {

    // TODO: Se pavimento já existir aparecer ele desde aqui e botào para limpar todo ele 
    // Input escondido que vai estar com respotas de quantos pavimentos existem
    echo '
    <form action="?page=altera_layout_vagas&id_pavimento=' . $pavimentoAtual . '" method="post" >
        <h1>Pavimento ' . $pavimentoAtual . '</h1>
        <p>Selecione onde há vagas</p>
        <button type="button" class="btn btnvaga btn-success" onclick="alteraTipo()" id="tipoButtonVaga"><img src="../assets/img/icons/carlayout.png" width="30em" id="tipoImgVaga"></button>
        <button type="button" class="btn btnvaga bs-gray-700" onclick="alteraTipo()"  id="tipoButtonRua"><img src="../assets/img/icons/linha.png" width="30em" id="tipoImgRua"></button>
        <button type="button" class="btn btnvaga btn-dark" onclick="alteraTipo()" id="tipoNada">oi</button>
                
                <div class="grid-container" id="containerVagas">
                <input type="text" value="' . $pavimentoAtual . '" name="pavimentoAtual" id="pavimentoAtual" style="display: none">
                    <input type="text" id="vagasExistentes" name="vagasExistentes" style="display: none">
                    <input type="text" id="rua" name="rua" style="display: none">
                    <input type="text" id="nada" name="nada" style="display: none">
                    <input type="text" id="tipo" name="tipo" style="display: none">
                    
                </div>
    ';
    // <button type="button" class="btn btnvaga btn-dark" onclick="apagaVaga()" id="vaga "  style=" min-height:70px>oioioio</button>
} else {
    // echo "oi";
    // Input escondido que vai estar com respotas de quantos pavimentos existem
    echo '
        <form action="?page=altera_layout_vagas&id_pavimento=' . $pavimentoAtual . '" method="post" >
            <h1>Pavimento ' . $pavimentoAtual . '</h1>
            <p>Selecione onde há vagas</p>
            <button type="button" class="btn btnvaga btn-success" onclick="alteraTipo()" id="tipoButtonVaga"><img src="../assets/img/icons/carlayout.png" width="30em" id="tipoImgVaga"></button>
            <button type="button" class="btn btnvaga bs-gray-700" onclick="alteraTipo()"  id="tipoButtonRua"><img src="../assets/img/icons/linha.png" width="30em" id="tipoImgRua"></button>
            <button type="button" class="btn btnvaga btn-dark " onclick="alteraTipo()" id="tipoNada" style=" height: 49px;"></button>
            <hr>        
            <div class="grid-container" id="atualizaLayout">
                    <input type="text" value="' . $pavimentoAtual . '" name="pavimentoAtual" id="pavimentoAtual" style="display: none">
                        <input type="text" id="vagasExistentes" name="vagasExistentes" style="display: none">
                        <input type="text" id="rua" name="rua" style="display: none">
                        <input type="text" id="nada" name="nada" style="display: none">
                        <input type="text" id="tipo" name="tipo" style="display: none">';

    $sqlPegaLayoutCriado = mysqli_query($con, "select * from vagas where pav_vaga='" . $pavimentoAtual . "';");
    $contador = 1;
    while ($resultadoPegaLayoutCriado = mysqli_fetch_array($sqlPegaLayoutCriado)) {

        if ($resultadoPegaLayoutCriado["tipo_vaga"] == '1' || $resultadoPegaLayoutCriado["tipo_vaga"] == '0') {
            echo "<div class='grid-item'>
                <button type='button' class='btn btnvaga btn-success' onclick='alteraTipo()' id='vaga" . $contador . "' name='vaga" .  $contador . "' style='position: static'>";
            echo " <img src='../assets/img/icons/carlayout.png' width='30em'alt='' style='display: inline-block' class='imgCarro' id='imgCarro" .  $contador . "' name='imgCarro" .  $contador . "'>";
            echo   "<img src='../assets/img/icons/linha.png' width='30em'alt='' style='display: none' class='imgLinha' id='imgLinha" .  $contador . "' name='" .  $contador . "'>";
            echo "
                    <p id='numeroVaga" .  $contador . "' name='numeroVaga" .  $contador . "' style='display: inline'></p>
                </button>
            </div>";
        } elseif ($resultadoPegaLayoutCriado["tipo_vaga"] == '3') {
            echo "<div class='grid-item'>
                <button type='button' class='btn btnvaga bs-gray-700' onclick='alteraTipo()' id='vaga" . $contador . "' name='vaga" .  $contador . "' style='position: static'>";
            echo " <img src='../assets/img/icons/carlayout.png' width='30em'alt='' style='display: none' class='imgCarro' id='imgCarro" .  $contador . "' name='imgCarro" .  $contador . "'>";
            echo   "<img src='../assets/img/icons/linha.png' width='30em'alt='' style='display: inline-block' class='imgLinha' id='imgLinha" .  $contador . "' name='" .  $contador . "'>";
            echo "
                    <p id='numeroVaga" .  $contador . "' name='numeroVaga" .  $contador . "' style='display: inline'></p>
                </button>
            </div>";
        } elseif ($resultadoPegaLayoutCriado["tipo_vaga"] == '4') {
            echo "<div class='grid-item'>
                <button type='button' class='btn btnvaga btn-dark' onclick='alteraTipo()' id='vaga" . $contador . "' name='nada" .  $contador . "' style='position: static; min-height:50px'>";
            echo " <img src='../assets/img/icons/carlayout.png' width='30em'alt='' style='display: none' class='imgCarro' id='imgCarro" .  $contador . "' name='imgCarro" .  $contador . "'>";
            echo   "<img src='../assets/img/icons/linha.png' width='30em'alt='' style='display: none' class='imgLinha' id='imgLinha" .  $contador . "' name='" .  $contador . "'>";
            echo "
                    <p id='numeroVaga" .  $contador . "' name='numeroVaga" .  $contador . "' style='display: inline'></p>
                </button>
            </div>";
        }
        // echo $contador;
        $contador++;
    }
    echo "</div>";
    // echo "</div></tr></table>";
}
?>

<script>
    // Pega URL atual 
    const parametrosUrl = new URLSearchParams(window.location.search);
    console.log(parametrosUrl.get("id_pavimento"));
    // Pega pavimento atual pela da URL
    let quantidadePavimento = parametrosUrl.get("id_pavimento");

    // faz a página
    // let divConteudo = document.getElementById("conteudo");
    // // divConteudo.innerHTML += ``;

    let vagas = 132;
    let contador = 1;

    while (contador <= vagas) {

        let elemento = document.getElementById("containerVagas");
        elemento.innerHTML += `
        <div class='grid-item'>
            <button type='button' class='btn btnvaga btn-dark' onclick="alteraTipo()" id='vaga` + contador + `'name='vaga` + contador + `' style="position: static; min-height:70px">
                <img src='../assets/img/icons/carlayout.png' width='30em'alt='' style="display: none" class="imgCarro" id="imgCarro` + contador + `" name="imgCarro` + contador + `">
                <img src='../assets/img/icons/linha.png' width='30em'alt='' style="display: none; " class="imgLinha" id="imgLinha` + contador + `" name="` + contador + `">
                <p id="numeroVaga` + contador + `" name="numeroVaga` + contador + `" style="display: inline"></p>
            </button>
        </div>`;
        contador++;

    }

    function alteraTipo() {
        let elementoClicado = event.target || event.srcElement;
        console.log("oi");
        if (elementoClicado.id.includes("tipo")) {
            if (elementoClicado.id == "tipoButtonVaga" || elementoClicado.id == "tipoImgVaga") {
                let tipo = document.getElementById("tipo");
                tipo.value = "vaga";
                console.log(tipo.value);
            } else if (elementoClicado.id == "tipoButtonRua" || elementoClicado.id == "tipoImgRua") {
                let tipo = document.getElementById("tipo");
                tipo.value = "rua";
                console.log(tipo.value);
            } else if (elementoClicado.id == "tipoNada") {
                let tipo = document.getElementById("tipo");
                tipo.value = "nada";
                console.log(tipo.value);
            }
        } else {
            console.log("ser");




            // Pega botão que possui esse id
            let botao = document.getElementById(elementoClicado.id);

            // Pega classe desse botão
            let classe = botao.className;
            console.log(classe);

            if (classe.includes("btn-dark")) {
                let tipo = document.getElementById("tipo").value;
                if (tipo == "vaga") {

                    let numeroId = elementoClicado.id.replace("vaga", "");
                    console.log(numeroId);

                    // Se o lemento clicacdo for um button entra aqui
                    if (elementoClicado.id.includes("vaga")) {
                        // Tiara class que deixa o button preto
                        botao.classList.remove('btn-dark');


                        // Coloca class que deixa button verde
                        botao.classList.add('btn-success');
                        // Coloca imegem do carro
                        let imgCarro = document.getElementById("imgCarro" + numeroId);

                        imgCarro.style.display = 'inline-block';
                        // Chama funcão que numera as vagas
                        numeraVaga();

                    }
                } else if (tipo == "rua") {
                    let numeroId = elementoClicado.id.replace("vaga", "");
                    console.log(numeroId);

                    // Se o lemento clicacdo for um button entra aqui
                    if (elementoClicado.id.includes("vaga")) {
                        // Tiara class que deixa o button preto
                        botao.classList.remove('btn-dark');


                        // Coloca class que deixa button verde
                        botao.classList.add('bs-gray-700');
                        // Coloca imegem do carro
                        let imgCarro = document.getElementById("imgLinha" + numeroId);

                        imgCarro.style.display = 'inline-block';
                        // Chama funcão que numera as vagas
                        numeraVaga();

                    }
                }
            } else if (classe.includes("bs-gray-700")) {
                let tipo = document.getElementById("tipo").value;
                if (tipo == "vaga") {

                    let numeroId = elementoClicado.id.replace("vaga", "");
                    console.log(numeroId);

                    // Se o lemento clicacdo for um button entra aqui
                    if (elementoClicado.id.includes("vaga")) {
                        // Tiara class que deixa o button preto
                        botao.classList.remove('bs-gray-700');

                        // Tira imagem da linha
                        let imgLinha = document.getElementById("imgLinha" + numeroId);

                        imgLinha.style.display = 'none';
                        // Coloca class que deixa button verde
                        botao.classList.add('btn-success');
                        // Coloca imegem do carro
                        let imgCarro = document.getElementById("imgCarro" + numeroId);

                        imgCarro.style.display = 'inline-block';
                        // Chama funcão que numera as vagas
                        numeraVaga();

                    }
                } else if (tipo == "nada") {
                    let numeroId = elementoClicado.id.replace("vaga", "");
                    console.log(numeroId);

                    // Se o lemento clicacdo for um button entra aqui
                    if (elementoClicado.id.includes("vaga")) {
                        // Tiara class que deixa o button preto
                        botao.classList.remove('bs-gray-700');


                        // Coloca class que deixa button verde
                        botao.classList.add('btn-dark');
                        // Coloca imegem do carro
                        let imgLinha = document.getElementById("imgLinha" + numeroId);

                        imgLinha.style.display = 'none';
                        // Chama funcão que numera as vagas
                        numeraVaga();

                    }
                }
            } else if (classe.includes("btn-success")) {
                let tipo = document.getElementById("tipo").value;
                if (tipo == "rua") {

                    let numeroId = elementoClicado.id.replace("vaga", "");
                    console.log(numeroId);

                    // Se o lemento clicacdo for um button entra aqui
                    if (elementoClicado.id.includes("vaga")) {

                        // Tira class que deixa button verde
                        botao.classList.remove('btn-success');

                        // Tira imegem do carro
                        let imgCarro = document.getElementById("imgCarro" + numeroId);

                        imgCarro.style.display = 'none';
                        //   Coloca class que deixa button cinza
                        botao.classList.add('bs-gray-700');

                        // Coloca imagem da linha
                        let imgLinha = document.getElementById("imgLinha" + numeroId);

                        imgLinha.style.display = 'inline-block';
                        // Chama funcão que numera as vagas
                        numeraVaga();

                    }
                } else if (tipo == "nada") {
                    let numeroId = elementoClicado.id.replace("vaga", "");
                    console.log(numeroId);

                    // Se o lemento clicacdo for um button entra aqui
                    if (elementoClicado.id.includes("vaga")) {
                        // Tiara class que deixa o button preto
                        botao.classList.remove('btn-success');


                        // Tira imegem do carro
                        let imgCarro = document.getElementById("imgCarro" + numeroId);

                        imgCarro.style.display = 'none';

                        // Coloca class que deixa button preto
                        botao.classList.add('btn-dark');
                        // Chama funcão que numera as vagas
                        numeraVaga();

                    }
                }
            }
        }
    }

    // function apagaVaga() {
    //     // Pega elemento que disparou o evento
    //     let el = event.target || event.srcElement;
    //     // Pega class do elemento
    //     let classElemento = el.className;

    //     // Pega id desse elemento
    //     let idElemento = el.id;
    //     // console.log(idElemento);








    //     // Se clicar na imagem e não no button entra aqui (é verificado pela class)
    //     if (classElemento == "imgCarro" || classElemento == "imgLinha") {

    //         // Pega o elemento pai da imagem
    //         let elementoPai = el.parentNode;

    //         // Pega id do elemento pai
    //         let idElementoPai = elementoPai.id;

    //         let numeroIdElementoPai = idElementoPai.replace("vaga", "");


    //         // Pega class do elemento pai 
    //         let classElementoPai = elementoPai.className;
    //         // Se for cinza
    //         if (classElementoPai.includes('bs-gray-700')) {
    //             // Tira cinza
    //             elementoPai.classList.remove('bs-gray-700');

    //             // Tira imagem da linha
    //             let imgLinha = document.getElementById("imgLinha" + numeroIdElementoPai);
    //             imgLinha.style.display = 'none';

    //             // Coloca verde
    //             elementoPai.classList.add('btn-success');
    //             // Coloca imegem do carro
    //             let imgCarro = document.getElementById("imgCarro" + numeroIdElementoPai);
    //             imgCarro.style.display = 'inline-block';
    //             // Chama funcão que numera as vagas
    //             numeraVaga();
    //             // criaEstacionamento();

    //         } else {
    //             // Tira verde
    //             elementoPai.classList.remove('btn-success');
    //             // Tira imagem do carro
    //             let imgCarro = document.getElementById("imgCarro" + numeroIdElementoPai);

    //             imgCarro.style.display = 'none';
    //             // Coloca cinza
    //             elementoPai.classList.add('bs-gray-700');
    //             // Coloca imagem da linha
    //             let imgLinha = document.getElementById("imgLinha" + numeroIdElementoPai);
    //             imgLinha.style.display = 'inline-block';
    //             // Chama funcão que numera as vagas
    //             numeraVaga();
    //             // criaEstacionamento();
    //         }
    //     } else {


    //         // Pega somente o número
    //         let numeroId = idElemento.replace("vaga", "");
    //         console.log(numeroId);
    //         // Pega botão que possui esse id
    //         let botao = document.getElementById(idElemento);

    //         // Pega classe desse botão
    //         let classe = botao.className;

    //         // Se for cinza
    //         if (classe.includes('bs-gray-700')) {
    //             // Tira cinza
    //             botao.classList.remove('bs-gray-700');
    //             // Tira imagem da linha
    //             let imgLinha = document.getElementById("imgLinha" + numeroId);

    //             imgLinha.style.display = 'none';

    //             // Coloca verde
    //             botao.classList.add('btn-success');
    //             // Coloca imegem do carro
    //             let imgCarro = document.getElementById("imgCarro" + numeroId);

    //             imgCarro.style.display = 'inline-block';
    //             // Chama funcão que numera as vagas
    //             numeraVaga();
    //         } else {
    //             // Tira verde
    //             botao.classList.remove('btn-success');
    //             // Tira imagem do carro
    //             let imgCarro = document.getElementById("imgCarro" + numeroId);

    //             imgCarro.style.display = 'none';
    //             // Coloca cinza
    //             botao.classList.add('bs-gray-700');
    //             // Coloca imagem da linha
    //             let imgLinha = document.getElementById("imgLinha" + numeroId);
    //             imgLinha.style.display = 'inline-block';
    //             // Chama funcão que numera as vagas
    //             numeraVaga();
    //         }

    //     }


    // }

    function numeraVaga() {
        let c = 1;
        let num = 1;
        while (c <= vagas) {
            console.log(document.getElementById("numeroVaga" + c))
            // Se o usuário clicar no botão
            // Pega id do botão
            idBotao = document.getElementById("vaga" + c);

            // Verifica display da imagem do carro
            let botaoFilho = idBotao.children;
            console.log(botaoFilho[0]);
            let imagembotaoFilho = botaoFilho[0];
            const estadoDisplay = window.getComputedStyle(imagembotaoFilho, null);
            let displayImagemBotao = estadoDisplay.getPropertyValue("display");
            console.log(displayImagemBotao);


            // Se o usuário clicar na imagem
            // Pega elemento pelo id
            idElemento = document.getElementById("imgCarro" + c);

            // Pega class do elemento
            classElemento = idElemento.className;
            // Verifica estilo display 
            const cssObj = window.getComputedStyle(idElemento, null);
            let displayImagem = cssObj.getPropertyValue("display");

            if (classElemento == "imgCarro" && displayImagem == "inline-block") {

                // Limpa o conteúdo de todos os parágrafos 
                document.getElementById("numeroVaga" + c).textContent = "";
                // Numera os parágrafos
                document.getElementById("numeroVaga" + c).textContent = num++;

            } else if (idBotao.id == "vaga" + c && displayImagemBotao == "inline-block") {

                // Limpa o conteúdo de todos os parágrafos 
                document.getElementById("numeroVaga" + c).textContent = "";
                // Numera os parágrafos
                document.getElementById("numeroVaga" + c).textContent = num++;

            } else {
                // Pega o elemento pai da imagem
                let elementoPai = idElemento.parentNode;

                // Pega id do elemento pai
                let idElementoPai = elementoPai.id;
                // Limpa o conteúdo de todos os parágrafos 
                document.getElementById("numeroVaga" + c).textContent = "";
            }
            c++;
            criaEstacionamento();

        }
    }

    function criaEstacionamento() {
        let vagasExistentes = [];
        let rua = [];
        let nada = [];
        let cont = 1;
        // Passa por todas as imagens
        while (cont <= vagas) {
            // Pega imagem carro no id atual
            idImgCarro = document.getElementById("imgCarro" + cont);
            // Pega display da img carro
            const displayCarro = window.getComputedStyle(idImgCarro, null);
            let displayImgCarro = displayCarro.getPropertyValue("display");

            // Pega imagem linha no id atual
            idImgLinha = document.getElementById("imgLinha" + cont);
            // Pega display da img linha
            const displayLinha = window.getComputedStyle(idImgLinha, null);
            let displayImgLinha = displayLinha.getPropertyValue("display");


            // Se a imagem do carro for visível entra aqui
            if (displayImgCarro == "none" && displayImgLinha == "none") {




                // Adciona nada na posicão atual ao array
                nada.push("imgCarro" + cont);

                // // Adciona vaga na posicão atual ao array
                // vagasExistentes.push("imgCarro" + cont);
            } else if (displayImgCarro == "inline-block") {
                // Adiciona espaco na posição atual ao array
                vagasExistentes.push("imgCarro" + cont);
            } else {
                rua.push("imgCarro" + cont);
            }
            cont++;
        }

        // Pega input
        let respostaVagasExistentes = document.getElementById("vagasExistentes");
        // Muda value do input
        respostaVagasExistentes.value = vagasExistentes;
        // Pega input
        let respostaRua = document.getElementById("rua");
        // Muda value do input
        respostaRua.value = rua;
        // Pega input
        let respostaNada = document.getElementById("nada");
        // Muda value do input
        respostaNada.value = nada;

    }
</script>
    <td><button type="submit" class="btn bg-gradient-danger w-100 my-4 mb-2">Salvar</button></td>
</form>