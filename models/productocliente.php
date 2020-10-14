<?php
session_start();
include("bd.php");
class modeloguardar{
       function guardar($cantidad,$meses,$id){
       $cclonn = new callTo();
       $rrcnx = $cclonn->callme();
       $correo=$_SESSION["email"];

       if ($cantidad!='' AND $meses!='') {
        if($meses=="1 meses" OR $meses=="4 meses" OR $meses=="6 meses" OR $meses=="12 meses" OR $meses=="21 meses"){
             $idus=mysqli_query($rrcnx,"SELECT* FROM usuario WHERE email='$correo' ");
             $row=mysqli_fetch_array($idus);

              mysqli_query($rrcnx,"INSERT INTO renta VALUES ('','$id','".$row['IDusuario']."','$cantidad','$meses','0','0') ");

              echo'<script type="text/javascript">
              alert("Datos Guardados");
              window.location.href="../views/clienteproducto.php";
              </script>';
      

        }
        else{  
           echo'<script type="text/javascript">
           alert("Faltan Datos");
           window.location.href="../views/clienteproducto.php";
           </script>';
        }
       }
       else{

        echo'<script type="text/javascript">
        alert("Faltan Datos");
        window.location.href="../views/clienteproducto.php";
        </script>';

       }



    }
  }
?>