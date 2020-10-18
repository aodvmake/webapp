$(document).ready(function(){
	$("#enviar").click(function(){
		var email = $("#email").val()
		var pass = $("#pass").val()

			var parametros = {
				'email':email,
				'pass':pass,
				'request':'data',
			};

			$.ajax({
				data: parametros,
				url:'controllers/loges.php',
				type:'POST',
				beforeSend: function () {
		        },
				success:  function (response) {
					
					$("#email").val("")
					$("#pass").val("")
						switch(response){
						case 'Cliente':
						window.location.href="views/cliente.php"
						break;
						case 'Administrador':
						window.location.href="views/admin.php"
						break;
						case 'King':
						window.location.href="views/adminki.php"
						break;
					 }
				}
			});
		});
	});