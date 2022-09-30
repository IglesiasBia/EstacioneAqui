<?php
    $nivel_necessario = 2;
    include "../base/testa_nivel.php";

    //Pega os dados do estacinamento
    $sql = mysqli_query($con, "select * 
    from estacionamento 
    where id_estac='1';");
    $row = mysqli_fetch_array($sql);

    //Pega o total de vagas para carro
    $sql2 = "select tipo_vaga, 
    count(*) as total_vagas_carro 
    from vagas where tipo_vaga ='0';";
    $resultado2 = mysqli_query($con, $sql2);
    $row2 = mysqli_fetch_array($resultado2); 

    //Pega o total de vagas para motocicleta 
    $sql3 = "select tipo_vaga, 
    count(*) as total_vagas_moto 
    from vagas where tipo_vaga ='1';";
    $resultado3 = mysqli_query($con, $sql3);
    $row3 = mysqli_fetch_array($resultado3); 
?>

<div id="container-fluid py-4">
            
        <div class="row">
            <h3 class="page-header estactitle">Atualizar Registro do Estacionamento </h3>
        </div>
                
<div class="row">
	<div class="card">
		<div class="cardperfil">
            <form action="?page=atualiza_estac" method="post">   
                <div class="row"> 
                    <div class="form-group col-md-4">
                        <p class="fs-4"><strong>ID</strong></p>
                            <!-- <label for="id_estac">ID</label> -->
                        <input type="text" class="form-control fs-4 estacdados" style=" background-color: white;"name="id_estac" value="<?php echo $row["id_estac"]; ?>" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <p class="fs-4"><strong>Nome Estacionamento</strong></p>
                        <input type="text" class="form-control fs-4 estacdados" name="nome_estac" value="<?php echo $row["nome_estac"]; ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <p class="fs-4"><strong>CNPJ</strong></p>
                        <input type="text" class="form-control fs-4 estacdados" name="cnpj_estac" value="<?php echo $row["cnpj_estac"]; ?>">
                    </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                        <p class="fs-4"><strong>Número do Estacionamento</strong></p>
                            <input type="text" class="form-control fs-4 estacdados" name="num_estac" value="<?php echo $row["num_estac"]; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <p class="fs-4"><strong>Preço do Estacionamento</strong></p>
                            <input type="text" class="form-control fs-4 estacdados" name="preco_estac" value="<?php echo $row["preco_estac"]; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <p class="fs-4"><strong>Fração por Hora</strong></p>
                            <input type="text" class="form-control fs-4 estacdados" name="frac_hr_estac" value="<?php echo $row["frac_hr_estac"]; ?>">
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <p class="fs-4"><strong>Quantidade de Vagas</strong></p>
                            <p class="fs-4">Carro: <?php echo $row2["total_vagas_carro"];?></p>
                            <p class="fs-4 estacdados">Motocicleta: <?php echo $row3["total_vagas_moto"];?></p>
                        </div>
                        <div class="form-group col-md-4">
                            <p class="fs-4"><strong>Preço Pernoite</strong></p>
                            <input type="text" class="form-control fs-4 estacdados" name="preco_pernoite" value="<?php echo $row["preco_pernoite"]; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <p class="fs-4"><strong>Quantidade de Pavimentos</strong></p>
                            <input type="text" class="form-control fs-4 estacdados" name="quant_pavimento" value="<?php echo $row["quant_pavimento"]; ?>">
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-dark">Alterar</button>
                    <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#NovaVaga" > Adicionar nova vaga</button>  -->

                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#pavimento">Layout Novo</button>  

            </form>
		</div>
	</div>
</div>

<!-- Modal para adicionar nova vaga -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="NovaVaga">
    <?php include "form_add_vaga.php"; ?>
</div>



<!-- Modal para adicionar nova vaga -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="pavimento">
    <?php include "criar-layout-estacionamento/modal_pavimento.php"; ?>
</div>
