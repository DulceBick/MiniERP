<?php
include('conexion1.php');
$id=$_POST['id'];
$campoacambiar = $_REQUEST['campoacambiar'];
$valornuevo=$_POST['valornuevo'];
$query="UPDATE proveedor SET ".$campoacambiar."='".$valornuevo."' WHERE Serie='".$id."'";

$consulta = mysql_query($query);
HEADER("refresh:0; url=proveedor.php");
//ECHO"".$query."</br>";
?>

