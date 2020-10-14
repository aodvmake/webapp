<?php 
include("bd.php");
class modeloconsulta{
       function consul(){
       $conht = new callTo();
       $cnx = $conht->callme();
       $correo=$_SESSION["email"];

       $idus=mysqli_query($cnx,"SELECT* FROM usuario WHERE email='$correo' ");
       $row=mysqli_fetch_array($idus);

       $cons=mysqli_query($cnx,"SELECT ren.IDrenta,pr.IDproducto,ren.IDproducto,pr.nombre_p,ren.cantidad,pr.modelo,ren.meses,da.name_e  
        FROM productos AS pr INNER JOIN renta as ren 
        ON pr.IDproducto=ren.IDproducto INNER JOIN datosgenerales AS da
        ON ren.IDusuario=da.IDusuario
        WHERE ren.estatus='false' AND ren.estatu='false' ");
       $retorno=[];
       $i=0;
       while ($fila=$cons->fetch_array()){
       	$retorno[$i]=$fila;
       	$i++;
       }
       return $retorno;
    }
}

?>