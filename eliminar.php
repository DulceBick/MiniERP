 <?php
include('conexion1.php');
             
$serie=$_POST['eliminar'];
$query="DELETE * FROM productos WHERE NoSerieP='".$serie."'";
ECHO "".$query."</BR>";	  
$consulta = mysql_query($query);
HEADER("refresh:4; url=productos.php");

?>