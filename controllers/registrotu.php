<?php 
include("../models/guardarreg.php");

class datos{
 function save(){
  $request = $_REQUEST["request"];
  if ($request == 'data') {
	$correo = $_POST["correo"];
	$pass = $_POST["pass"];
	$telefono=$_POST["telefono"];
	$name_e=$_POST["name_e"];
	$name_p=$_POST["name_p"];
	$domicilio=$_POST["domicilio"];
	$colonia=$_POST["colonia"];
    $estado=$_POST["estado"];
    $muncipio=$_POST["muncipio"];
    $num=$_POST["num"];
    $obj=new modeloguardar();
  	echo $obj->guardar($correo,$pass,$telefono,$name_e,$name_p,$domicilio,$colonia,$estado,$muncipio,$num);
   }
 }
 function enviar($correo,$pass,$telefono,$name_e,$name_p,$domicilio,$colonia,$estado,$muncipio,$num){
 $registro= new modeloguardar();
 $registro->guardar($correo,$pass,$telefono,$name_e,$name_p,$domicilio,$colonia,$estado,$muncipio,$num);	
 }
}
$variable=new datos();
echo $variable->save();

?>