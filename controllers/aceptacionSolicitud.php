<?php
include("../models/aceptacionSolicitud.php");

class datos{
 function save(){
  if(isset($_POST['aceptar'])) {
	  $id=$_POST['aceptar'];
	$obj=new modeloguardar();
	echo $obj->guardar($id);
   }
  if(isset($_POST['eliminar'])) {
  $id=$_POST['eliminar'];
  $obj=new modeloeliminar();
  echo $obj->eliminar($id);
   }
 }
}
$variable=new datos();
echo $variable->save();


?>