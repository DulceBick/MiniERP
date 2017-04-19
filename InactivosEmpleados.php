<h1>Lista de empleados</h1>
  <?php
include('conexion1.php');
   
$query=" SELECT * FROM empleados WHERE Status='Inactivo'";
$result=mysql_query($query,$bdconectada)or die ("Problemas".mysql_error());
ECHO "<table class='table table-striped'><th align='center'>Id_Empleado</th><th align='center'>Nombre</th><th align='center'>Puesto</th><th align='center'>Departamento</th><th align='center'>Estudios</th><th align='center'>Edad</th><th align='center'>Domicilio</th><th align='center'>SueldoDiario</th><th align='center'>Status</th>";
while (($fila = mysql_fetch_array($result, MYSQLI_ASSOC)) == TRUE){
    ECHO"<TR>";
        ECHO " <TD align='center'>".$fila["Id_Empleado"]."</TD>";
	    ECHO " <TD align='center'>".$fila["NombreE"]."</TD>";
		ECHO " <TD align='center'>".$fila["PuestoE"]."</TD>";
		ECHO " <TD align='center'>".$fila["DepartamentoE"]."</TD>";
		ECHO " <TD align='center'>".$fila["EstudiosE"]."</TD>";
		ECHO " <TD align='center'>".$fila["EdadE"]."</TD>";
		ECHO " <TD align='center'>".$fila["DomicilioE"]."</TD>";
		ECHO " <TD align='center'>".$fila["SueldoDiarioE"]."</TD>";
		ECHO " <TD align='center'>".$fila["Status"]."</TD>";
	
	
     
  ECHO "</tr>";
}
ECHO "</table>";
?>