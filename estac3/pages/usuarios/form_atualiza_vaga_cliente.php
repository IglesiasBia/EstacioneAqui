<?php
    $placa = $_POST["placa_veic"];

    $sql = "select * from veiculo 
    join cliente 
    on veiculo.id_cli = cliente.id_cli
    where placa_veic='$placa';";
    $resultado = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($resultado);

    $sql2 ="select * from veiculo 
    join ticket 
    on veiculo.placa_veic = ticket.placa_veic
    where veiculo.placa_veic='$placa';";
    $resultado2 = mysqli_query($con, $sql2);
    $row2 = mysqli_fetch_array($resultado2);

    //Pega os dados da vaga o veículo estava
    $sql3 = "select pav_vaga, setor_vaga, num_vaga
    from vagas
    join ticket
    on vagas.id_vaga = ticket.id_vaga
    where ticket.placa_veic = '$placa';";
    $resultado3 = mysqli_query($con, $sql3);
    $row3 = mysqli_fetch_array($resultado3);
?>

<div id="main" class="container-fluid">
    <form action="?page=atualiza_vaga_cliente" method="post">
        <!-- PRIMEIRA LINHA -->
        <div class="row">  
            <div class="form-group col-md-4">
                <label for="id_cli">ID Cliente</label>
                <input type="text" class="form-control" name="id_cli" value="<?php echo $row["id_cli"]; ?>" readonly>
            </div>
            <!-- Fazer input nome e CPF só aparecerem se apertar um botão-->
            <!-- * Inserir CPF e nome  -->
            <div class="form-group col-md-4">
                <label for="nome_cli">Nome Cliente</label>
                <input type="text" class="form-control" name="nome_cli" placeholder="cliente não declarado" value="<?php echo $row["nome_cli"]; ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="cpf_cli">CPF</label>
                <input type="text" class="form-control" name="cpf_cli" value="<?php echo $row["cpf_cli"]; ?>">
            </div>
        </div>
        
        <!-- FIM PRIMEIRA LINHA -->

        <!-- SEGUNDA LINHA -->
        <div class="row"> 
            <div class="form-group col-md-4">
                <label for="placa_veic">Placa</label>
                <input type="text" class="form-control" name="placa_veic" value="<?php echo $row["placa_veic"]; ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="tipo_veic">Tipo</label>
                <?php
                    if($row["tipo_veic"] == 0){
                        echo "<div class='form-group col-md-3'>";
                        echo "<input type='radio' name='tipo_veic' value='0' checked>Motocicleta <br>";
                        echo "<input type='radio' name='tipo_veic' value='1'>Carro";
                        echo "</div>";
                    }elseif($row["tipo_veic"] == 1){
                        echo "<div class='form-group col-md-3'>";
                        echo "<input type='radio' name='tipo_veic' value='0' >Motocicleta <br>";
                        echo "<input type='radio' name='tipo_veic' value='1' checked>Carro";
                        echo "</div>";
                    }
                ?>
            </div>
            <div class="form-group col-md-4">
                <label for="chave">Chave</label>
                <?php
                    if($row2["chave"] == 0){
                        echo "<div class='form-group col-md-3'>";
                        echo "<input type='radio' name='chave' value='0' checked>Não deixou<br>";
                        echo "<input type='radio' name='chave' value='1'>Deixou";
                        echo "</div>";
                    }elseif($row2["chave"] == 1){
                        echo "<div class='form-group col-md-3'>";
                        echo "<input type='radio' name='chave' value='0' >Não deixou<br>";
                        echo "<input type='radio' name='chave' value='1' checked>Deixou";
                        echo "</div>";
                    }
                ?>
            </div>
        </div>
        <!-- FIM SEGUNDA LINHA -->

        <!-- TERCEIRA LINHA -->
        <div class="row"> 
            <div class="form-group col-md-4">
                <label for="pav_vaga">Pavimento</label>
                <input type="text" class="form-control" name="pav_vaga" value="<?php echo $row3["pav_vaga"]; ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="setor_vaga">Setor</label>
                <input type="text" class="form-control" name="setor_vaga" value="<?php echo $row3["setor_vaga"]; ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="num_vaga">Número</label>
                <input type="text" class="form-control" name="num_vaga" value="<?php echo $row3["num_vaga"]; ?>">
            </div>
           
        </div>
        <!-- FIM TERCEIRA LINHA -->

        <!-- QUARTA LINHA -->
        <div class="row"> 
            
            <div class="form-group col-md-4">
                <label for="marca_veic">Número</label>
                <input type="text" class="form-control" name="marca_veic" value="<?php echo $row2["marca_veic"]; ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="modelo_veic">Número</label>
                <input type="text" class="form-control" name="modelo_veic" value="<?php echo $row2["modelo_veic"]; ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="status_pg">Status do Pagamento </label>
                <?php
                    if($row2["status_pg"] == 0){
                        echo "<div class='form-group col-md-3'>";
                        echo "<input type='radio' name='status_pg' value='0' checked>Não Pago<br>";
                        echo "<input type='radio' name='status_pg' value='1'>Pago";
                        echo "</div>";
                    }elseif($row2["status_pg"] == 1){
                        echo "<div class='form-group col-md-3'>";
                        echo "<input type='radio' name='status_pg' value='0' >Não Pago<br>";
                        echo "<input type='radio' name='status_pg' value='1' checked>Pago";
                        echo "</div>";
                    }
                ?>
            </div>
        </div>
        <!-- FIM QUARTA LINHA -->
        </div>
        <button type="submit" class="btn btn-danger">Atualizar</button>
    </form>               

</div>