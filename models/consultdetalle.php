<?php 
session_start();
include("bd.php");
class modeloguardar{
       function guardar($id){
       $cclonn = new callTo();
       $rrcnx = $cclonn->callme();

       $conp=mysqli_query($rrcnx,"SELECT* FROM productos WHERE IDproducto='$id' ");
       $row=mysqli_fetch_array($conp);
       echo '
        <div class="md-form">
               <i class="fas fa-pencil-alt prefix"></i>
               <textarea id="form10" class="md-textarea form-control" rows="3" name="texto" readonly="readonly">'. $row['detalles'].'</textarea>
               <label for="form10">Detalles del Producto</label>
        </div>


       ';

    }
  }
?>