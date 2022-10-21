<!-- Quero que isso seja um modal -->
<?php
    $placa = $_POST["placa_veic"];

    //Pega pela placa os dados da tebela veículo e ticket com a mesma placa
    $sql2 ="select * from veiculo 
    join ticket 
    on veiculo.placa_veic = ticket.placa_veic
    where veiculo.placa_veic='$placa' and ticket.status_pg=0;";
    $resultadoVeicTicket = mysqli_query($con, $sql2);
    $veicTicket = mysqli_fetch_array($resultadoVeicTicket);
    $idCli = $veicTicket["id_cli"];
    $idTicket = $veicTicket["id_ticket"];

    //Pega pela placa os dados da tebela veículo e cliente com o mesmo id 
    $sql = "select * from veiculo 
    join cliente 
    on veiculo.id_cli = cliente.id_cli
    where placa_veic='$placa' and veiculo.id_cli='$idCli';";
    $resultadoVeicCli = mysqli_query($con, $sql);
    $veiculoCliente = mysqli_fetch_array($resultadoVeicCli);

    //Pega os dados da vaga que o veículo estava
    $sql3 = "select pav_vaga, setor_vaga, num_vaga
    from vagas
    join ticket
    on vagas.id_vaga = ticket.id_vaga
    where ticket.id_ticket = '$idTicket';";
    $resultadoVagasTicket = mysqli_query($con, $sql3);
    $vagasTicket = mysqli_fetch_array($resultadoVagasTicket);

    if($veiculoCliente == 0){
        header('Location: http://localhost:8080/estacione/estac3/pages/dash.php?page=busca_cliente_atualizar&msg=3');
        mysqli_close($con);
    }
?>

<div id="main" class="container-fluid">
    <div class="row">
       <div class="col-md-12 carddash">
        <div class="card funcatu">
            <div class="card-body">
                <form action="?page=atualiza_vaga_cliente" method="post">
                    <!-- PRIMEIRA LINHA -->
                    <div class="row">  
                        <div class="form-group col-md-4">
                            <label for="id_cli" class="fs-4">ID Cliente</label>
                            <input type="text" class="form-control fs-4" name="id_cli" value="<?php echo $veiculoCliente["id_cli"]; ?>" readonly style=" background-color: white;">
                        </div>
                        <!-- Fazer input nome e CPF só aparecerem se apertar um botão-->
                        <!-- * Inserir CPF e nome  -->
                        <div class="form-group col-md-4">
                            <label for="nome_cli" class="fs-4">Nome Cliente</label>
                            <input type="text" class="form-control fs-4" name="nome_cli" placeholder="cliente não declarado" value="<?php echo $veiculoCliente["nome_cli"]; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cpf_cli" class="fs-4">CPF</label>
                            <input type="text" class="form-control fs-4" name="cpf_cli" value="<?php echo $veiculoCliente["cpf_cli"]; ?>">
                        </div>
                    </div>
        
                    <!-- FIM PRIMEIRA LINHA -->

                    <!-- SEGUNDA LINHA -->
                    <div class="row"> 
                        <div class="form-group col-md-4">
                            <label for="placa_veic"class="fs-4">Placa</label>
                            <input type="text" class="form-control fs-4" name="placa_veic" value="<?php echo $veiculoCliente["placa_veic"]; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tipo_veic" class="fs-4">Tipo</label>
                                <?php
                                    if($veiculoCliente["tipo_veic"] == 0){
                                        echo "<div class='form-group col-md-3 fs-5'>";
                                        echo "<input type='radio' name='tipo_veic' value='0'  class='fs-5'checked>Moto<br>";
                                        echo "<input type='radio' name='tipo_veic' value='1' class='fs-5'>Carro";
                                        echo "</div>";
                                    }elseif($veiculoCliente["tipo_veic"] == 1){
                                        echo "<div class='form-group col-md-3 fs-5'>";
                                        echo "<input type='radio' name='tipo_veic' value='0'  class='fs-5'>Moto<br>";
                                        echo "<input type='radio' name='tipo_veic' value='1'  class='fs-4' checked>Carro";
                                        echo "</div>";
                                    }
                                ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="chave" class="fs-4">Chave</label>
                                <?php
                                    if($veicTicket["chave"] == 0){
                                        echo "<div class='form-group col-md-3 fs-5'>";
                                        echo "<input type='radio' name='chave' value='0' class='fs-4' checked>Não deixou<br>";
                                        echo "<input type='radio' name='chave' value='1' class='fs-4'>Deixou";
                                        echo "</div>";
                                    }elseif($veicTicket["chave"] == 1){
                                        echo "<div class='form-group col-md-3 fs-5'>";
                                        echo "<input type='radio' name='chave' value='0' class='fs-4' >Não deixou<br>";
                                        echo "<input type='radio' name='chave' value='1' class='fs-4' checked>Deixou";
                                        echo "</div>";
                                    }   
                                ?>
                        </div>
                    </div>
                    <!-- FIM SEGUNDA LINHA -->

                    <!-- TERCEIRA LINHA -->
                    <div class="row"> 
                        <div class="form-group col-md-4">
                            <label for="pav_vaga"class="fs-4" >Pavimento</label>
                            <input type="text" class="form-control fs-4" name="pav_vaga" value="<?php echo $vagasTicket["pav_vaga"]; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="setor_vaga" class="fs-4">Setor</label>
                            <input type="text" class="form-control fs-4" name="setor_vaga" value="<?php echo $vagasTicket["setor_vaga"]; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="num_vaga" class="fs-4">Número</label>
                            <input type="text" class="form-control fs-4" name="num_vaga" value="<?php echo $vagasTicket["num_vaga"]; ?>">
                        </div>
           
                    </div>
                    <!-- FIM TERCEIRA LINHA -->

                    <!-- QUARTA LINHA -->
                    <div class="row"> 
                        <div class="form-group col-md-4">
                            <label for="marca_veic" class="fs-4">Marca</label>
                            <input type="text" class="form-control fs-4" name="marca_veic" value="<?php echo $veicTicket["marca_veic"]; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="modelo_veic" class="fs-4"> Modelo</label>
                            <input type="text" class="form-control fs-4" name="modelo_veic" value="<?php echo $veicTicket["modelo_veic"]; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="status_pg" class="fs-4">Status do Pagamento </label>
                                <?php
                                    if($veicTicket["status_pg"] == 0){
                                        echo "<div class='form-group col-md-3 fs-5'>";
                                        echo "<input type='radio' name='status_pg' value='0' class='fs-4' checked>Não Pago<br>";
                                        echo "<input type='radio' name='status_pg' value='1' class='fs-4'>Pago";
                                        echo "</div>";
                                    }elseif($veicTicket["status_pg"] == 1){
                                        echo "<div class='form-group col-md-3 fs-5'>";
                                        echo "<input type='radio' name='status_pg' value='0' class='fs-4' >Não Pago<br>";
                                        echo "<input type='radio' name='status_pg' value='1' class='fs-4' checked>Pago";
                                        echo "</div>";
                                    }
                                ?>
                        </div>
                    </div>
                    <!-- FIM QUARTA LINHA -->
                    </div>
                        <button type="submit" class="btn btn-danger btnatu">Atualizar</button>
                        <a href="?page=busca_cliente_atualizar" class="btn btn-dark btnatu">Voltar</a>
                </form>          
        </div>
      </div>
    </div>
  </div>
</div>