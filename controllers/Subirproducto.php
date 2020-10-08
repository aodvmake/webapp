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

        $DBImagen = new DBImagen();
		$DBImagen->uploadImage($Imagen,$tipo,$tamano,$temp,$name_p,$area,$cantidad,$modelo);
	}
?>