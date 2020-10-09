<?php 
require_once("../models/consultarproductos.php");
$con=new modeloconsulta();
$horario =$con->consul(); 
require_once("../views/actualizarpro.php");
?>