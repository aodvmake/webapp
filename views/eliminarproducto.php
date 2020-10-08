<?php 
include("../controllers/sesionadm.php");
include("../controllers/consultamproducto.php");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Eliminar Producto</title>
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


<div class="content">
  <div class="card-body px-lg-1 pt-0">
  <h2>Eliminar</h2>
   <form  class="text-center" method="POST" action="../controllers/agregarguia.php"> 
    <div class="table-responsive-sm">
      <div class="table-responsive text-nowrap">
        <table class="table" id="myTable">
    <thead>
      <tr>
        <th scope="col">Producto</th>
        <th scope="col">Modelo</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Imagen</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        foreach ($horario as $a):?>
         <tr>
              <td><?php echo $a['nombre_p']?></td>
              <td><?php echo $a['nombre_p']?></td>
              <td><?php echo $a['cantidad']?></td>
              <!-- Button to Open the Modal -->
              <td><?php echo '<img src="'.$a['documentoproducto'].'" class="img-thumbnail" style="width: 200px">'; ?></td>
              <td><button type="button" class="btn btn-danger btn-rounded" onclick="square('<?php echo $a['IDproducto']?>')" id="empleado"><i >Eliminar</i></button>
               </td>
      </tr>
       <!--   <table class="table">
            <tr class="text-center">
             <th scope="col">Producto</th>
             <th scope="col">Modelo</th>
             <th scope="col">Cantidad</th>
             <th></th>
            </tr>  
              <td><input  style="border: 0; width: 15px; background: #fff;" disabled type="" name="empler" id="empler" e value="<?php echo $a['id_usuario']?>"></td>
              <td><?php echo $a['nombre_p']?></td>
              <td><?php echo $a['modelo']?></td>
              Button to Open the Modal 
              <td>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPoll-1" onclick="square('<?php echo $a['id_usuario']?>')" id="empleado"><i class="fas fa-eye"></i></button>
               </td> 
          </table>   -->
            <?php
        endforeach;
      ?>
        </tbody>
      </table>
    </div>
</div>

     </div>  

  <script type="text/javascript" src="../lib/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../lib/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../lib/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../lib/js/mdb.min.js"></script>
  <script type="text/javascript" src="../js/eliminarproducto.js"></script>
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

<script type="text/javascript">

</script>