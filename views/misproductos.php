<?php 
include("../controllers/sessioncliente.php");
include("../controllers/misproducto.php");

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
include ("menucliente.php");
?>
<div class="alert alert-warning" role="alert">
  Solicitud de renta de equipo en <a href="#" class="alert-link">proceso</a> de aprovación
</div>

<table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Cantidad a rentar</th>
      <th scope="col">Meses de renta</th>
    </tr>
  </thead>
  <tbody>
      <?php 
        foreach ($horario as $a):?>
         <tr>
              <td><?php echo $a['nombre_p']?></td>
              <td><?php echo $a['modelo']?></td>
              <td><?php echo $a['cantidad']?></td>
              <td><?php echo $a['meses']?></td>
      <?php
        endforeach;
      ?>
    </tr>
  </tbody>
</table>

<div class="alert alert-success" role="alert">
  Solicitudes de renta <a href="#" class="alert-link">Aprobadas </a>
</div>

<table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Cantidad a rentar</th>
      <th scope="col">Meses de renta</th>
      <th scope="col">Inicio de renta</th>
      <th scope="col">Final de renta</th>
    </tr>
  </thead>
  <tbody>
      <?php 
        foreach ($conapr as $ab):?>
         <tr>
              <td><?php echo $ab['nombre_p']?></td>
              <td><?php echo $ab['modelo']?></td>
              <td><?php echo $ab['cantidad']?></td>
              <td><?php echo $ab['meses']?></td>
              <td><?php echo $ab['fecha_i']?></td>
              <td><?php echo $ab['fecha_f']?></td>
      <?php
        endforeach;
      ?>
    </tr>
  </tbody>
</table>

<div class="alert alert-danger" role="alert">
  Solicitudes  <a href="#" class="alert-link">Agotadas </a>
</div>

<table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Cantidad a rentar</th>
      <th scope="col">Meses de renta</th>
      <th scope="col">Inicio de renta</th>
      <th scope="col">Final de renta</th>
    </tr>
  </thead>
  <tbody>
      <?php 
        foreach ($conele as $abc):?>
         <tr>
              <td><?php echo $abc['nombre_p']?></td>
              <td><?php echo $abc['modelo']?></td>
              <td><?php echo $abc['cantidad']?></td>
              <td><?php echo $abc['meses']?></td>
              <td><?php echo $abc['fecha_i']?></td>
              <td><?php echo $abc['fecha_f']?></td>
      <?php
        endforeach;
      ?>
    </tr>
  </tbody>
</table>


  <script type="text/javascript" src="../lib/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../lib/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../lib/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../lib/js/mdb.min.js"></script>
