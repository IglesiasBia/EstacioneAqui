
<form action="?page=gera_relatorio" method="post">
   
<!-- PRIMEIRA LINHA -->
    <div class="row">  
        <div class="form-group col-md-4">
            <label for="dt_inicio">Tipo Relatório</label>
            <select name="tipoRelatorio" id="" required>
                <option value="">Selecione</option>
                <option value="fatura">Fatura</option>
                <option value="quantidade">Quantidade de veículos</option>
                <option value="faturaEQuantidade">Fatura e quantidade</option>
            </select>
        </div>

        <div class="form-group col-md-4">
            <label for="dt_inicio">Data Inicio</label>
            <input type="date" name="dt_inicio">
        </div>

        <div class="form-group col-md-4">
            <label for="dt_final">Data Final</label>
            <input type="date" name="dt_final">
        </div>
    </div>

    <button type="submit" class="btn btn-danger">Gerar</button>

</form>