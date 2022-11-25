$(document).ready(function(){
	//Telefone
	$("#telefone").mask("(99) 99999-9999");

	//CEP
	$("#cep").mask("99999-999");

	//CPF
	$("#cpf").mask("999.999.999-99");

	//CNPJ
	$("#cnpj").mask("99.999.999/9999-99");

	//Data
	$("#data").mask("99/99/9999");

	//Dinheiro
	$('#dinheiro1').mask('000.000.000.000.000,00' , { reverse : true});

	$('#dinheiro2').mask("$.##0,00" , { reverse:true});
});

$(document).ready(function(){
	$('#nr_processo').inputmask("9999/999999")
	
});




//Máscara de MOEDA com InputMask
 $(document).ready(function(){
    $("#moeda_im").inputmask( 'currency',{
		"autoUnmask": true,
		radixPoint:",",
		groupSeparator: ".",
		allowMinus: false,
		prefix: 'R$ ',
		digits: 2,
		digitsOptional: false,
		rightAlign: true,
		unmaskAsNumber: true
	});
});