<?php
    $layout = $_POST["layout"];
    
    if($layout == "1"){
        $quantidadeLinhas = $_POST["quantidadeLinhas"];
        
    }
    // $sqlEstacionamentoLayout = mysqli_query($con, "UPDATE estacionamento SET tipo_layout = ".$layout.";");

    // if($layout == 1){
    //     header('Location: http://localhost:8080/estacione/estac3/pages/dash.php?page=perfil_usu&msg=senhaVazia');
    // }
?>


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="dadosPavimento">
    <?php  include "modal_dados_pavimento.php"; ?>
</div>

<!-- Faz modal abrir assim que a página carrega -->
<script>
document.addEventListener("DOMContentLoaded", function(){
   $('#dadosPavimento').modal('show');
});
</script>