<?php 
include("bd.php");
class modeloapro{
      function consulapro(){
       $conht = new callTo();
       $cnx = $conht->callme();
       $correo=$_SESSION["email"];

       $idus=mysqli_query($cnx,"SELECT* FROM usuario WHERE email='$correo' ");
       $row=mysqli_fetch_array($idus);

       $cons=mysqli_query($cnx,"SELECT pr.IDproducto,ren.IDproducto,pr.nombre_p,ren.cantidad,pr.modelo,ren.meses,ap.fecha_i,ap.fecha_f,ren.IDrenta  
      FROM productos AS pr INNER JOIN renta as ren 
      ON pr.IDproducto=ren.IDproducto INNER JOIN rentaaceptada as ap
      ON ap.IDrenta=ren.IDrenta 
      WHERE ren.estatus='1' AND ren.estatu='false' AND ren.IDusuario='".$row['IDusuario']."' ");
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