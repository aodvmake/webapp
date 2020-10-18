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
     //Inserta en las tablas necesarias 
      $conp=mysqli_query($rrcnx,"SELECT* FROM productos WHERE IDproducto='$id' ");
      $row=mysqli_fetch_array($conp);
      $_SESSION["id"]=$id;
      echo '
  
         <div class="modal-header">
          <h4 class="modal-title">'.utf8_decode('Editar información').'</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <div class="row">
          <div class="col-7">
          <p><strong>Desea modificar los datos?</strong></p>     
      <div class="row">
              <div class="col">
                <div>
                 <label for="name_p">Nombre del Producto</label>
                 <input type="text" class="form-control" name="name_p" id="name_p" maxlength="50" value="'. $row['nombre_p'].'" autocomplete="off">
                </div>      
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div>
                <label for="modelo">Modelo</label>
                 <input type="text" class="form-control" name="modelo" id="modelo" maxlength="50" autocomplete="off" value="'. $row['modelo'].'" >
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div>
                <label for="cantidad">Cantidad</label>
                 <input type="text" class="form-control" name="cantidad" id="cantidad" maxlength="3" autocomplete="off" onkeypress="return soloNumeros(event);" value="'. $row['cantidad'].'" >
                </div>      
              </div>
            </div>
            <br>


             <div class="input-group">
               <div class="input-group-prepend">
                 <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
               </div>
               <div class="custom-file">
                 <input type="file" class="custom-file-input" id="imagen" name="imagen" aria-describedby="inputGroupFileAddon01">
                 <label class="custom-file-label" for="inputGroupFile01">Subir Imagen del Producto</label>
               </div>
             </div>


             <div class="md-form">
               <i class="fas fa-pencil-alt prefix"></i>
               <textarea id="form10" class="md-textarea form-control" rows="3" name="texto">'. $row['detalles'].'</textarea>
               <label for="form10">Detalles del Producto</label>
             </div>
            '; 
       //()
//onclick="saves('.$id.')"
      }
    }
?>