<?php
include("bd.php");
class modeloguardar{
public function guardar($caja,$seriales,$exp,$Imagen,$tipo,$tamano,$temp){
if (isset($Imagen) && $Imagen != ""  AND $caja!= "" AND $seriales!= ""  AND $exp!= "") {
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano< 2000000))){
        echo'<script type="text/javascript">
        alert("La extensión o el tamaño de los archivos no es correcta,Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.");
        window.location.href="../views/reportequipo.php";
        </script>';

     }
     else {

     	 $conl = new callTo();
         $cnx = $conl->callme();
         //Renombrar el archivo
         $id=mysqli_query($cnx,"SELECT MAX(IDreporte) FROM reportes");
         $row=mysqli_fetch_array($id);
         $rows=$row['MAX(IDreporte)']+1;
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        if (move_uploaded_file($temp, '../Imagen/Reporte/'.$rows.$Imagen)){
             mysqli_query($cnx,"INSERT INTO reportes (`IDrenta`, `seriales`, `img`, `texto`, `estatus`) VALUES ('$caja','$seriales','../Imagen/Reporte/".$rows.$Imagen."','$exp','1') ");
        echo'<script type="text/javascript">
        alert("Se guardaron los datos con exito");
        window.location.href="../views/reportequipo.php";
        </script>';
        }
        else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
        echo'<script type="text/javascript">
        alert("Ocurrió algún error al subir el fichero. No pudo guardarse.");
        window.location.href="../views/reportequipo.php";
        </script>';
        }
      }
    }
    else{
    	//Si no los datos no estan completos
         echo'<script type="text/javascript">
        alert("Verifique que los datos sean correctos.");
        window.location.href="../views/reportequipo.php";
        </script>';
    }
  }
}
?>