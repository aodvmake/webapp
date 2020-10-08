function square(id) {
  $('#idHide').val(id);
        var parametros = {
        'id':id,
        'request':'data',
        };

      $.ajax({
        data: parametros,
        url:'../controllers/eliminarpro.php',
        type:'POST',
        beforeSend: function () {
            },
        success:  function (response) {
          alert(response);
          location.reload();
          $("#idempleado").val("")
        }
        });
 }