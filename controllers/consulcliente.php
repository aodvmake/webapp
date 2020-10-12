<?php
error_reporting(0);
include("../models/consulcliente.php");

class datos{
 function save(){
  $re=$_POST['re'];
  $obj=new modeloguardar();
  echo $obj->guardar($re);
 }
}
$variable=new datos();
echo $variable->save();

?>