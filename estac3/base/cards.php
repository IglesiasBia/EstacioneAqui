<?php
  //Pega quantidade total de vagas do estacionamanto 
  $sqlTotalVagas = "select tipo_vaga, 
  count(*) as total_vagas 
  from vagas 
  where tipo_vaga != '3' and tipo_vaga != '4' and id_vaga != '0';";
  $resultado = mysqli_query($con, $sqlTotalVagas);
  $row = mysqli_fetch_array($resultado);

  //Pega quantidade de vagas ocupadas
  $sql2 = "select status_vaga,
    count(*) as vagas_ocupadas
    from vagas WHERE status_vaga='1';";
  $resultado2 = mysqli_query($con, $sql2);
  $row2 = mysqli_fetch_array($resultado2);

?>

<div class="container">
  <div class="row">
    <div class="col-md-12 carddash">

      <div class="card">
        <div>
          <div class="icon icon-lg icon-shape bg-gradient-danger shadow-danger text-center border-radius-xl mt-n4 position-absolute">
            <img src="../assets/img/icons/carro.png" height="55px">
          </div>
          <div class="text-end pt-1 textcard">
            <p class="mb-0 text-capitalize fs-4">Vagas Ocupadas</p>
            <h4 class="mb-0"><?php echo $row2["vagas_ocupadas"] . "/" . $row["total_vagas"]; ?></h4>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="row">
    <div class="col-md-12 carddash">
      <div class="card ">
        <div class="card-body ">
          <form action="?page=insere_cliente" method="post">
            <h5 class="card-title fs-4">Digite as informações para inserir no sistema</h5>
            <div class="row">
              <div class="col-md-4">
                <label class="fs-5" for="placa_veic">Placa</label>
                <input type="text" class="form-control fs-5" name="placa_veic" minlength="7" maxlength="8">
              </div>

              <div class=" col-md-4">
                <label class="fs-5" for="marca_veic">Marca</label>
                <input type="text" class="form-control fs-5" aria-describedby="basic-addon2" name="marca_veic">
              </div>

              <div class="col-md-4">
                <label class="fs-5" for="modelo_veic">Modelo</label>
                <input type="text" class="form-control fs-5" aria-describedby="basic-addon2" name="modelo_veic">
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-4">
                <label class="fs-5" for="tipo_veic">Tipo</label>
                <select class="form-control fs-5 selectcard" name="tipo_veic">
                  <option> --------- </option>
                  <option value="0">Carro</option>
                  <option value="1">Motocicleta</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label class="fs-5" for="chave">Deixou Chave:</label>
                <select class="form-control fs-5 selectcard" name="chave">
                  <option> --------- </option>
                  <option value="1">Sim</option>
                  <option value="0">Não</option>
                </select>
              </div>

              <div class="col-md-12 col-sm-6 col-xs-4">
                <button class="btn btn-danger" type="submit">Inserir</button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="row">

    <div class="col-md-6 tres">
      <div class="card ">
        <div class="card-body">
          <form action="?page=busca_vaga_veic" method="post">
            <h5 class="card-title fs-4">Digite a placa para buscar veículo</h5>
            <div class="input-group mb-3">
              <input type="text" class="form-control fs-5" placeholder="Digite aqui" aria-describedby="basic-addon2" name="placa_veic">

            </div>
            <button class="btn btn-danger" data-toggle="modal" data-target="#resultadoBuscaVaga" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-6 tres">
      <div class="card ">
        <div class="card-body">
          <form action="?page=modal_forma_pagamento" method="post">
            <h5 class="card-title fs-4">Digite a placa para gerar nota fiscal</h5>
            <div class="input-group mb-3">
              <input type="text" class="form-control fs-5" placeholder="Digite aqui" aria-describedby="basic-addon2" name="placa_veic">
            </div>
            <button class="btn btn-danger" data-toggle="modal" data-target="#formaPagamento" type="submit">Buscar</button>
            <!-- modal_forma_pagamento.php -->
            <!-- <button class="btn btn-danger" type="submit">Gerar</button> -->
          </form>
        </div>
      </div>
    </div>
  </div>
</div>