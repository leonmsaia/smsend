$(document).ready(function(){

		$('#smsForm').validate({
	    rules:
	    {
			CountryCode:
				{
				required: true,
				minlength: 2
				},

			PhoneNumber:
				{
				required: true,
				minlength: 10
				},

			TxtMsg:
				{
				required: true,
				maxlength: 25
				}
	    },
		messages:
		{
			CountryCode:
			{
				required: "El codigo de Pais es obligatorio...",
				minlength: jQuery.validator.format("El Minimo es {0} números...")
			},
			PhoneNumber:
			{
				required: "El Numero de Telefono es obligatorio...",
				minlength: jQuery.validator.format("El Minimo es {0} números...")
			},
			TxtMsg:
			{
				required: "El Mensaje es obligatorio...",
				maxlength: jQuery.validator.format("El Maximo es {0} caracteres...")
			}
		},
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('OK!').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

});