<?php
include('verificarDatos/config.php');
$id 		    = $_REQUEST['id'];
$tokenUser 		= $_REQUEST['tokenUser'];

$updateClave    = ("UPDATE login SET password='.$clave.' WHERE id='".$id."' AND $tokenUser='".$tokenUser."' ");
$queryResult    = mysqli_query($con,$updateClave); 


?>