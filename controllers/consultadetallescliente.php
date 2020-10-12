<?php
include("../models/consultdetalle.php");

class datos{
 function save(){
if (isset($_POST['id'])) {
	# code...
	 $id=$_POST['id'];
     $obj=new modeloguardar();
     echo $obj->guardar($id);
  }
 }
}
$variable=new datos();
echo $variable->save();

?>