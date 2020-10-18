<!DOCTYPE>
<html>
<head>
<meta charset="utf-8">
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
	<title>Login</title>
</head>
<br>
<br>
<div class="container">
  <div class="content">
    <div class="card-body px-lg-5 pt-0">
     <div class="text-center border border-light p-5">
    <p class="h4 mb-4">Login</p>

    <!-- Email -->
       <div class="row">
          <div class="col">
                <div class="md-form">
               <input type="text" id="email" class="form-control">
               <label for="email">E-mail</label>
                </div>      
              </div>
            </div>

    <!-- Password -->
            <div class="row">
              <div class="col">
                <div class="md-form">
                  <input type="password" id="pass" class="form-control validate">
                  <label for="pass" data-error="wrong" data-success="right">Password</label>
                </div>      
              </div>
            </div>

    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit"  name="enviar" id="enviar">Entrar</button>

    <!-- Register -->
    <p>¿No tienes cuenta?
        <a href="registro.php">Registrate aqui</a>
    </p>

    <!-- Social login -->
    <p>siguenos en:</p>

    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>


    </div>
<!-- Default form login -->
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
  <script type="text/javascript" src="js/log.js"></script>
</body>
</html>
