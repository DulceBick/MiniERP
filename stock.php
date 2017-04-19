<?php
include('conexion1.php');

$query=" SELECT * FROM productos WHERE CantidadP<='5'";
$result=mysql_query($query,$bdconectada)or die ("Problemas".mysql_error());
ECHO "<table class='table table-striped'><th>Id_p</th>,<th>Nombre</th>,<th>NoSerieP</th>,<th>CantidadP</th><th>CostoVentaP</th><th>CostoCompraP</th><th>FechaIngreso</th>,<th>FechaSalidaP</th>";
while (($fila = mysql_fetch_array($result, MYSQLI_ASSOC)) == TRUE){
	ECHO "<tr>";
      
		ECHO " <TD>".$fila["Id_p"]."</TD>";
        ECHO " <TD>".$fila["NombreP"]."</TD>";
		ECHO " <TD>".$fila["NoSerieP"]."</TD>";
		ECHO " <TD>".$fila["CantidadP"]."</TD>";
        ECHO " <TD>".$fila["CostoVentaP"]."</TD>";
        ECHO " <TD>".$fila["CostoCompraP"]."</TD>";
        ECHO " <TD>".$fila["FechaIngreso"]."</TD>";
		ECHO " <TD>".$fila["FechaSalidaP"]."</TD>";
	
	
     
  ECHO"</tr>";
}
ECHO "</table>";
?>