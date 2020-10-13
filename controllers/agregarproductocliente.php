<?php 
require_once("../models/productocliente.php");
  class datos{
 function save(){
  if(isset($_POST['save'])) {
  
    $cantidad=$_POST['cntidad'];
    $meses=$_POST['caja'];
    $id=$_POST['save'];
     
  $obj=new modeloguardar();
  echo $obj->guardar($cantidad,$meses,$id);
   }
 }
}
$variable=new datos();
echo $variable->save();
?>

