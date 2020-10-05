<html>
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Registro</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="lib/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="lib/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="lib/css/style.css">
  <link rel="icon" type="image/png" href="lib/img/icono.png">
</head>
<body>
  <div class="container">
    <div class="content">
      <div class="card-body px-lg-5 pt-0">
        <h2>REGISTRO</h2>
        <form class="text-center" method="POST" action="">

            <div class="row">
              <div class="col">
                <div class="md-form">
                 <input type="text" class="form-control" name="name_e" id="name_e" maxlength="50">
                 <label for="name_e">Nombre de la empresa</label>
                </div>      
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="md-form">
                 <input type="text" class="form-control" name="name_p" id="name_p" maxlength="50">
                 <label for="name_p">Nombre del la persona encargada</label>
                </div>      
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="md-form">
                 <input type="text" class="form-control" name="telefono" id="telefono" onkeypress="return soloNumeros(event);" maxlength="10">
                 <label for="telefono">Telefono de la empresa</label>
                </div>      
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="md-form">
                 <input type="text" class="form-control" name="domicilio" id="domicilio" maxlength="50">
                 <label for="domicilio">Domicilio</label>
                </div>      
              </div>
            </div>


            <div class="row">
              <div class="col">
                <div class="md-form">
                 <input type="text" class="form-control" name="colonia" id="colonia" maxlength="50">
                 <label for="colonia">Colonia</label>
                </div>      
              </div>
            </div>


            <div class="row">
              <div class="col">
                <div class="md-form">
                 <input type="text" class="form-control" name="estado" id="estado" maxlength="30">
                 <label for="estado">Estado</label>
                </div>      
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="md-form">
                 <input type="text" class="form-control" name="muncipio" id="muncipio" maxlength="30">
                 <label for="muncipio">Municipio</label>
                </div>      
              </div>
            </div>


            <div class="row">
              <div class="col">
                <div class="md-form">
                 <input type="text" class="form-control" name="num" id="num" maxlength="3">
                 <label for="num">Numero</label>
                </div>      
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="md-form">
                 <input type="email" class="form-control" name="email" id="email-c" maxlength="50">
                 <label for="email">Correo de la empresa</label>
                </div>      
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="md-form">
                 <input type="password" class="form-control" name="pass" id="pass" maxlength="25">
                 <label for="pass">Password</label>
                </div>      
              </div>
            </div>

            <div class="row">
              <div class="col">
                <button class="btn aqua-gradient" type="submit" name="enviar" id="enviar">Registrar</button>
              </div>
            </div>
          </form>
      </div>    
    </div>
  </div>

  
  <script type="text/javascript" src="lib/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="lib/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="lib/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="lib/js/mdb.min.js"></script>
  <script type="text/javascript" src="js/registro.js"></script>
  <script type="text/javascript">
    function soloNumeros(e)
{
var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 8) || (keynum == 46))
return true;
return /\d/.test(String.fromCharCode(keynum));
}
  </script>
  <script type="text/javascript" src>"numeros.js"</script>
</body>
</html>