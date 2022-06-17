<?php
    $nivel_necessario = 2;
    include "../base/testa_nivel.php";
    //include "../base/con_escola.php";
    //include "../base/con.php";

    $sql = mysqli_query($con, "select * from estacionamento where id_estac='1';");
    $row = mysqli_fetch_array($sql);

?>
<div><?php include "mensagens_estac.php"; ?> </div>

<div id="container-fluid py-4">

                <br><h3 class="page-header">Editar registro do Estacionamento - <?php echo $row["nome_estac"];?></h3>

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
                            <label for="sigla">Quantidade de vagas</label>
                            <input type="number" class="form-control" name="quant_vaga" value="<?php echo $row["quant_vaga"]; ?>">
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-danger">Alterar</button>
                </form>
</div>
