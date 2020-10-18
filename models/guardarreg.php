<?php
include("bd.php");
class modeloguardar{
       function guardar($correo,$pass,$telefono,$name_e,$name_p,$domicilio,$colonia,$estado,$muncipio,$num){
       $clonn = new callTo();
       $rcnx = $clonn->callme();
        $va="2";
      //Consultas a la tabla
        $cons=mysqli_query($rcnx,"SELECT* FROM `usuario` WHERE email='$correo' ");
        $row=mysqli_fetch_array($cons);
        $rows=$row['email'];
//validacion de campos vacios
   if ($correo=="" OR $pass=="" OR $telefono=="" OR $name_e=="" OR $name_p =="" OR $domicilio =="" OR $colonia=="" OR $estado=="" OR  $muncipio=="" OR $num==""){ 
      echo "Error llene todos los datos requeridos";
     
        }
    else{
      switch ($va) {
        case $rows=="":

            //Guardar datos
            mysqli_query($rcnx,"INSERT INTO usuario (`email`, `pass`, `foto`, `estatus`) VALUES ('$correo',MD5('$pass'),'vacio','1')");     
            mysqli_query($rcnx,"INSERT INTO datosgenerales (`domicilio`, `colonia`, `numero`, `municipio`, `estado`, `name_e`, `name_p`, `telefono`) VALUES ('$domicilio','$colonia','$num','$muncipio','$estado','$name_e','$name_p','$telefono')");
            mysqli_query($rcnx,"INSERT INTO puesto (`IDpuesto`) VALUES ('3')");
            
            echo "Datos guardados con exito";
            
          break;
        case $rows!="":
            //Cuenta ya existe
           echo "Ya cuenta con una cuenta registrada";
          break;
    }
  }
 }
}
?>