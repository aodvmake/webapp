        <?php 
session_start();
include("bd.php");
class modeloguardar{
       function guardar($id){
       $cclonn = new callTo();
       $rrcnx = $cclonn->callme();

       mysqli_query($rrcnx,"UPDATE reportes SET estatus='0' WHERE IDreporte='$id' ");

        echo'<script type="text/javascript">
        alert("Datos Guardados");
        window.location.href="../views/correcionreporte.php";
        </script>';

    }
  }
?>