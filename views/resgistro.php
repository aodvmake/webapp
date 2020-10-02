<html>
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Registro Turista</title>
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

	<title></title>
</head>
<body>
  <div class="container">
    <header id="navbar" >
      <a href="" class="logo">LET S<span>TRAVEL</span></a>
      <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
    <span class="menuIcon" onclick="menuToggle();"></span>
    </header>

    <div class="content">
      <div class="card-body px-lg-5 pt-0">
        <h2>REGISTRO</h2>
        <form class="text-center" method="POST" action="">
            <div class="row">
              <div class="col">
                <div class="md-form">
                   <input class="form-control" type="email"  name="correo" id="correo">
                   <label for="correo">Correo</label>
                </div>      
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="md-form">
               <input class="form-control" type="password" name="pass" id="pass">
               <label for="pass">Password</label>
                </div>      
              </div>
              <div class="col">
              <div class="md-form">
               <input class="form-control" type="text" name="telefono" id="telefono" onkeypress="return soloNumeros(event);">
               <label for="telefono">Telefono</label>
              </div>      
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="md-form">
                 <input class="form-control" type="text"  name="domicilio" id="domicilio">
                 <label for="domicilio">Calle</label>
                </div>      
              </div>
              <div class="col">
                <div class="md-form">
                   <input class="form-control" type="text" name="colonia" id="colonia">
                   <label for="colonia">Colonia</label>
                </div>      
              </div>
              <div class="col">
                <div class="md-form">
                   <input class="form-control" type="text"  name="ndomicilio" id="ndomicilio" onkeypress="return soloNumeros(event);">
                   <label for="foto">#</label>              
                </div>      
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="md-form">
               <input class="form-control" type="text"  name="rfc" id="rfc">
               <label for="rfc">RFC</label>
                </div>      
              </div>
              <div class="col">
              <div class="md-form">
               <input class="form-control" type="text" name="curp" id="curp">
               <label for="curp">CURP</label>
              </div>      
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="md-form">
               <input class="form-control" type="text"name="estado" id="estado">
               <label for="estado">Estado</label>
                </div>      
              </div>
              <div class="col">
              <div class="md-form">
               <input class="form-control" type="text" name="municipio" id="municipio">
               <label for="Municipio">Municipio</label>
              </div>      
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="md-form">
                  <input  class="form-control" type="date"   name="fecha" id="fecha">
                  <label for="fecha">Fecha de nacimiento</label>
                </div>      
              </div>
              <div class="col">
              <div class="md-form">

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

     <div class="bannerImg">
      <img src="lib/img/img2.jpeg">
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
  <script type="text/javascript" src="js/controlador.js"></script>
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