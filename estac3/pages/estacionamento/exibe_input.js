function exibeInput(){

    if(document.getElementById("layout").value == "1"){
        // Pega os inputs não selecionados e os esconde
        var inputLayout2 = document.getElementById("layout2");
        inputLayout2.style.display = "none";

        var inputLayout3 = document.getElementById("layout3");
        inputLayout3.style.display = "none";

        var inputLayout4 = document.getElementById("layout4");
        inputLayout4.style.display = "none";

        var inputLayout5 = document.getElementById("layout5");
        inputLayout5.style.display = "none";

        var inputLayout6 = document.getElementById("layout6");
        inputLayout6.style.display = "none";

        // Mostra input 
        var inputQuantidadeLinhas = document.getElementById("quantidadePavimentos");
        inputQuantidadeLinhas.style.display = "block";
    }

}

