<?php
include("../models/bd.php");
 $correo="aodv@gmail.com";
 $pass="ho@a";
 $telefono="123";
 $name_e="ho@a";
 $name_p="ho@a";
 $domicilio="ho@a";
 $colonia="ho@a";
 $estado="ho@a";
 $numero="321";
 $municipio="321";

       $clonn = new callTo();
       $rcnx = $clonn->callme();
       $passEncrip=password_hash($pass, PASSWORD_DEFAULT);
     //Inserta en las tablas necesaria 

     //validacion de correo 
          $cons=mysqli_query($rcnx,"SELECT* FROM `usuario` WHERE email='$correo' ");
          $row=mysqli_fetch_array($cons);
          $rows=$row['email'];
              if ($rows==""){
              mysqli_query($rcnx,"INSERT INTO usuario VALUES ('','$correo','$passEncrip','','1')") or die("error no inserto usuarios insertar usuario");     
             // Inserta los datos siguientes 
             
             $consr=mysqli_query($rcnx,"SELECT* FROM `usuario` WHERE email='$correo'");
             $rowss="";
             $roww=mysqli_fetch_array($consr);
             $rowss=$roww['IDusuario']; 

             mysqli_query($rcnx,"INSERT INTO datosgenerales VALUES ('$rowss','$domicilio','$colonia','$numero','$municipio','$estado','$name_e','$name_p','$telefono')") or die("error no inserto datos generales");

             mysqli_query($rcnx,"INSERT INTO puesto VALUES ('3','$rowss')") or die("error no inserto puesto");
               echo "Datos guardados con éxito";
  
              }
         else{
          echo "este correo ya existe";
         }
?>