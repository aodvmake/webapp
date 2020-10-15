<?php 
include("bd.php");
class modeloapro{
      function consulapro(){
       $conht = new callTo();
       $cnx = $conht->callme();

       $cons=mysqli_query($cnx,"SELECT pr.IDproducto,ren.IDproducto,pr.nombre_p,ren.cantidad,pr.modelo,ren.IDrenta,repor.estatus,repor.texto,repor.seriales,repor.IDreporte,ren.IDusuario,datosgenerales.name_e 
       FROM productos AS pr INNER JOIN renta as ren 
       ON pr.IDproducto=ren.IDproducto INNER JOIN rentaaceptada as ap 
       ON ap.IDrenta=ren.IDrenta INNER JOIN reportes as repor 
       ON repor.IDrenta=ren.IDrenta INNER JOIN datosgenerales
       ON datosgenerales.IDusuario=ren.IDusuario
       WHERE ren.estatus='1' AND ren.estatu='0' AND repor.estatus='1' ");
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
