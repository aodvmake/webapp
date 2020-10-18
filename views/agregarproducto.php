<?php 
include("../controllers/sesionadm.php");
include("../controllers/Subirproducto.php");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Agregar Producto</title>
    <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../lib/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../lib/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="../lib/css/style.css">
  <link rel="icon" type="image/png" href="../lib/img/icono.png">
</head>
<body>
<!--Navbar -->
<!--Menu de cliente -->
<?php
include ("menuadmk.php");
?>
 <div class="container">
    <div class="content">
      <div class="card-body px-lg-5 pt-0">
        <h2>Agregar Producto</h2>
        <form class="text-center" method="POST" action="" enctype="multipart/form-data">

            <div class="row">
              <div class="col">
                <div class="md-form">
                 <input type="text" class="form-control" name="name_p" id="name_p" maxlength="50">
                 <label for="name_p">Nombre del Producto</label>
                </div>      
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="md-form">
                 <input type="text" class="form-control" name="modelo" id="modelo" maxlength="50">
                 <label for="modelo">Modelo</label>
                </div>      
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="md-form">
                 <input type="text" class="form-control" name="cantidad" id="cantidad" maxlength="50" onkeypress="return soloNumeros(event);">
                 <label for="cantidad">Cantidad</label>
                </div>      
              </div>
            </div>


             <div class="input-group">
               <div class="input-group-prepend">
                 <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
               </div>
               <div class="custom-file">
                 <input type="file" class="custom-file-input" id="imagen" name="imagen" aria-describedby="inputGroupFileAddon01">
                 <label class="custom-file-label" for="inputGroupFile01">Subir Imagen del Producto</label>
               </div>
             </div>


             <div class="md-form">
               <i class="fas fa-pencil-alt prefix"></i>
               <textarea id="form10" class="md-textarea form-control" rows="3" name="texto"></textarea>
               <label for="form10">Detalles del Producto</label>
             </div>

            <div class="row">
              <div class="col">
                <button class="btn aqua-gradient" type="submit" name="save" id="save">Agregar</button>
              </div>
            </div>
          </form>
      </div>    
    </div>
  </div>

  <footer class="page-footer font-small special-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-md-6 mb-4">

      

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/">Equipo Dinamita</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

  <script type="text/javascript" src="../lib/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../lib/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../lib/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../lib/js/mdb.min.js"></script>
  <script type="text/javascript">
    function soloNumeros(e)
     {
     var keynum = window.event ? window.event.keyCode : e.which;
      if ((keynum == 8) || (keynum == 46))
      return true;
      return /\d/.test(String.fromCharCode(keynum));
    }
  </script>
</body>
</html>