<?php 
require_once("../models/subirproducto.php");
if(isset($_POST['save']))
	{
	  $name_p=$_POST['name_p'];
      $area=$_POST['texto'];
      $cantidad=$_POST['cantidad'];
      $modelo=$_POST['modelo'];
  // Obtenemos algunos datos necesarios sobre el archivo Imagenes
      $Imagen = $_FILES['imagen']['name'];
      $tipo = $_FILES['imagen']['type'];
      $tamano = $_FILES['imagen']['size'];
      $temp = $_FILES['imagen']['tmp_name'];

      $Imagen2 = $_FILES['qrl']['name'];
      $tipo2 = $_FILES['qrl']['type'];
      $tamano2 = $_FILES['qrl']['size'];
      $temp2 = $_FILES['qrl']['tmp_name'];

        $DBImagen = new DBImagen();
		$DBImagen->uploadImage($Imagen,$tipo,$tamano,$temp,$Imagen2,$tipo2,$tamano2,$temp2,$name_p,$area,$cantidad,$modelo);
	}
?>