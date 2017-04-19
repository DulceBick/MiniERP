<?php
include('conexion1.php');
$NombreE=$_POST['NombreE'];
$DepartamentoE=$_POST['DepartamentoE'];
$PuestoE=$_POST['PuestoE'];
$EstudiosE=$_POST['EstudiosE'];
$EdadE=$_POST['EdadE'];
$DomicilioE=$_POST['DomicilioE'];
$SueldoDiarioE=$_POST['SueldoDiarioE'];


$query="INSERT INTO empleados  (NombreE,DepartamentoE,PuestoE,EstudiosE,EdadE,DomicilioE,SueldoDiarioE) VALUES('".$NombreE."','".$DepartamentoE."','".$PuestoE."','".$EstudiosE."','".$EdadE."','".$DomicilioE."','".$SueldoDiarioE."')";
$consulta=mysql_query($query);
//ECHO"".$query."</br>";
HEADER("refresh:0; url=empleado.php");
?>
