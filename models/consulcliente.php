<?php 
session_start();
include("bd.php");
class modeloguardar{
       function guardar($re){
       $cclonn = new callTo();
       $rrcnx = $cclonn->callme();
       $conp='';
       $row='';
       $rows='';
       $mostrar='';

       if ($re!="") {
       $conp=mysqli_query($rrcnx,"SELECT* FROM productos WHERE nombre_p LIKE '%".$re."%' OR modelo LIKE '%".$re."%' ");
        
           while ($row=mysqli_fetch_array($conp)){
            $mostrar.='<div class="container dark-grey-text mt-5">

             <!--Grid row-->
             <div class="row wow fadeIn">

              <!--Grid column-->
              <div class="col-md-6 mb-4">'; 
                $mostrar.='
                <img src='.$row['documentoproducto'].' class="img-fluid">
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-md-6 mb-4">
                  <!--Content-->
                  <div class="p-4">
                  </div>
                  <p class="lead font-weight-bold">Marca:'.$row['nombre_p'].'</p>
                  <p class="lead font-weight-bold">Modelo:'.$row['modelo'].'</p>
                  <img src='.$row['direccion_qrl'].' class="img-thumbnail" style="width:150px; height:150px"><br>
            
                  <!-- Default input -->
              
                  <button class="btn btn-primary btn-md my-0 p" type="submit" onclick="square('.$row['IDproducto'].')" id="editar">Ver producto</button>';  

                 $mostrar.='
                 </div>
                <!--Content-->

               </div>
              <!--Grid column-->

             </div>
           <!--Grid row-->';
            }
       }
       else{
       $conp=mysqli_query($rrcnx,"SELECT* FROM productos");
       while ($row=mysqli_fetch_array($conp)) {
       $mostrar.='<div class="container dark-grey-text mt-5">

       <!--Grid row-->
       <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">'; 
         $mostrar.='
        <img src='.$row['documentoproducto'].' class="img-fluid">
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <!--Content-->
          <div class="p-4">
            </div>
            <p class="lead font-weight-bold">Marca:'.$row['nombre_p'].'</p>
            <p class="lead font-weight-bold">Modelo:'.$row['modelo'].'</p>
            <img src='.$row['direccion_qrl'].' class="img-thumbnail" style="width:150px; height:150px"><br>

              <!-- Default input -->
              
              <button class="btn btn-primary btn-md my-0 p" type="submit" onclick="square('.$row['IDproducto'].')" id="editar" value="'.$row['IDproducto'].'">Ver producto</button>';  
      $mostrar.='
              </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->'; 
        }
       }
       
      echo $mostrar;
    }
  }
?>


  

