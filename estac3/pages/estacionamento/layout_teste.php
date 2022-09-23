<?php

$pavimentoAtual = $_GET["id_pavimento"];
echo $pavimentoAtual;
// Pega a quantidade de pavimentos
// $quantidadePavimentos = $_POST["quantidadePavimentos"];
// echo $quantidadePavimentos;

// Input escondido que vai estar com respotas de quantos pavimentos existem
echo '
<form action="?page=altera_layout_novo" method="post" >
    <table>
        <tr>
            <div id="teste">
            <input type="text" value="' . $pavimentoAtual . '" name="pavimentoAtual" id="pavimentoAtual" style="display: none">
                <input type="text" id="vagasExistentes" name="vagasExistentes" style="display: none">
                <input type="text" id="rua" name="rua" style="display: none">
            </div>
';
?>

<script>
    // Pega do input escondido o seu value
    let quantidadePavimento = document.getElementById("pavimentoAtual").value;
    console.log(quantidadePavimento);

    // faz a página
    let divConteudo = document.getElementById("conteudo");
    // divConteudo.innerHTML += ``;

    let vagas = 121;
    let contador = 1;

    while (contador <= vagas) {
        // console.log(screen.width);

        let elemento = document.getElementById("teste");
        elemento.innerHTML += `
        <td>
            <button type='button' class='btn btnvaga bs-gray-700' onclick="apagaVaga()" id='vaga` + contador + `'name='vaga` + contador + `' style="position: static">
                <img src='../assets/img/icons/carlayout.png' width='30em'alt='' style="display: none" class="imgCarro" id="imgCarro` + contador + `" name="imgCarro` + contador + `">
                <img src='../assets/img/icons/linha.png' width='30em'alt='' style="display: block" class="imgLinha" id="imgLinha` + contador + `" name="` + contador + `">
                <p id="numeroVaga` + contador + `" name="numeroVaga` + contador + `" style="display: inline"></p>
            </button>
        </td>`;
        contador++;

    }

    // let numeroVaga = 0;
    function apagaVaga() {
        // Pega elemento que disparou o evento
        let el = event.target || event.srcElement;
        // Pega class do elemento
        let classElemento = el.className;

        // Pega id desse elemento
        let idElemento = el.id;
        // console.log(idElemento);

        // Se clicar na imagem e não no button entra aqui (é verificado pela class)
        if (classElemento == "imgCarro" || classElemento == "imgLinha") {

            // Pega o elemento pai da imagem
            let elementoPai = el.parentNode;

            // Pega id do elemento pai
            let idElementoPai = elementoPai.id;

            let numeroIdElementoPai = idElementoPai.replace("vaga", "");


            // Pega class do elemento pai 
            let classElementoPai = elementoPai.className;
            // Se for cinza
            if (classElementoPai.includes('bs-gray-700')) {
                // Tira cinza
                elementoPai.classList.remove('bs-gray-700');

                // Tira imagem da linha
                let imgLinha = document.getElementById("imgLinha" + numeroIdElementoPai);
                imgLinha.style.display = 'none';

                // Coloca verde
                elementoPai.classList.add('btn-success');
                // Coloca imegem do carro
                let imgCarro = document.getElementById("imgCarro" + numeroIdElementoPai);
                imgCarro.style.display = 'inline-block';
                // Chama funcão que numera as vagas
                numeraVaga();
                // criaEstacionamento();

            } else {
                // Tira verde
                elementoPai.classList.remove('btn-success');
                // Tira imagem do carro
                let imgCarro = document.getElementById("imgCarro" + numeroIdElementoPai);

                imgCarro.style.display = 'none';
                // Coloca cinza
                elementoPai.classList.add('bs-gray-700');
                // Coloca imagem da linha
                let imgLinha = document.getElementById("imgLinha" + numeroIdElementoPai);
                imgLinha.style.display = 'block';
                // Chama funcão que numera as vagas
                numeraVaga();
                // criaEstacionamento();
            }
        } else {


            // Pega somente o número
            let numeroId = idElemento.replace("vaga", "");

            // Pega botão que possui esse id
            let botao = document.getElementById(idElemento);

            // Pega classe desse botão
            let classe = botao.className;

            // Se for cinza
            if (classe.includes('bs-gray-700')) {
                // Tira cinza
                botao.classList.remove('bs-gray-700');
                // Tira imagem da linha
                let imgLinha = document.getElementById("imgLinha" + numeroId);

                imgLinha.style.display = 'none';

                // Coloca verde
                botao.classList.add('btn-success');
                // Coloca imegem do carro
                let imgCarro = document.getElementById("imgCarro" + numeroId);

                imgCarro.style.display = 'inline-block';
                // Chama funcão que numera as vagas
                numeraVaga();
            } else {
                // Tira verde
                botao.classList.remove('btn-success');
                // Tira imagem do carro
                let imgCarro = document.getElementById("imgCarro" + numeroId);

                imgCarro.style.display = 'none';
                // Coloca cinza
                botao.classList.add('bs-gray-700');
                // Coloca imagem da linha
                let imgLinha = document.getElementById("imgLinha" + numeroId);
                imgLinha.style.display = 'block';
                // Chama funcão que numera as vagas
                numeraVaga();
            }

        }


    }

    function numeraVaga() {
        let c = 1;
        let num = 1;
        while (c <= vagas) {
            console.log(document.getElementById("numeroVaga" + c))
            // Se o usuário clicar no botão
            // Pega id do botão
            idBotao = document.getElementById("vaga" + c);
            // console.log(idBotao);
            // Pega class do botão

            // let classElementoBotao = idBotao.className;
            // console.log(classElementoBotao);

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
            // console.log(idElemento);
            // Pega class do elemento
            classElemento = idElemento.className;
            // Verifica estilo display 
            const cssObj = window.getComputedStyle(idElemento, null);
            let displayImagem = cssObj.getPropertyValue("display");
            // console.log(displayImagem)

            if (classElemento == "imgCarro" && displayImagem == "inline-block") {

                // Pega o elemento pai da imagem
                // let elementoPai = idElemento.parentNode;

                // // Pega id do elemento pai
                // let idElementoPai = elementoPai.id;
                // Limpa o conteúdo de todos os parágrafos 
                document.getElementById("numeroVaga" + c).textContent = "";
                // Numera os parágrafos
                document.getElementById("numeroVaga" + c).textContent = num++;

                // console.log(elementoPai);

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
            criaEstacionamento()

        }


        // numeroVaga++;


    }

    function criaEstacionamento() {
        let vagasExistentes = [];
        let rua = [];
        let cont = 1;
        // Passa por tpdas as imagens
        while (cont <= vagas) {
            idElemento = document.getElementById("imgCarro" + cont);
            const displayEspaco = window.getComputedStyle(idElemento, null);
            let displayEspacoImagem = displayEspaco.getPropertyValue("display");
            // Se a imagem do carro for visível entra aqui
            if (displayEspacoImagem == "inline-block") {
                // Adciona vaga na posicão atual ao array
                vagasExistentes.push("imgCarro" + cont);
            } else {
                // Adciona espaco na posicão atual ao array
                rua.push("imgCarro" + cont);
            }
            cont++;
        }
        console.log(rua);
        console.log(vagasExistentes);

        // Pega input
        let respostaVagasExistentes = document.getElementById("vagasExistentes");
        // Muda value do input
        respostaVagasExistentes.value = vagasExistentes;
        // Pega input
        let respostaRua = document.getElementById("rua");
        // Muda value do input
        respostaRua.value = rua;

    }

</script>

        </tr>
        <tr><td><button type="submit" class="btn bg-gradient-danger w-100 my-4 mb-2">Salvar</button></td></tr>
    </table>   
</form>