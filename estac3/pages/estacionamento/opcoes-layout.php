<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div id="top" class="row addvaga">
			<div class="col-md-11">
				<h2>Layout das Vagas</h2>
				<hr>
			</div>
		</div>
		<form action="?page=altera_layout" class="addvaga" method="post"> 
            <div class="row"> 
                <div class="form-group col-md-4">
                    <input type="radio" id="layout" name="layout" value="1" onclick="exibeInput()">
                </div>
                <div class="form-group col-md-4">
                    <input type="radio" id="layout2" name="layout" value="2">
                </div>
                <div class="form-group col-md-4">
                    <input type="radio" id="layout3" name="layout" value="3">
                </div>
            </div>
            <div class="row"> 
                <div class="form-group col-md-4">
                    <input type="radio" id="layout4" name="layout" value="4">
                </div>
                <div class="form-group col-md-4">
                    <input type="radio" id="layout5" name="layout" value="5">
                </div>
                <div class="form-group col-md-4">
                    <input type="radio" id="layout6" name="layout" value="6">
                </div>
            </div>
			<hr />
			<div id="actions" class="row">
				<div class="col-md-12">
                <button class="btn btn-danger" data-toggle="modal" data-target="#configLayout" type="submit">Buscar</button>
				</div>
			</div>
		</form> 
    </div>
</div>

<!-- <script src="exibe_input.js"></script> -->
    <!-- // console.log("oi");
    // function exibeInput(){
    //     console.log("vai");
    // if (document.getElementById("layout").value == "1")
    // //   document.getElementById("layout2").visibility = hidden;
    // //   document.getElementById("layout2").style.display = none;
    //   let teste = document.getElementsByClassName("form-group col-md-4");
    //   teste.innerHTML ="Hello"

    //   document.getElementById("layout2").visibility = visible;
// } -->
