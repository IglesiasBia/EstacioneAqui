<?php
    $layout = $_POST["layout"];
    
    // $sqlEstacionamentoLayout = mysqli_query($con, "UPDATE estacionamento SET tipo_layout = ".$layout.";");

    // if($layout == 1){
    //     header('Location: http://localhost:8080/estacione/estac3/pages/dash.php?page=perfil_usu&msg=senhaVazia');
    // }
?>


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="configLayout">
    <?php  include "modal-config-layout.php"; ?>
</div>

<!-- Faz modal abrir assim que a página carrega -->
<script>
document.addEventListener("DOMContentLoaded", function(){
   $('#configLayout').modal('show');
});
</script>