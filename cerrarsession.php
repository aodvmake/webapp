<?php 
session_start();

function eliminarsession(){
session_destroy();
header('location: login.php');

}
eliminarsession();
?>