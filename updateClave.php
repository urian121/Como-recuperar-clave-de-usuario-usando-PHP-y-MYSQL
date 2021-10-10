<?php
include('verificarDatos/config.php');
$id 		    = $_REQUEST['id'];
$tokenUser 		= $_REQUEST['tokenUser'];
$password       = $_REQUEST['password'];

$updateClave    = ("UPDATE login SET password='$password' WHERE id='".$id."' AND tokenUser='".$tokenUser."' ");
$queryResult    = mysqli_query($con,$updateClave); 

?>

<meta http-equiv="refresh" content="0;url=index.php?email=1"/>