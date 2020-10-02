$(document).ready(function(){
	$("#enviar").click(function(){
		var correo = $("#email-c").val()
		var pass = $("#pass").val()
		var telefono=$("#telefono").val()
        var name_e=$("#name_e").val()
        var name_p=$("#name_p").val()
        var domicilio=$("#domicilio").val()
        var colonia=$("#colonia").val()
        var estado=$("#estado").val()
        var muncipio=$("#muncipio").val()
        var num=$("#num").val()
      
			var parametros = {
				'correo':correo,
				'pass':pass,
				'telefono':telefono,
				'name_e':name_e,
				'name_p':name_p,
				'domicilio':domicilio,
				'colonia':colonia,
				'estado':estado,
				'muncipio':muncipio,
				'num':num,
				'request':'data',
			};
			$.ajax({
				data: parametros,
				url:'controllers/registrotu.php',
				type:'POST',
				beforeSend: function () {
		        },
				success:  function (response) {
					alert(response);
					$("#correo").val("")
					$("#pass").val("")
					$("#telefono").val("")
					$("#name_e").val("")
					$("#name_p").val("")
					$("#domicilio").val("")
					$("#colonia").val("")
					$("#estado").val("")
					
				}
			});
		});
	});