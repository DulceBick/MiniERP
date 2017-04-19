<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Gerente</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="shortcut icon" href="img/favicon.ico">
  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css'>
  <link rel="stylesheet"; href="https://unpkg.com/ng-table@2.0.2/bundles/ng-table.min.css">
  <script src="https://unpkg.com/ng-table@2.0.2/bundles/ng-table.min.js"></script>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="angular/angular.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sweetalert.css">
<script src="js/custom.js"></script>
     <script src="js/sweetalert.min.js"></script>
  
</head>
<style>
    
    .btn {
   
        padding: 10px;}
    </style>

  <body>
    
<div id="menu-overlay"></div>
<div id="menu-toggle" class="closed" data-title="Menu">
    <i class="fa fa-bars"></i>
    <i class="fa fa-times"></i>
  </div>
<header id="main-header">
  <nav id="sidenav">
    <div id="sidenav-header">
      <div id="profile-picture">
      	<img src="img/owl.png"/>
      </div>
      <a href="#" id="profile-link"> Gerencial</a>
    </div>
    <div id="account-actions">
    <a href="index.php" ><button class="btn btn-success" title="Regresar al incio"><i class="fa fa-home"></i></button></a>
     
    
    </div>
    <ul id="main-nav">
      <li class="active">
        <a href="inventario.php">
          <i class="fa fa-file-text"></i>
        Inventario
        </a>
      </li>
      <li>
        <a href="compras.php">
          <i class="fa fa-suitcase"></i>
          Compras
        </a>
      </li>
      <li>
        <a href="ventas.php">
          <i class="fa fa-check-square-o"></i>
        Ventas
        </a>
      </li>
      <li>
        <a href="productos.php">
          <i class="fa fa-book"></i>
          Productos
        </a>
      </li>
        <li>
        <a href="empleado.php">
          <i class="fa fa-money"></i>
          Nómina
        </a>
      </li>
    </ul>
  </nav>
  
  <div id="header_logo">
    <a href=""></a>
  </div>
</header>
<section id="content">
  <header id="content-header">
  
     <H1>NÓMINA DE EMPLEADOS CON DETALLES</H1>


  </header>
  
 <form  action="AltaEmpleado.php" METHOD="POST" name="form" class="form-inline">
      <input type="text" class="form-control" placeholder="nombre" name="NombreE" required>
      <input type="text" class="form-control" placeholder="Departamento"  name="DepartamentoE" required>
      <input type="text" class="form-control" placeholder="Puesto"  name="PuestoE" required>
      <input type="text" class="form-control" placeholder="Estudios" name="EstudiosE" required>
      <input type="text" class="form-control" placeholder="Edad" name="EdadE" required>
      <input type="text" class="form-control" placeholder="Domicilio" name="DomicilioE" required>
        <input type="text" class="form-control" placeholder="SueldoDiario" name="SueldoDiarioE" required>
      <input type="submit" class="btn btn-warning"  value="Insertar" >

    </form>  
    
    <form action="bajaEmpleado.php" method="POST">
        <h1>Dar de baja a un empleado</h1>
     Id de Empleado <input type="text" name="id">
    <input type="submit" value="Dar de baja" onclick="return confirm('Estás seguro que deseas eliminar el registro?');"  class="btn btn-danger">
    </form>
    <form action="pagopdf.php" method="POST">
        <h1>Descargar Pago </h1>
     Id de Empleado <input type="text" name="id">
    <input type="submit" value="Generar" onclick="return confirm('¿Estás seguro que deseas generar el pago?');"  class="btn btn-success">
    </form>
     <table>
       <td>
           <tr>
               <a href="empleado.php#Activo" > <button type="submit" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Empleados Activos " >Activos</button></a>
           </tr> 
           <tr>
      <a href="empleado.php#inactivo" > 
      <button type="submit" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Empledos Inactivos" >Inactivos</button>
        </a>
          </tr>
        <tr> 
           <a href="empleado.php#reloj" > 
      <button type="submit" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Reloj Checador" >Checador</button>
        </a>
           </tr>          
            </td>
       </table>
 
   <div class="Activo">
    <h1 >Empleados Activos</h1>
                     <?php
include('conexion1.php');
   
$query=" SELECT * FROM empleados WHERE Status='Activo'";
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
    </div>
    
    
    <DIV id="inactivo">
          <h1 >Lista de empleados Dados de Baja</h1>
  <?php
include('conexion1.php');
   
$query=" SELECT * FROM empleados WHERE Status='Inactivo'";
$result=mysql_query($query,$bdconectada)or die ("Problemas".mysql_error());
ECHO "<table class='table table-striped'><th align='center'>Id_Empleado</th><th align='center'>Nombre</th><th align='center'>Puesto</th><th align='center'>Departamento</th><th align='center'>Estudios</th><th align='center'>Edad</th><th align='center'>Domicilio</th><th align='center'>Sueldo Semanal</th><th align='center'>Status</th>";
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
   </DIV>
  
     <DIV id="reloj">
          <h1 >Reloj Checador</h1>
  <?php
include('conexion1.php');
 


$query="SELECT 
Id_Empleado,NombreE,DepartamentoE,PuestoE,((SueldoDiarioE*5)-(SueldoDiarioE*faltas.numero)) as 'Sueldo_Semanal',SueldoDiarioE,
retardos.numero as 'retardos',
faltas.numero as 'faltas'
FROM empleados
INNER JOIN checadorentrada ON empleados.Id_Empleado=checadorentrada.matricula
INNER JOIN checadorsalida ON empleados.Id_Empleado=checadorsalida.matricula 
INNER JOIN retardos ON empleados.Id_Empleado=retardos.matricula 
INNER JOIN faltas ON empleados.Id_Empleado=faltas.matricula;";
$result=mysql_query($query,$bdconectada)or die ("Problemas".mysql_error());
ECHO "<table class='table table-striped'><th align='center'>matricula</th><th align='center'>Nombre</th><th align='center'>Departamento</th><th align='center'>Puesto</th><th align='center'>Sueldo Semanal</th><th align='center'>retardos</th><th align='center'>faltas</th>";
while (($fila = mysql_fetch_array($result, MYSQLI_ASSOC)) == TRUE){
    ECHO"<TR>";
        ECHO " <TD align='center'>".$fila["Id_Empleado"]."</TD>";
        ECHO " <TD align='center'>".$fila["NombreE"]."</TD>";
	    ECHO " <TD align='center'>".$fila["DepartamentoE"]."</TD>";
		ECHO " <TD align='center'>".$fila["PuestoE"]."</TD>";
		ECHO " <TD align='center'>$ ".$fila["Sueldo_Semanal"]."</TD>";
		ECHO " <TD align='center'>".$fila["retardos"]."</TD>";
		ECHO " <TD align='center'>".$fila["faltas"]."</TD>";
		
		
	
	
     
  ECHO "</tr>";
}
ECHO "</table>";
?>
   </DIV>
   
     
    
    
    
</section>



  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
</body>
</html>
