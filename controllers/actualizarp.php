<?php
include("../models/consulactualizar.php");

class datos{
 function save(){
  $request = $_REQUEST["request"];
  if ($request == 'data') {
	$id = $_POST["id"];

	$obj=new modeloguardar();
	echo $obj->guardar($id);
   }
 }
 function enviar($id){
 $registro= new modeloguardar();
 $registro->guardar($id);	
 }
}
$variable=new datos();
echo $variable->save();


?>