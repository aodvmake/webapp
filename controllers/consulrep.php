<?php 
require_once("../models/consulrep.php");
$con=new modeloapro();
$horario =$con->consulapro(); 
require_once("../views/reportequipo.php");
?>