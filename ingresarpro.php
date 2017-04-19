<?php
include('conexion1.php');
$NombreP=$_POST['NombreP'];
$NoSerieP=$_POST['NoSerieP'];
$CantidadP=$_POST['CantidadP'];
$CostoVentaP=$_POST['CostoVentaP'];
$CostoCompraP=$_POST['CostoCompraP'];
$FechaIngreso=$_POST['FechaIngreso'];

$query="INSERT INTO productos (NombreP,NoSerieP,CantidadP,CostoVentaP,CostoCompraP,FechaIngreso) VALUES
('".$NombreP."','".$NoSerieP."','".$CantidadP."','".$CostoVentaP."','".$CostoCompraP."','".$FechaIngreso."')";
$consulta=mysql_query($query);
//ECHO"".$query."</br>";
HEADER("refresh:0; url=productos.php");
?>
