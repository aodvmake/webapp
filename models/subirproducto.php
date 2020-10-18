<?php
mb_internal_encoding("iso-8859-1");
mb_http_output( "UTF-8" );
ob_start("mb_output_handler");
include("bd.php");
require_once("../lib/phpqrcode/qrlib.php");
class DBImagen{
public function uploadImage($Imagen,$tipo,$tamano,$temp,$name_p,$area,$cantidad,$modelo){
if (isset($Imagen) && $Imagen != "" AND  $name_p!= "" AND $area!= "" AND $cantidad!= "" AND $modelo!= "") {
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano< 2000000))){
        echo "<script> alert('La extensión o el tamaño de los archivos no es correcta,Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.'); </script>";
     }
     else {

     	 $conl = new callTo();
         $cnx = $conl->callme();
         //Renombrar el archivo
         $id=mysqli_query($cnx,"SELECT MAX(IDproducto) FROM productos");
         $row=mysqli_fetch_array($id);
         $rows=$row['MAX(IDproducto)']+1;
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        if (move_uploaded_file($temp, '../Imagen/Productos/'.$rows.$Imagen)){
         
         $Imagen2="../Imagen/QRL/".$rows.".png";
         QRcode::png("QR ".$name_p." - ".$modelo."  ",$Imagen2,'L',10,5);
            
         mysqli_query($cnx,"INSERT INTO `productos`(`nombre_p`, `modelo`, `direccion_qrl`, `cantidad`, `documentoproducto`, `detalles`)  VALUES ('$name_p','$modelo','".$Imagen2."','$cantidad','../Imagen/Productos/".$rows.$Imagen."','".utf8_decode($area)."') ");
         echo "<script> alert('Se guardaron los datos con exito'); </script>";
        }
        else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
           echo "<script> alert('Ocurrió algún error al subir el fichero. No pudo guardarse.')";
        }
      }
    }
    else{
    	//Si no los datos no estan completos
         echo "<script> alert('Verifique que los datos sean correctos'); </script>";
    }
  }
}
?>