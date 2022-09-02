<?php

    include("libpdf/mpdf.php"); 

    $header = "<div style='text-align:right;'>Página {PAGENO} de {nbpg}</div><hr>";
    $body = "<fieldset>
    <div class='cabecalho'>
        <div class='imgcab'><img src='\sisloja/img/logoloja.png'></div>
        <div class='titcab'>
            Estacione Aqui
        </div>
    </div>";


    //$mpdf=new mPDF('utf-8', 'A4-L',size,fonte,10,10,10,10); 
$mpdf=new mPDF('utf-8', 'A4-L',0,'',10,10,15,15); 
// $mpdf->SetDisplayMode('fullpage'); 
// $css = file_get_contents('css/stylerel.css'); 
// $mpdf->WriteHTML($css,1);
$mpdf->SetHTMLHeader($header);
// $mpdf->SetHTMLFooter($htmlfooter);
$mpdf->WriteHTML($body); 
$mpdf->Output(); 

exit; 
?>