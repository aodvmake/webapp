
<?php
//correcionreporte.php
include("../controllers/sesionadm.php");
include("../controllers/correcionreporte.php");
error_reporting();
mb_internal_encoding("iso-8859-1");
mb_http_output( "UTF-8" );
ob_start("mb_output_handler");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Seguimiento Reporte</title>
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
  <h2>Seguimiento de Reporte</h2>
    <div class="table-responsive-sm">
      <div class="table-responsive text-nowrap">
    </div>
</div>
</div>
</div>
<form method="POST" action="../controllers/correcion.php">
<table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Seriales</th>
      <th scope="col"><?php echo utf8_decode("Explicación")?></th>
      <th scope="col">Empresa</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
      <?php 
        foreach ($horario as $a):?>
         <tr>
              <td><?php echo $a['nombre_p']?></td>
              <td><?php echo $a['modelo']?></td>
              <td><?php echo $a['seriales']?></td>
              <td> <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" readonly="" rows="10"><?php echo $a['texto']?></textarea></div></td>
              <td><?php echo $a['name_e']?></td>
              <td><button class="btn btn-primary btn-md my-0 p" type="submit" id="aceptar" name="aceptar" value="<?php echo $a['IDreporte']?>">Corregido</button></td></td>
      <?php
        endforeach;
      ?>
    </tr>
  </tbody>
</table>
</form>


  <script type="text/javascript" src="../lib/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../lib/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../lib/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../lib/js/mdb.min.js"></script>

  <script type="text/javascript" src="../js/actual.js"></script>