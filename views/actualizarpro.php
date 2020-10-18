<?php 
mb_internal_encoding("iso-8859-1");
mb_http_output( "UTF-8" );
ob_start("mb_output_handler");
include("../controllers/sesionadm.php");
include("../controllers/consultactuali.php");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Actualizar Producto</title>
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
include ("menuadmk.php");
?>


<div class="content">
  <div class="card-body px-lg-1 pt-0">
  <h2>Actualizar Producto</h2>
    <div class="table-responsive-sm">
      <div class="table-responsive text-nowrap">
    </div>
</div>
</div>
</div>


  <!--Main layout-->
  <main class="mt-5 pt-4">
<?php 
        foreach ($horario as $a):?>

    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <?php echo '<img src="'.$a['documentoproducto'].'" class="img-fluid">'; ?>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <!--Content-->
          <div class="p-4">
            </div>
            <p class="lead font-weight-bold">Marca: <?php echo $a['nombre_p']?></p>
            <p class="lead font-weight-bold">Modelo: <?php echo $a['modelo']?></p>
            <p class="lead font-weight-bold">Cantidad: <?php echo $a['cantidad']?></p>
            <p class="lead font-weight-bold"><?php echo utf8_decode("Descripción"); ?></p>
            <p><textarea class="form-control rounded-0" id="exampleFormControlTextarea1" readonly="" rows="10"><?php echo $a['detalles'];?></textarea></p>

              <!-- Default input -->
              
              <button class="btn btn-primary btn-md my-0 p" type="submit" onclick="square('<?php echo $a['IDproducto']?>')" id="editar">Editar</button>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->
      <?php
        endforeach;
      ?>
  </main>


<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <!-- Modal Header -->
        <form method="POST" action="../controllers/actualizarinfo.php" enctype="multipart/form-data">
         <div text-center id="resultado"></div>
        
           <div class="row">
              <div class="col">
                <button class="btn aqua-gradient" type="submit" name="save" id="save"  value="">Cambiar</button>
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

  <script type="text/javascript" src="../js/actual.js"></script>