<?php
 
   include "conexion1.php";
 
 
 
$serie=$_POST['eliminar'];
$cantidad=$_POST['cantidad'];
$query="UPDATE proveedor SET CantidadLib=CantidadLib-'".$cantidad."'WHERE Serie='".$serie."'";
                        
				   $consulta = mysql_query($query);
                            
                     HEADER("refresh:0; url=proveedor.php");

				   
		   
?>