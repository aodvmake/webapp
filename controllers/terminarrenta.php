<?php
include("../models/terminarrenta.php");

class datos{
 function save(){
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