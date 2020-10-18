<?php 
include("bd.php");
class modeloconsulta{
       function consul(){
       $conht = new callTo();
       $cnx = $conht->callme();
       $fecha_actual = date("Y-m-d");

       $cons=mysqli_query($cnx,"SELECT ren.IDrenta,pr.IDproducto,ren.IDproducto,pr.nombre_p,ren.cantidad,pr.modelo,ren.meses,da.name_e,rp.fecha_f,rp.fecha_i 
        FROM productos AS pr INNER JOIN renta as ren 
        ON pr.IDproducto=ren.IDproducto INNER JOIN datosgenerales AS da
        ON ren.IDusuario=da.IDusuario INNER JOIN rentaaceptada AS rp
        ON rp.IDrenta=ren.IDrenta
        WHERE ren.estatus='1' AND ren.estatu='0' AND rp.fecha_f<'$fecha_actual' ");
       
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