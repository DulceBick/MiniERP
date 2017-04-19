 <?php
include('conexion1.php');

 
				
                
$serie=$_POST['eliminar'];
$query="DELETE FROM proveedor where Serie='".$serie."';";
//ECHO "".$query."</BR>";	  
$consulta = mysql_query($query);
HEADER("refresh:0; url=proveedor.php");

?>