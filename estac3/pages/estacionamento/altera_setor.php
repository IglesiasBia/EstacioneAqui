<?php

$pavimentoAtual = $_GET["id_pavimento"];
// echo "oi";
header('Location: /estacione/estac3/pages/dash.php?page=form_altera_tipo_vaga&id_pavimento='.$pavimentoAtual);
?>