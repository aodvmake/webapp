<?php
require_once("../models/solicitudpro.php");
$con=new modeloconsulta();
$horario =$con->consul(); 
require_once("../views/solicitudrenta.php");
?>