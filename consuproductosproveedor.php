
<?php
include('conexion1.php');

$query=" SELECT * FROM proveedor";
$result=mysql_query($query,$bdconectada)or die ("Problemas".mysql_error());
ECHO "<table class='table table-striped'><th>Id_p</th>,<th>Serie</th><th>NombreLibro</th><th>PrecioLibro</th><th>CantidadLib</th>";
while (($fila = mysql_fetch_array($result, MYSQLI_ASSOC)) == TRUE){
	echo "<tr>";
      
        ECHO " <TD>".$fila["Serie"]."</TD>";
		ECHO " <TD>".$fila["NombreLibro"]."</TD>";
		ECHO " <TD>".$fila["PrecioLibro"]."</TD>";
        ECHO " <TD>".$fila["CantidadLib"]."</TD>";
        
	
	
     
  echo "</tr>";
}
ECHO "</table>";
?>
