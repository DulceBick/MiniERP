<?php
include('conexion1.php');
$id=$_POST['id'];
$campoacambiar = $_REQUEST['campoacambiar'];
$valornuevo=$_POST['valornuevo'];
$query="UPDATE productos SET ".$campoacambiar."='".$valornuevo."' WHERE NoSerieP='".$id."'";

$consulta = mysql_query($query);
HEADER("refresh:0; url=productos.php");
//ECHO"".$query."</br>";
?>

