<?php
  //Pega quantidade total de vagas do estacionamanto 
  $sql = "select quant_vaga from estacionamento where id_estac ='1';";
  $resultado = mysqli_query($con,$sql);
  $row = mysqli_fetch_array($resultado);
  
  //Pega quantidade de vagas ocupadas
  $sql2 = "select status_vaga,
  count(*) as qtd
  from vagas WHERE status_vaga='1';";
  $resultado2 = mysqli_query($con,$sql2);
  $row2 = mysqli_fetch_array($resultado2);

?>

    <div class="container">
      <div class="row">
        <div class="col-md-12 carddash" >

            <div class="card">
              <div>
                <div class="icon icon-lg icon-shape bg-gradient-danger shadow-danger text-center border-radius-xl mt-n4 position-absolute">
                  <img src="../assets/img/icons/carro.png" height="55px">
                </div>
                <div class="text-end pt-1 textcard">
                  <p class="text-sm mb-0 text-capitalize">Vagas Ocupadas</p>
                  <h4 class="mb-0"><?php echo $row2["qtd"]."/".$row["quant_vaga"];?></h4>
                </div>
              </div>
            </div>

        </div>
      </div>
          
          <div class="row">
            <div class="col-md-12 carddash">
              <div class="card ">
                <div class="card-body ">
                  <form action="?page=insere_card" method="post">
                      <h5 class="card-title">Digite as informações para inserir no sistema</h5>
                      <div class="row">
                        <div class="col-md-4">
                          <label for="placa_veic">Placa</label>
                          <input type="text" class="form-control" name="placa_veic" >
                        </div>
                        
                        <div class=" col-md-4">
                            <label for="marca_veic">Marca</label>
                            <input type="text" class="form-control" aria-describedby="basic-addon2" name="marca_veic">
                        </div>
                        
                        <div class="col-md-4">
                            <label for="modelo_veic">Modelo</label>
                            <input type="text" class="form-control" aria-describedby="basic-addon2" name="modelo_veic">
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-4">
                            <label for="tipo_veic">Tipo</label>
                              <select class="form-control" name="tipo_veic">
                                <option> --------- </option>
                                <option value="1">Carro</option>
                                <option value="0">Motocicleta</option>
                              </select>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="chave">Deixou Chave:</label>
                            <select class="form-control" name="chave">
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
            <div class="col-md-12 tres">
              <div class="card ">
                <div class="card-body" >
                  <form action="?page=faz_ticket" method="post">
                    <h5 class="card-title">Digite a placa para gerar nota fiscal</h5>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Digite aqui"  aria-describedby="basic-addon2" name="placa_veic">
                    </div>
                    <button class="btn btn-danger" type="submit">Gerar</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-12 tres">
              <div class="card ">
                <div class="card-body" >
                  <form action="?page=busca_vaga_veic" method="post">
                    <h5 class="card-title">Digite a placa para buscar veículo</h5>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Digite aqui"  aria-describedby="basic-addon2" name="placa_veic">
                    </div>
                    <button class="btn btn-danger" type="submit">Buscar</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
      
    </div>
    



      <!-- PRIMEIRO
      <div class="container">
        <div class="row">
          <div class="col-md-3 cardsbaixo">
            <div class="card">
              <div>
                <div class="icon icon-lg icon-shape bg-gradient-danger shadow-danger text-center border-radius-xl mt-n4 position-absolute">
                  <img src="../assets/img/icons8-car-100.png" height="55px">
                </div>
                <div class="text-end pt-1 textcard">
                  <p class="text-sm mb-0 text-capitalize">Vagas Ocupadas</p>
                  <h4 class="mb-0"><?php echo $row2["qtd"]."/".$row["quant_vaga"];?></h4>
                </div>
              </div>
            </div>
          </div> 
        </div>
        <!-- FIM PRIMEIRO -->
        <!-- SEGUNDO -->
        <!-- <div class="row">
            <div class="col-md-6">
              <div class="card ">
                <div class="card-body ">
                  <form action="?page=insere_card" method="post">
                      <h5 class="card-title">Digite as informações para inserir no sistema</h5>
                      <div class="row">
                        <div class="col-md-4">
                          <label for="placa_veic">Placa</label>
                          <input type="text" class="form-control" name="placa_veic" >
                        </div>
                        
                        <div class=" col-md-4">
                            <label for="marca_veic">Marca</label>
                            <input type="text" class="form-control" aria-describedby="basic-addon2" name="marca_veic">
                        </div>
                        
                        <div class="col-md-4">
                            <label for="modelo_veic">Modelo</label>
                            <input type="text" class="form-control" aria-describedby="basic-addon2" name="modelo_veic">
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-4">
                            <label for="tipo_veic">Tipo</label>
                              <select class="form-control" name="tipo_veic">
                                <option> --------- </option>
                                <option value="1">Carro</option>
                                <option value="0">Motocicleta</option>
                              </select>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="chave">Deixou Chave:</label>
                            <select class="form-control" name="chave">
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
            </div>  -->
          
          <!-- FIM SEGUNDO -->
          <!-- TERCEIRO -->
          
          <!-- <div class="row "> -->
            <!-- <div class="col-md-6 ">
              <div class="card ">
                <div class="card-body" >
                  <form action="?page=faz_ticket" method="post">
                    <h5 class="card-title">Digite a placa para gerar nota fiscal</h5>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Digite aqui"  aria-describedby="basic-addon2" name="placa_veic">
                    </div>
                    <button class="btn btn-danger" type="submit">Gerar</button>
                  </form>
                </div>
              </div>
            </div> -->
          <!-- </div> -->
        <!-- </div>
        <!-- FIM TERCEIRO -->
      <!-- </div> --> 

