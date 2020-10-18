<?php 
require_once("../models/datosgenerales.php");
$con=new modeloconsulta();
$horario =$con->consul(); 
require_once("../views/datosgenerales.php");
?>