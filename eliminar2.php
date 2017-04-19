<?php
 
   include "conexion1.php";
 
 
$serie=$_POST['eliminar'];
$cantidad=$_POST['cantidad'];
$query="UPDATE productos SET CantidadP=CantidadP-'".$cantidad."'WHERE NoSerieP='".$serie."'";
                        
				   $consulta = mysql_query($query);
                            
                     HEADER("refresh:2; url=productos.php");

				   		       
		   
?>