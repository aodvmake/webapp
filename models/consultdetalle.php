<?php 
session_start();
mb_internal_encoding("iso-8859-1");
mb_http_output( "UTF-8" );
ob_start("mb_output_handler");
include("bd.php");
class modeloguardar{
       function guardar($id){
       $cclonn = new callTo();
       $rrcnx = $cclonn->callme();

       $conp=mysqli_query($rrcnx,"SELECT* FROM productos WHERE IDproducto='$id' ");
       $row=mysqli_fetch_array($conp);
       echo '
       <label for="form-control rounded-0">Detalles del Producto</label> 
        <div class="md-form">
               <textarea id="form10" class="form-control rounded-0" rows="10" name="texto" readonly="readonly">'.$row['detalles'].'</textarea>
        </div>
       ';
    }
  }
?>