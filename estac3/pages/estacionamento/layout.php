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
                <img src='../assets/img/icons/carlayout.png' width='30em'alt='' style="display: none" class="imgCarro">
                <img src='../assets/img/bea.png' width='30em'alt='' style="display: block" class="imgLinha"> 
            </button>
        </td>`;
                contador++;

            }

            function apagaVaga() {
                // Pega elemto que disparou o evento
                let el = event.target || event.srcElement;

                let classElemento = el.className;


                // Se clicar na imagem e não no button entra aqui 
                if (classElemento == "imgCarro" || classElemento == "imgLinha") {
                    // Pega o elemnto pai da imagem
                    let elementoPai = el.parentNode;
                    console.log(elementoPai);

                    let classElementoPai = elementoPai.className;
                    // Se for cinza
                    if (classElementoPai.includes('bs-gray-700')) {
                        // Tira cinza
                        elementoPai.classList.remove('bs-gray-700');
                        // Coloca verde
                        elementoPai.classList.add('btn-success');
                        

                    } else {
                        // Tira verde
                        elementoPai.classList.remove('btn-success');
                        // Coloca cinza
                        elementoPai.classList.add('bs-gray-700');
                    }
                }
                // let filho = el.children;
                // console.log(filho);
                
                // Pega id desse elemento
                let id = el.id;

                console.log(id);

                // Pega botão que possui esse id
                let botao = document.getElementById(id);
                // Pega classe desse botão
                let classe = botao.className;

                console.log(classe);

                // Se for cinza
                if (classe.includes('bs-gray-700')) {
                    // Tira cinza
                    botao.classList.remove('bs-gray-700');
                    el.getElementsByClassName("imgLinha").display = 'none';
                    // console.log(imgLinha);
                    // imgLinha.style.display = 'none';
                    // Coloca verde
                    botao.classList.add('btn-success');
                    el.getElementsByClassName("imgCarro").display = 'block';
                    // console.log(imgCarro);
                    // imgCarro.style.display = 'block';

                } else {
                    // Tira verde
                    botao.classList.remove('btn-success');
                    // Coloca cinza
                    botao.classList.add('bs-gray-700');
                }
                console.log(classe);

                // botao.style.display = "none";
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