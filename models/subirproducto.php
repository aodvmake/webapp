<?php
include("bd.php");
class DBImagen{
public function uploadImage($Imagen,$tipo,$tamano,$temp,$Imagen2,$tipo2,$tamano2,$temp2,$name_p,$area,$cantidad,$modelo){
if (isset($Imagen) && $Imagen != "" AND $Imagen2!= "" AND $name_p!= "" AND $area!= "" AND $cantidad!= "" AND $modelo!= "") {
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png") || (strpos($tipo2, "gif") || strpos($tipo2, "jpeg") || strpos($tipo2, "jpg") || strpos($tipo2, "png"))) && ($tamano< 2000000 AND $tamano2< 2000000 ))){
        echo "<script> alert('La extensión o el tamaño de los archivos no es correcta,Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.'); </script>";
     }
     else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        if (move_uploaded_file($temp, '../Imagen/Productos/'.$Imagen) AND move_uploaded_file($temp2, '../Imagen/QRL/'.$Imagen2)) {
         $conl = new callTo();
         $cnx = $conl->callme();
         mysqli_query($cnx,"INSERT INTO `productos`VALUES ('','$name_p','$modelo','../Imagen/QRL/".$Imagen2."','$cantidad','../Imagen/Productos/".$Imagen."','$area') ");
            echo "<script> alert('Se guardaron los datos con exito'); </script>";
        }
        else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
           echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
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