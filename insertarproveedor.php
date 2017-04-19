<?php
include('conexion1.php');
$Serie=$_POST['Serie'];
$NombreLibro=$_POST['NombreLibro'];
$PrecioLibro=$_POST['PrecioLibro'];
$CantidadLib=$_POST['CantidadLib'];

$query="INSERT INTO proveedor (Serie,NombreLibro,PrecioLibro,CantidadLib) VALUES
('".$Serie."','".$NombreLibro."','".$PrecioLibro."','".$CantidadLib."')";
$consulta=mysql_query($query);
//ECHO"".$query."</br>";
HEADER("refresh:2; url=proveedor.php");
?>
