<?php
include('conexion1.php');

$matricula=$_POST['matricula'];
$query="INSERT INTO checador (id_Checador, hora_entrada, fechaChecador, faltas_acumuladas, matricula, retardos) VALUES (NULL, CURRENT_TIME() ,CURRENT_DATE() , '0', '".$matricula."', '0')";
$consulta=mysql_query($query);


?>