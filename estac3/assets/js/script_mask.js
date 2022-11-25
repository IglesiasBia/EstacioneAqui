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

