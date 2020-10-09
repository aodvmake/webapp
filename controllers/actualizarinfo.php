<?php
include("../models/actualizarpro.php");

class datos{
 function save(){
  $request = $_REQUEST["request"];
  if ($request == 'data') {
	$id = $_POST["id"];
	$name_p=$_POST['name_p'];
    $modelo=$_POST['modelo'];
    $cantidad=$_POST['cantidad'];
   // $imagen=$_POST['imagen'];
    $Imagen = $_FILES['file']['name'];
    $temp = $_FILES['file']['tmp_name'];
    $textarea=$_POST['textarea'];
     
	$obj=new modeloguardar();
	echo $obj->guardar($id,$name_p,$modelo,$cantidad,$Imagen,$temp,$textarea);
   }
 }
 function enviar($id){
 $registro= new modeloguardar();
 $registro->guardar($id,$name_p,$modelo,$cantidad,$Imagen,$temp,$textarea);	
 }
}
$variable=new datos();
echo $variable->save();


?>