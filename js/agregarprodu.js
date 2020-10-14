  	function square(id) {
  	 //$('#idHide').val(id);	
  	  $('#myModal').modal('show');
  	  $('#editar').val(id);
  	  $("#save").val(id);
  	   
  	   var parametros = {
        'id':id,
        'request':'data',
        };    
      $.ajax({
        data: parametros,
        url:'../controllers/consultadetallescliente.php',
        type:'POST',
        beforeSend: function () {
            },
        success:  function (response) {
         // alert(response);
          document.getElementById('agregarp').innerHTML = response;
        }
      });
  	}