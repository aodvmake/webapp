<?php
include("../models/actualizarpro.php");

class datos{
 function save(){
  if(isset($_POST['save'])) {
	
	//$id = $_POST["id"];
	$name_p=$_POST['name_p'];
    $modelo=$_POST['modelo'];
    $cantidad=$_POST['cantidad'];
   // $imagen=$_POST['imagen'];
    $Imagen = $_FILES['imagen']['name'];
    $temp = $_FILES['imagen']['tmp_name'];
    $textarea=$_POST['texto'];
     
	$obj=new modeloguardar();
	echo $obj->guardar($name_p,$modelo,$cantidad,$Imagen,$temp,$textarea);
   }
 }
// function enviar($name_p,$modelo,$cantidad,$Imagen,$temp,$textarea){
// $registro= new modeloguardar();
// $registro->guardar($name_p,$modelo,$cantidad,$Imagen,$temp,$textarea);	
// }
}
$variable=new datos();
echo $variable->save();


?>