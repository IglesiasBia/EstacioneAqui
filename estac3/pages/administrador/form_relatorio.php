
<form action="?page=gera_relatorio" method="post">
   
<!-- PRIMEIRA LINHA -->
    <div class="row">  
        <div class="form-group col-md-4">
            <label class="fs-4"for="dt_inicio">Tipo Relatório</label>
            <select class="form-select selectrel" name="tipoRelatorio" id="" required>
                <option selected>Selecione</option>
                <option value="fatura">Fatura</option>
                <option value="quantidade">Quantidade de veículos</option>
                <option value="faturaEQuantidade">Fatura e quantidade</option>
                <option value="entradaSaida">Entrada/Saída</option>
            </select>
        </div>

        <div class="form-group col-md-4 ">
            <label class="fs-4" for="dt_inicio">Data Inicio</label>
            <input type="date" name="dt_inicio">
        </div>

        <div class="form-group col-md-4 ">
            <label class="fs-4" for="dt_final">Data Final</label>
            <input type="date" name="dt_final">
        </div>
    </div>
    
    <div class="row"><button type="submit" class="btn btn-danger btnrel">Gerar</button></div>

</form>