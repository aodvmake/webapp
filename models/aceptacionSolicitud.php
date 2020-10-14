<?php
session_start();
include("bd.php");
class modeloguardar{
       function guardar($id){
       $cclonn = new callTo();
       $rrcnx = $cclonn->callme();

          $idus=mysqli_query($rrcnx,"SELECT ren.cantidad,ren.IDproducto,ren.meses,p.cantidad as cantidadp 
           FROM renta AS ren INNER JOIN productos AS p 
           ON ren.IDproducto=p.IDproducto 
           WHERE IDrenta='".$id."' ");
          $row=mysqli_fetch_array($idus);

          if ($row['cantidadp']>=$row['cantidad']){
          $resta=$row['cantidadp']-$row['cantidad']; 

          mysqli_query($rrcnx,"UPDATE productos SET cantidad='".$resta."'  WHERE IDproducto='".$row['IDproducto']."' ");
          mysqli_query($rrcnx,"UPDATE renta SET estatus='1'  WHERE IDrenta='".$id."' ");

          $mes=strtok($row['meses'], ' ');
          
          $fecha_actual = date("Y-m-d");
          $fecha_termina=date("Y-m-d",strtotime($fecha_actual."+ ".$mes." month"));
          
          mysqli_query($rrcnx,"INSERT INTO rentaaceptada VALUES ('','$id','$fecha_actual','$fecha_termina') ");
         
              echo'<script type="text/javascript">
              alert("Datos Guardados");
              window.location.href="../views/solicitudrenta.php";
              </script>';


          }
          else{
              echo'<script type="text/javascript">
              alert("Verifique que el stock sea el suficiente");
              window.location.href="../views/solicitudrenta.php";
              </script>';

          }
    }
  }
  class modeloeliminar{
       function eliminar($id){
        $cclonn = new callTo();
        $rrcnx = $cclonn->callme();
        mysqli_query($rrcnx,"DELETE FROM renta WHERE IDrenta='$id' ");

        echo'<script type="text/javascript">
              alert("Solicitud de renta a sido eliminada");
              window.location.href="../views/solicitudrenta.php";
              </script>';

       }
     }
?>