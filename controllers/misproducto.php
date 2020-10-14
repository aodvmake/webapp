<?php
require_once("../models/misprodectos.php");
$con=new modeloconsulta();
$horario =$con->consul(); 

$conap=new modeloapro();
$conapr =$conap->consulapro(); 

$conel=new modeloeliminacion();
$conele =$conel->consuleliminacion(); 

require_once("../views/misproductos.php");
?>