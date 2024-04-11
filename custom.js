function enviar(){


	nombre=document.getElementById("nombre");
	empresa = document.getElementById("empresa");
	email = document.getElementById("email");
	telefono = document.getElementById('telefono');	
	consulta = document.getElementById("consulta");

	if( nombre.value == "" || empresa.value == "" || email.value == "" || telefono.value == "" || consulta.value == ""){
		swal("Lo siento", "Debes completar los datos", "error");
	}
	else {
		parametros = {
			"nombre":nombre.value,
			"empresa":empresa.value,
			"email":email.value,
			"telefono":telefono.value,
			"consulta":consulta.value
		};
		$.ajax({
			data:parametros,
			url:'contacto.php',
			type:'post',
			success: function (response) {
					swal("Gracias por contactarnos","Nos comunicaremos contigo." ,"success");
					
				},
				error: function () {
					swal({ 
						title: "Ha ocurrido un error",
						text: "Lo sentimos, no se ha podido enviar tu consulta",
						type: "error",
						confirmButtonColor: "#DD6B55",
						confirmButtonText: "Intentar nuevamente",
						closeOnConfirm: false },

						function(isConfirm){ 
							if (isConfirm) {
								location.reload();
							} 
						});
				}
			});

	}
}