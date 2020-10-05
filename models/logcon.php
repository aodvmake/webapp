<?php 
session_start();
include("bd.php");
class modeloguardar{
       function guardar($email,$pass){
       $cclonn = new callTo();
       $rrcnx = $cclonn->callme();
     //Inserta en las tablas necesarias 
      $conp=mysqli_query($rrcnx,"SELECT US.IDusuario,US.email,US.pass,puestos.nombre FROM usuario AS US INNER JOIN puesto ON US.IDusuario=puesto.IDusuario INNER JOIN puestos ON puesto.IDpuesto=puestos.IDpuesto WHERE US.email='$email' AND US.pass=MD5('$pass') ");
      $rows="";

      if ($row=mysqli_fetch_array($conp)){
          $rows=$row['nombre'];
          $_SESSION["email"]=$row['email'];
          $_SESSION['tipo']=$row['nombre'];
          }
       
         switch ($rows) {
            case 'Cliente': echo "Cliente";
         		break;
         	  case 'Administrador': echo "Administrador";
				    break;
			      case 'King': echo "King";
            break;
            case '': echo "Usuario o contraseña incorrecta";
            break;
				break;
         }
      }
    }
?>