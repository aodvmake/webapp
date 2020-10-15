<?php 
require_once("../models/correcionreporte.php");
$con=new modeloapro();
$horario =$con->consulapro(); 
require_once("../views/correcionreporte.php");
?>