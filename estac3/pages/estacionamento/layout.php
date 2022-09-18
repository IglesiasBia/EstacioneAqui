<?php
// $numLinhas = 2;
// $num = 0;
// $ultimaVagaLinhas = array();
// while($num < $numLinhas){
//     $ultimavaga[$num] = $_POST["ultimaVaga"[$num]];   
//     array_push($ultimaVagaLinhas, $ultimavaga[$num]);
//     $num++;
// }
// echo $ultimaVagaLinhas;

// // $array = [];
// // while($num < $numLinhas){
// //     echo "<tr>"; 
// //     // while(){}
// // }
// // $inicioPrimeiraLinha = 1;
// // $finalPrimeiraLinha = 5;

// // $inicioSegundaLinha = 6;
// // $finalSegundaLinha = 10;
// $vagas = 100;
// $contador = 1;
?>

<table>
    <tr>
        <div id="teste"> </div>
        <script>
            let vagas = 234;
            let contador = 1;

            while (contador <= vagas) {
                // console.log(screen.width);

                let elemento = document.getElementById("teste");
                elemento.innerHTML += `
        <td>
            <button type='button' class='btn btnvaga bs-gray-700' onclick="apagaVaga()" id='vaga` + contador + `' style="position: absolut">
                <img src='../assets/img/icons/carlayout.png' width='30em'alt='' style="display: none" class="imgCarro" id="imgCarro` + contador + `">
                <img src='../assets/img/bea.png' width='30em'alt='' style="display: block" class="imgLinha" id="imgLinha` + contador + `"> 
            </button>
        </td>`;
                contador++;

            }

            function apagaVaga() {
                // Pega elemto que disparou o evento
                let el = event.target || event.srcElement;
                // Pega class do elemento
                let classElemento = el.className;

                // Pega id desse elemento
                let id = el.id;

                console.log(id);

                // Se clicar na imagem e não no button entra aqui (é verificado pela class)
                if (classElemento == "imgCarro" || classElemento == "imgLinha") {

                        // Pega somente o número id da imagem do carro
                        let numeroIdCarro = id.replace("imgCarro", "");
                        console.log(numeroIdCarro);


                        // Pega somente o número id da imagem da linha
                        let numeroIdLinha = id.replace("imgLinha", "");
                        console.log(numeroIdLinha);

                    // Pega o elemento pai da imagem
                    let elementoPai = el.parentNode;
                    // console.log(elementoPai);

                    // Pega class do elemento pai 
                    let classElementoPai = elementoPai.className;
                    // Se for cinza
                    if (classElementoPai.includes('bs-gray-700')) {
                        // Tira cinza
                        elementoPai.classList.remove('bs-gray-700');

                        // Tira imagem da linha
                        let imgLinha = document.getElementById("imgLinha"+numeroIdLinha);
                        imgLinha.style.display = 'none';

                        // Coloca verde
                        elementoPai.classList.add('btn-success');
                        // Coloca imegem do carro
                        let imgCarro = document.getElementById("imgCarro" + numeroIdCarro);
                        imgCarro.style.display = 'block';

                    } else {
                        // Tira verde
                        elementoPai.classList.remove('btn-success');
                        // Tira imagem do carro
                        let imgCarro = document.getElementById("imgCarro" + numeroIdCarro);

                        imgCarro.style.display = 'none';
                        // Coloca cinza
                        elementoPai.classList.add('bs-gray-700');
                        // Coloca imagem da linha
                        let imgLinha = document.getElementById("imgLinha" + numeroIdLinha);
                        imgLinha.style.display = 'block';
                    }
                } else {


                    // Pega somente o número
                    let numeroId = id.replace("vaga", "");
                    console.log(numeroId);
                    // Pega botão que possui esse id
                    let botao = document.getElementById(id);
                    // Pega classe desse botão
                    let classe = botao.className;

                    console.log(classe);

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

                        imgCarro.style.display = 'block';
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
                    }

                }

            }
        </script>



        <?php
        //  while($contador <= $vagas){

        //     echo "<td><button type='button' class='btn btn-success btnvaga'>
        //     <img src='../../assets/img/icons/carlayout.png' width='30em'alt=''> 
        //     </button></td>";



        //     if($contador)
        //     $contador++;
        //  }

        ?>
    </tr>
</table>