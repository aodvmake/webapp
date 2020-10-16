<?php 
include("../controllers/sessioncliente.php");
include("../controllers/estadoreporte.php");

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
<table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Seriales</th>
      <th scope="col">Explicación</th>
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
              <td><div class="form-group shadow-textarea">
              <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" readonly="" rows="10"><?php $b=htmlspecialchars($a['texto']); echo $b;?></textarea></div></td>
              <td><?php if($a['estatus']=="1"){
                echo "<input type='text' style='background:#D12126;color:white;border:5px;border-radius:8px;' value=' En Proceso'> ";
              }
                else{
                echo "<input type='text' style='background:#23D121 ;color:white;border:5px;border-radius:8px;' value=' Corregido'> ";
                }
              ?></td>
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