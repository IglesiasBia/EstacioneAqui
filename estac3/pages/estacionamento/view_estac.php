<?php
    $nivel_necessario = 2;
    include "../base/testa_nivel.php";
    //include "../base/con_escola.php";
    //include "../base/con.php";

    //Pega os dados do estacinamento
    $sql = mysqli_query($con, "select * 
    from estacionamento 
    where id_estac='1';");
    $row = mysqli_fetch_array($sql);

    //Pega o total de vagas para carro
    $sql2 = "select tipo_vaga, 
    count(*) as total_vagas_carro 
    from vagas where tipo_vaga ='1';";
    $resultado2 = mysqli_query($con, $sql2);
    $row2 = mysqli_fetch_array($resultado2); 

    //Pega o total de vagas para motocicleta 
    $sql3 = "select tipo_vaga, 
    count(*) as total_vagas_moto 
    from vagas where tipo_vaga ='0';";
    $resultado3 = mysqli_query($con, $sql3);
    $row3 = mysqli_fetch_array($resultado3); 
?>

<div id="container-fluid py-4">
                <form action="?page=atualiza_estac" method="post">
                    <div class="row"> 
                        <div class="form-group col-md-4">
                            <label for="id_estac">ID</label>
                            <input type="text" class="form-control" name="id_estac" value="<?php echo $row["id_estac"]; ?>" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nome">Nome Estacionamento</label>
                            <input type="text" class="form-control" name="nome_estac" value="<?php echo $row["nome_estac"]; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="sigla">CNPJ</label>
                            <input type="text" class="form-control" name="cnpj_estac" value="<?php echo $row["cnpj_estac"]; ?>">
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="num_estac">Número do Estacionamento</label>
                            <input type="text" class="form-control" name="num_estac" value="<?php echo $row["num_estac"]; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="preco_estac">Preço Inicial</label>
                            <input type="text" class="form-control" name="preco_estac" value="<?php echo $row["preco_estac"]; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="frac_hr_estac">Fração por Hora</label>
                            <input type="text" class="form-control" name="frac_hr_estac" value="<?php echo $row["frac_hr_estac"]; ?>">
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="sigla">Quantidade de vagas:</label>
                            <p>Carro: <?php echo $row2["total_vagas_carro"];?></p>
                            <p>Motocicleta: <?php echo $row3["total_vagas_moto"];?></p>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="preco_pernoite">Preço Pernoite</label>
                            <input type="text" class="form-control" name="preco_pernoite" value="<?php echo $row["preco_pernoite"]; ?>">
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-danger">Alterar</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#NovaVaga" > Adicionar nova vaga</button> 
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#alterarLayout">Alterar layout</button>   
                </form>
    
</div>

<!-- Modal para adicionar nova vaga -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="NovaVaga">
    <?php include "form_add_vaga.php"; ?>
</div>

<!-- Modal para alterar layout -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="alterarLayout">
    <?php include "opcoes-layout.php"; ?>
</div>  