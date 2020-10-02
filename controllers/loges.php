<?php
include("../models/logcon.php");

class datos{
 function save(){
  $request = $_REQUEST["request"];
  if ($request == 'data') {
	$email = $_POST["email"];
	$pass = $_POST["pass"];
	
	$obj=new modeloguardar();
	echo $obj->guardar($email,$pass);
   }
 }
 function enviar($email,$pass){
 $registro= new modeloguardar();
 $registro->guardar($email,$pass);	
 }
}
$variable=new datos();
echo $variable->save();
?>