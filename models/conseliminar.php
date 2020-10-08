<?php
 mb_internal_encoding("iso-8859-1");
 mb_http_output( "UTF-8" );
 ob_start("mb_output_handler");
include("bd.php");
class modeloguardar{
       function guardar($id){
       $clonn = new callTo();
       $rcnx = $clonn->callme();
     //Inserta en las tablas necesarias 

     $del=mysqli_query($rcnx,"SELECT * FROM productos WHERE IDproducto='$id' ");
     $row=mysqli_fetch_array($del);
     
     $rows=$row['documentoproducto'];
     $qr=$row['direccion_qrl'];
     unlink($rows);
     unlink($qr);
     
     mysqli_query($rcnx,"DELETE FROM productos WHERE IDproducto='$id' ");
     echo "Se a borrado con exito";
    }
  }
  ?>