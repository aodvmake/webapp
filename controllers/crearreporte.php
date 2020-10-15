<?php 
require_once("../models/crearreporte.php");
 class datos{
 function save(){
  if(isset($_POST['save'])) {
    $caja=$_POST['caja'];
    $seriales=$_POST['serial'];
    $exp=$_POST['texto'];

    $Imagen = $_FILES['imagen']['name'];
    $tipo = $_FILES['imagen']['type'];
    $tamano = $_FILES['imagen']['size'];
    $temp = $_FILES['imagen']['tmp_name'];


  $obj=new modeloguardar();
  echo $obj->guardar($caja,$seriales,$exp,$Imagen,$tipo,$tamano,$temp);
   }
 }
}
$variable=new datos();
echo $variable->save();
?>
