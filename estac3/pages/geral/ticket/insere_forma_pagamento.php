<?
$placaVeic = $_POST["placa_veic"];



?>


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="formaPagamento">
    <?php  include "modal_forma_pagamento.php"; ?>
</div>
<!-- Faz modal abrir assim que a página carrega -->
<script>
document.addEventListener("DOMContentLoaded", function(){
   $('#formaPagamento').modal('show');
});
</script>