$(document).ready(function(){

	/*Esconde ou Mostra o campo Saldo Pre-Pago se a opção pre-pago for escolhida no cadastro de clientes*/
		$('#saldoPre').hide();

		$('#tipoDeConta').change(function() {
	        if ($(this).val() == "pre") {
	            $('#saldoPre').show('slow');
	        }
	    });

		 $('#tipoDeConta').change(function() {
	        if ($(this).val() != "pre") {
	            $('#saldoPre').hide('slow');
	        }
	    });
	 
	 /*Esconde ou Mostra o campo Saldo Pre-Pago se a opção pre-pago for escolhida no cadastro de clientes*/
	 $('#dataSMS').hide();
	 $('#horaSMS').hide();

	 $('#agendarSMS').change(function() {
	        if ($(this).val() == "s") {
	            $('#dataSMS').show('slow');
				$('#horaSMS').show('slow');
	        }
	    });

		 $('#agendarSMS').change(function() {
	        if ($(this).val() != "s") {
	            $('#dataSMS').hide('slow');
				$('#horaSMS').hide('slow');
	        }
	    });
	 


	/* Data Type Of the Send SMS*/ 
		//$('#datetimepicker1').datetimepicker();

});