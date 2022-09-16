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
    
    while(contador <= vagas){
        // console.log(screen.width);

        // let main = document.getElementsByClassName("navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl");
        // console.log(main);
        let elemento = document.getElementById("teste");
        elemento.innerHTML+=`<td><button type='button' class='btn --bs-gray-700 btnvaga' onclick="apagaVaga()" id='vaga`+contador+`' style="position: absolut">
        <img src='../../assets/img/icons/carlayout.png' width='30em'alt=''> 
        </button></td>`;
        // echo "<td><button type='button' class='btn btn-success btnvaga'>
        // <img src='../../assets/img/icons/carlayout.png' width='30em'alt=''> 
        // </button></td>";

        contador++;

     }

     function apagaVaga(){
        let el = event.target || event.srcElement;
        let id = el.id;
        console.log(id);
        let botao = document.getElementById(id);
        let classe = botao.className;
        console.log(classe);
        if(classe.includes('--bs-gray-700')){
            botao.classList.remove('--bs-gray-700');
            // botao.classList.add('--bs-gray-700');
            botao.classList.add('btn-success');
            botao.style.backgroundColor = "gray";
        }else{
            botao.classList.remove('btn-success');
            botao.classList.add('--bs-gray-700');
            // botao.style.backgroundColor = "#4CAF50";
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