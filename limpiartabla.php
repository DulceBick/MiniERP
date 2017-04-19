 <?php
             
include('conexion1.php');

$query="DELETE FROM venta";
$consulta=mysql_query($query);
//ECHO"".$query."</br>";
HEADER("refresh:0; url=compras.php");
          
          ?>