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
       <label for="exampleForm2">Cantidad</label>
       <input type="text" id="cantidad" class="form-control" maxlength="3" onkeypress="return soloNumeros(event);">
       <br> 

               <select class="browser-default custom-select">
                 <option selected>Selecciona cuantos meses quieres rentar este equipo</option>
                 <option value="1">1 meses</option>
                 <option value="2">4 meses</option>
                 <option value="3">6 meses</option>
                 <option value="4">12 meses</option>
                 <option value="5">21 meses</option>
               </select>
               <br><br><br>

       ';

    }
  }
?>