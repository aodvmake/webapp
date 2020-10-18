<?php 
include("../controllers/sessioncliente.php");
mb_internal_encoding("iso-8859-1");
mb_http_output( "UTF-8" );
ob_start("mb_output_handler");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Productos</title>
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
<!--Menu de admin -->
<?php
include ("menucliente.php");
?>

<div class="content">
  <div class="card-body px-lg-1 pt-0">
  <h2>Productos</h2>
    <div class="table-responsive-sm">
      <div class="table-responsive text-nowrap">
    </div>
</div>
</div>
</div>
<div class="md-form">
  <input type="text" class="form-control" id="busqueda" name="busqueda">
  <label for="form1"><i class="fab fa-sistrix"></i> Buscar producto</label>
</div>

  <!--Main layout-->
  
<!-- Material input -->

 <main class="mt-5 pt-4">
  <div id="resultados"></div>
 </main>


<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <!-- Modal Header -->
         <h2>Agregar producto</h2>
        <form method="POST" action="../controllers/agregarproductocliente.php" enctype="multipart/form-data">
         <div text-center id="resultado">
         	
         </div>
        
           <div class="row">
              <div class="col">
              	<div id="agregarp"></div>
              	
              	 <label for="exampleForm2">Cantidad</label>
                 <input type="text" id="cntidad" name="cntidad" class="form-control" maxlength="3" onkeypress="return soloNumeros(event);">
                 <br> 
                 <select class="browser-default custom-select" id="caja" name="caja">
                 <option selected>Selecciona cuantos meses quieres rentar este equipo</option>
                 <option value="1 meses">1 meses</option>
                 <option value="4 meses">4 meses</option>
                 <option value="6 meses">6 meses</option>
                 <option value="12 meses">12 meses</option>
                 <option value="21 meses">21 meses</option>
               </select>
               <br><br><br>
                <button class="btn aqua-gradient" type="submit" name="save" id="save"  value="">Agregar</button>
              </div>
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
  <div class="footer-copyright text-center py-3"><?php echo utf8_decode("©")?> 2020 Copyright:
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
  <script type="text/javascript" src="../js/buscarclien.js"></script>
  <script type="text/javascript" src="../js/numeros.js"></script>
  <script type="text/javascript" src="../js/agregarprodu.js"></script>



