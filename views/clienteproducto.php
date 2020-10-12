<?php 
include("../controllers/sessioncliente.php");
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
        <form method="POST" action="../controllers/agregarproductocliente" enctype="multipart/form-data">
         <div text-center id="resultado">
         	
         </div>
        
           <div class="row">
              <div class="col">
              	<div id="agregarp"></div>
                <button class="btn aqua-gradient" type="submit" name="save" id="save"  value="">Agregar</button>
              </div>
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
  <script type="text/javascript" src="../js/buscarclien.js"></script>
  <script type="text/javascript" src="../js/numeros.js"></script>
  <script type="text/javascript">
  	function square(id) {
  	 //$('#idHide').val(id);	
  	  $('#myModal').modal('show');
  	  $('#editar').val(id);
  	  $("#save").val(id);
  	   
  	   var parametros = {
        'id':id,
        'request':'data',
        };    
      $.ajax({
        data: parametros,
        url:'../controllers/consultadetallescliente.php',
        type:'POST',
        beforeSend: function () {
            },
        success:  function (response) {
         // alert(response);
          document.getElementById('agregarp').innerHTML = response;
        }
      });
  	}
  </script>



