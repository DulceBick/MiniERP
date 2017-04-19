<?php
include('conexion1.php');
$id=$_POST['id'];
$cantidad=$_POST['cantidad'];
$query=mysql_query("UPDATE proveedor SET CantidadLib=CantidadLib-'".$cantidad."' WHERE Serie='".$id."'");
$query="INSERT INTO venta (CantidadV,NoSerie) VALUES('".$cantidad."','".$id."')";

$consulta=mysql_query($query);
//ECHO"".$query."</br>";

HEADER("refresh:0; url=compras.php");
?>
