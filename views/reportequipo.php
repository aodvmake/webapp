<?php 
include("../controllers/sessioncliente.php");
include("../controllers/consulrep.php");
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
<!--Menu de cliente -->
<?php
include ("menucliente.php");
?>
 <div class="container">
    <div class="content">
      <div class="card-body px-lg-5 pt-0">
        <h2>Crear Reporte Equipo</h2>
        <form class="text-center" method="POST" action="../controllers/crearreporte.php" enctype="multipart/form-data">


      <select class="browser-default custom-select" id="caja" name="caja">
       <option selected>Selecciona el equipo</option>
      <?php 
        foreach ($horario as $a):?>
                 <option value="<?php echo $a['IDrenta']?>"><?php echo $a['nombre_p']." ".$a['modelo']?></option>
      <?php
        endforeach;
      ?>
      </select>
             <div class="md-form">
               <i class="fas fa-pencil-alt prefix"></i>
               <textarea id="serial" class="md-textarea form-control" rows="3" name="serial"></textarea>
               <label for="serial">Seriales</label>
             </div>



             <div class="input-group">
               <div class="input-group-prepend">
                 <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
               </div>
               <div class="custom-file">
                 <input type="file" class="custom-file-input" id="imagen" name="imagen" aria-describedby="inputGroupFileAddon01">
                 <label class="custom-file-label" for="inputGroupFile01">Subir una foto del producto</label>
               </div>
             </div>


             <div class="md-form">
               <i class="fas fa-pencil-alt prefix"></i>
               <textarea id="form10" class="md-textarea form-control" rows="3" name="texto"></textarea>
               <label for="form10">Expecificación del problema</label>
             </div>

            <div class="row">
              <div class="col">
                <button class="btn aqua-gradient" type="submit" name="save" id="save">Crear Reporte</button>
              </div>
            </div>
          </form>
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
  <script type="text/javascript" src="../js/numeros.js"></script>