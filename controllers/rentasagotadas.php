<?php
require_once("../models/rentasagotadas.php");
$con=new modeloconsulta();
$horario =$con->consul(); 
require_once("../views/rentasagotadas.php");
?>