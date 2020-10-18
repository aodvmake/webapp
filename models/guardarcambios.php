<?php
include("bd.php");
if(isset($_POST['enviar'])){
	$id=$_POST['enviar'];
	$name_e=$_POST['name_e'];
	$name_p=$_POST['name_p'];
	$telefono=$_POST['telefono'];
	$domicilio=$_POST['domicilio'];
	$colonia=$_POST['colonia'];
	$estado=$_POST['estado'];
	$muncipio=$_POST['muncipio'];
	$num=$_POST['num'];
	$pass=$_POST['pass'];
    $redireccion="";

    $conht = new callTo();
    $cnx = $conht->callme();
    $con=mysqli_query($cnx,"SELECT* FROM puesto WHERE IDusuario='$id' ");
    $row=mysqli_fetch_array($con);
    if ($row['IDpuesto']=='1'){
    $redireccion="datosgenerales.php";
    }
    if ($row['IDpuesto']=='3'){
    $redireccion="datosgeneralescliente.php";
    }

	if ($name_e!="" AND $name_p!="" AND $telefono !="" AND $domicilio !="" AND $colonia !="" AND  $estado !="" AND $muncipio !="" AND $num !="") {

         mysqli_query($cnx,"UPDATE datosgenerales SET domicilio='$domicilio', colonia='$colonia', numero='$num', municipio='$muncipio',estado='$estado', name_e='$name_e', name_p='$name_p', telefono='$telefono' WHERE IDusuario='$id' ");

		if ($pass!=""){
         mysqli_query($cnx,"UPDATE usuario SET pass='MD5($pass)' WHERE IDusuario='$id' ");
   	    }
              echo'<script type="text/javascript">
              alert("Se guardaron los cambios");
              window.location.href="../views/'.$redireccion.'";
              </script>';
	 }
	else{
		      echo'<script type="text/javascript">
              alert("Falta llenar los datos");
              window.location.href="../views/'.$redireccion.'";
              </script>';
	}
}

?>