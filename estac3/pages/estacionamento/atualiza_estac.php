<?php
    $nome = $_POST["nome_estac"];
    $cnpj = $_POST["cnpj_estac"];
    $num = $_POST["num_estac"];
    $preco = $_POST["preco_estac"];
    $fracao = $_POST["frac_hr_estac"];
    $pernoite = $_POST["preco_pernoite"];
    $quantPavimento = $_POST["quant_pavimento"];
    
    //Pega quantidade total de vagas
    $sql = "select id_vaga, 
    count(*) as total_vagas
    from vagas where tipo_vaga ='0' or tipo_vaga='1';";
    $resultado = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($resultado);
    $quantVaga = $row["total_vagas"];

    

    $sql2 = "update estacionamento 
    set id_estac='1', nome_estac='$nome', cnpj_estac='$cnpj',num_estac='$num', preco_estac='$preco', frac_hr_estac='$fracao',quant_vaga='$quantVaga', preco_pernoite='$pernoite', quant_pavimento=$quantPavimento
    where id_estac='1';";  
    $resultado2 = mysqli_query($con, $sql2);

    if($resultado){
        header('Location: /estacione/estac3/pages/dash.php?page=view_estac&msg=8');
        mysqli_close($con);
    }else{
        header('Location: /estacione/estac3/pages/dash.php?page=view_estac&msg=9');
        mysqli_close($con);
    }

?>