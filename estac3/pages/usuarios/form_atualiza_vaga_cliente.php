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
?>

<div id="main" class="container-fluid">
    <form action="?page=atualiza_vaga_cliente" method="post">
        <div class="row"> 
            <div class="form-group col-md-2">
                <label for="placa_veic">Placa</label>
                <input type="text" class="form-control" name="placa_veic" value="<?php echo $row["placa_veic"]; ?>">
            </div>
            <div class="form-group col-md-5">
                <label for="tipo_veic">Tipo</label>
                <?php
                    if($row["tipo_veic"] == 0){
                        echo "<div class='form-group col-md-3'>";
                        echo "<input type='radio' name='tipo_veic' value='0' checked>Motocicleta";
                        echo "<input type='radio' name='tipo_veic' value='1'>Carro";
                        echo "</div>";
                    }elseif($row["tipo_veic"] == 1){
                        echo "<div class='form-group col-md-3'>";
                        echo "<input type='radio' name='tipo_veic' value='0' >Motocicleta";
                        echo "<input type='radio' name='tipo_veic' value='1' checked>Carro";
                        echo "</div>";
                    }
                ?>
            </div>
            <div class="form-group col-md-5">
                <label for="chave">Chave</label>
                <?php
                    if($row["chave"] == 0){
                        echo "<div class='form-group col-md-3'>";
                        echo "<input type='radio' name='chave' value='0' checked>Não deixou<br>";
                        echo "<input type='radio' name='chave' value='1'>Deixou";
                        echo "</div>";
                    }elseif($row["chave"] == 1){
                        echo "<div class='form-group col-md-3'>";
                        echo "<input type='radio' name='chave' value='0' >Não deixou<br>";
                        echo "<input type='radio' name='chave' value='1' checked>Deixou";
                        echo "</div>";
                    }
                ?>
            </div>
            <div class="form-group col-md-3">
                <label for="id_cli">ID Cliente</label>
                <input type="text" class="form-control" name="id_cli" value="<?php echo $row["id_cli"]; ?>">
            </div>
            <!-- Fazer input nome e CPF só aparecerem se apertar um botão-->
            * Inserir CPF e nome 
            <div class="form-group col-md-3">
                <label for="nome_cli">Nome Cliente</label>
                <input type="text" class="form-control" name="nome_cli" value="<?php echo $row["nome_cli"]; ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="cpf_cli">CPF</label>
                <input type="text" class="form-control" name="cpf_cli" value="<?php echo $row["cpf_cli"]; ?>">
            </div>

            
        </div>
        <div class="row"> 
            <div class="form-group col-md-3">
                <label for="id_vaga">ID Vaga</label>
                <input type="text" class="form-control" name="id_vaga" value="<?php echo $row2["id_vaga"]; ?>">
            </div>
        </div>
        <button type="submit" class="btn btn-danger">Atualizar</button>
    </form>               

</div>