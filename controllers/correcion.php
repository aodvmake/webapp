<?php
require_once("../models/correcion.php");
 class datos{
 function save(){
  if(isset($_POST['aceptar'])) {
    $id=$_POST['aceptar'];
  $obj=new modeloguardar();
  echo $obj->guardar($id);
   }
 }
}
$variable=new datos();
echo $variable->save();
?>