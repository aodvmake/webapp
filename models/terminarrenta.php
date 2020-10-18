<?php
session_start();
include("bd.php");
  class modeloeliminar{
       function eliminar($id){
        $cclonn = new callTo();
        $rrcnx = $cclonn->callme();
        mysqli_query($rrcnx,"UPDATE renta SET estatu='1' WHERE IDrenta='$id' ");

        echo'<script type="text/javascript">
              alert("Se guardaron los datos");
              window.location.href="../views/rentasagotadas.php";
              </script>';

       }
     }
?>