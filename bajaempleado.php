<?php
include('conexion1.php');
$id=$_POST['id'];

$query="UPDATE empleados SET Status='Inactivo' WHERE Id_Empleado='".$id."'";


$consulta = mysql_query($query);
HEADER("refresh:0; url=empleado.php");
//ECHO"".$query."</br>";
?>