<?php 
include("../controllers/sesionadm.php");
include("../controllers/rentasagotadas.php");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Renta Agota</title>
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
<div class="alert alert-danger" role="alert">
  Renta de equipo<a href="#" class="alert-link"> Agotada</a>
</div>
<form method="POST" action="../controllers/terminarrenta.php">
<table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Cantidad a rentar</th>
      <th scope="col">Meses de renta</th>
      <th scope="col">Empresa</th>
      <th scope="col">Fecha de inicio</th>
      <th scope="col">Fecha final</th>
      <th></th>
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
              <td><?php echo $a['name_e']?></td>
              <td><?php echo $a['fecha_i']?></td>
              <td><?php echo $a['fecha_f']?></td>
              <td><button class="btn btn-danger btn-md my-0 p" type="submit" id="eliminar" name="eliminar" value="<?php echo $a['IDrenta']?>">Terminar Renta</button></td>
      <?php
        endforeach;
      ?>
    </tr>
  </tbody>
</table>
</form>

<?php include("footer.php");?>
  <script type="text/javascript" src="../lib/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../lib/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../lib/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../lib/js/mdb.min.js"></script>
</body>
</html>