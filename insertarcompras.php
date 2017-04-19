
<?php
include('conexion1.php');
$NombrePrC=$_POST['NombrePrC'];
$CostoVentaPrC=$_POST['CostoVentaPrC'];
$CantidadPrC=$_POST['CantidadPrC'];


$query="INSERT INTO compras (NombrePrC,CostoVentaPrC,CantidadPrC) VALUES
('".$NombrePrC."','".$CostoVentaPrC."','".$CantidadPrC."')";
$consulta=mysql_query($query);
//ECHO"".$query."</br>";
HEADER("refresh:0; url=compras.php");
?>
