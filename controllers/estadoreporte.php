<?php 
require_once("../models/estadoreporte.php");
$con=new modeloapro();
$horario =$con->consulapro(); 
require_once("../views/estadoreporte.php");
?>