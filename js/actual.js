function square(id) {
  $('#idHide').val(id);
  $('#myModal').modal('show')
        var parametros = {
        'id':id,
        'request':'data',
        };    
      $.ajax({
        data: parametros,
        url:'../controllers/actualizarp.php',
        type:'POST',
        beforeSend: function () {
            },
        success:  function (response) {
         // alert(response);
          document.getElementById('resultado').innerHTML = response;
    
        }
   });
 }
 