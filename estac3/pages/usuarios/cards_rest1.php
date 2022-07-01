      <!-- PRIMEIRO -->
<div class="row">    
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="">
              <div class="icon icon-lg icon-shape bg-gradient-danger shadow-danger text-center border-radius-xl mt-n4 position-absolute">
                <img src="../assets/img/icons8-car-100.png" height="55px">
              </div>
              <div class="text-end pt-1 textcard">
                <p class="text-sm mb-0 text-capitalize">Vagas Ocupadas</p>
                <h4 class="mb-0">50/150</h4>
              </div>
            </div>
          </div>
        </div>
        <!-- FIM PRIMEIRO -->
        <!-- SEGUNDO -->
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body">
              <form action="?page=insere_card" method="post">
                <h5 class="card-title">Digite a placa para inserir no sistema</h5>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Digite aqui"  aria-describedby="basic-addon2" name="placa_veic">
                </div>
                <div class="form-group col-md-3">
                  <label for="tipo_veic">Tipo</label>
                    <select class="form-control" name="tipo_veic">
                        <option> --------- </option>
                        <option value="1">Carro</option>
                        <option value="0">Motocicleta</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                  <label for="chave">Deixou Chave:</label><br>
                    <input type="radio" name="chave" value="1">Sim <br>
                    <input type="radio" name="chave" value="0">Não
                </div>
                  <button class="btn btn-danger" type="submit">Inserir</button>
              </form>
            </div>
          </div>
        </div>
        <!-- FIM SEGUNDO -->
        <!-- TERCEIRO -->
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body">
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
        <!-- FIM TERCEIRO -->
</div>