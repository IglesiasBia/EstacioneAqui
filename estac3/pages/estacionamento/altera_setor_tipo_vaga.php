<div id="setor">
    <input type="text" id="quantidadeSetor" style="display: block">
    <button onclick="defineQuantidadeButtonSetor()" id="botaoQuantidadeSetor">vai</button>
</div>

<?php
$pavimentoAtual = $_GET["id_pavimento"];

echo '
    <form action="?page=altera_setor&id_pavimento='.$pavimentoAtual.'"" method="post" >
        <table>
            <tr>
                <div id="teste">
                
                    <input type="text" id="vagasExistentes" name="vagasExistentes" style="display: none">
                    <input type="text" id="rua" name="rua" style="display: none">
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
        $idVaga = $resultadoPegaEspacos["id_vaga"];

        //Faz button aparecer na tela 

        echo " <button type='button' class='btn btnvaga btn-success' onclick='defineSetor()' id='vaga" . $idVaga . "' name='vaga" . $idVaga . "'  style='position: static'>";
        echo "<img src='../assets/img/icons/carlayout.png' width='30em'alt='' style='display: block' class='imgCarro' id='imgCarro" . $idVaga . "' name='imgCarro" . $idVaga . "'>";

        echo "<p id='numeroVaga" . $numeroVaga . "' name='numeroVaga" . $idVaga . "' style='display: inline'>$numeroVaga</p>";
        echo "</button>";
        $numeroVaga++;
    } else {
        $idVaga = $resultadoPegaEspacos["id_vaga"];


        echo " <button type='button' class='btn btnvaga bs-gray-700'' onclick='defineSetor()' id='vaga" . $idVaga . "' name='vaga" . $idVaga . "'  style='position: static'>";
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
    var setores = ["A", "B", "C", "D", "E", "F"];

    var corSetor = ["blue", "purple", "yellow"];

    function defineQuantidadeButtonSetor() {

        let inputQuantidadeSetor = document.getElementById("quantidadeSetor");
        inputQuantidadeSetor.style.display = 'none';
        let botaoQuantidadeSetor = document.getElementById("botaoQuantidadeSetor");
        botaoQuantidadeSetor.style.display = 'none';

        let quantidadeSetor = document.getElementById("quantidadeSetor").value;

        let divSetor = document.getElementById("setor");



        let contador = 0;
        while (contador < quantidadeSetor) {
            // console.log("oi");
            divSetor.innerHTML += '<button type="button" class="btn btn-danger" style="background-color: ' + corSetor[contador] + '" id="setor' + setores[contador] + '"  onclick="defineSetor()">Setor ' + setores[contador] + '</button> ';
            contador++;
        }
    }

// let corSetorAtual = "blue";
let setorAtual = "A";
let corSetorAtual;
    function defineSetor(corSetorAtual){
        let elementoButton = event.target || event.srcElement;
        let classButton = elementoButton.id;
        console.log(classButton)
        console.log(elementoButton);
        
        corSetorAtual = "pink";
    //    teste(corSetorAtual)
        return corSetorAtual
        // return console.log(corSetorAtual)
        
        
        
        // function teste(){
        //     // console.log("oi");
        //     setorAtual="blue";
        //     return setorAtual ;
        // }
        // console.log(teste());
    }


        //     function teste(cor){
        //         console.log(cor)
        //     // console.log("oi");
        //     // setorAtual="blue";
        //     // return setorAtual ;
        // }
        // console.log(teste());
    console.log(corSetorAtual)
</script>

