<?php 
session_start();
include("bd.php");
class modeloguardar{
       function guardar($name_p,$modelo,$cantidad,$Imagen,$temp,$textarea){
       $cclonn = new callTo();
       $rrcnx = $cclonn->callme();
       $id=$_SESSION["id"];
       $conp=mysqli_query($rrcnx,"SELECT IDproducto, documentoproducto FROM productos WHERE IDproducto='$id' ");
       $row=mysqli_fetch_array($conp);
       $actualiza='';


      // $Imagen = $_FILES[$imagen]['name'];
      // $temp = $_FILES[$imagen]['tmp_name'];
       //Actualizar datos 
       if($name_p!='' AND $modelo!='' AND $cantidad !='' AND $textarea!=''){ 

      
         if ($name_p!='') {
         $actualiza.=" nombre_p='".$name_p."' ";
         }
         if ($modelo!='') {
         $actualiza.=",modelo='".$modelo."' ";
         }
         if ($cantidad!='') {
         $actualiza.=",cantidad='".$cantidad."' ";
         }
         if ($Imagen!='') {
         unlink($row['documentoproducto']);
         move_uploaded_file($temp, '../Imagen/Productos/'.$id.$Imagen);
         $actualiza.=",documentoproducto='../Imagen/Productos/".$id.$Imagen."' ";
         }
         if ($textarea!='') {
         $actualiza.=",detalles='".$textarea."' " ;
         }  

         mysqli_query($rrcnx,"UPDATE productos SET $actualiza WHERE IDproducto='".$id."' ");
         //  $row=mysqli_fetch_array($conp);
        
        echo'<script type="text/javascript">
        alert("Daatos Guardados");
        window.location.href="../views/actualizarpro.php";
        </script>';
       }
      else{
        echo "Falta llenar un dato";
      }
    }
  }
?>