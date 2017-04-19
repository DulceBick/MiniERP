<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
        
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Gerente</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="shortcut icon" href="img/favicon.ico">
    <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css'>
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
    body {
     background: #fff; 
}
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
      <li>
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
      <li  class="active">
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
  
    <h1>Ingresar productos comprados</h1>
   
  </header>
    
    <form  action="ingresarpro.php" METHOD="POST" name="form" class="form-inline">
      <input type="text" class="form-control" placeholder="nombre producto" name="NombreP" required>
      <input type="text" class="form-control" placeholder="No. Serie"  name="NoSerieP" required>
      <input type="text" class="form-control" placeholder="Cantidad"  name="CantidadP" required>
      <input type="text" class="form-control" placeholder="Costo de venta" name="CostoVentaP" required>
      <input type="text" class="form-control" placeholder="Costo de compra" name="CostoCompraP" required>
      <input type="text" class="form-control" placeholder="Fecha Entrada AA-MM-DD" name="FechaIngreso" required>
      <input type="submit" class="btn btn-warning"  value="Insertar" >

    </form>  
    
     <form ACTION="actualizar.php" method="POST" class="form-inline">
        <h1>Modificar Producto</h1>
    Serie del  Producto: <input type="text" name="id">
    <select name="campoacambiar">
			<option value="seleccion">Seleccione...</option>
			<option value="NombreP">NombreP</option>
			<option value="NoSerieP">No. Serie</option>
			<option value="CantidadP">CantidadP</option>
			<option value="CostoVentaP">CostoVentaP</option>
           <option value="CostoCompraP">CostoCompraP</option>
			<option value="FechaIngreso">FechaIngreso</option>
			<option value="FechaSalidaP">Fecha de Salida</option>
		</select>
        Nuevo Valor:
		<input type="text" name="valornuevo">
    <input type="submit" class="btn btn-primary" value="Actualizar">
   
    </form> 
    <form action="eliminar.php" method="POST">
        <h1>Eliminar Producto</h1>
     No. Serie del Producto <input type="text" name="eliminar">
    <input type="submit" value="Eliminar" onclick="return confirm('Estás seguro que deseas eliminar el registro?');"  class="btn btn-danger">
    </form>
   

     <form action="eliminar2.php" method="POST">
        <h1>Eliminar por cantidad de Productos</h1>
     No. Serie del Producto <input type="text" name="eliminar">
     Cantidad <input type="text" name="cantidad" placeholder="Número a eliminar">
    <input type="submit"   onclick="return confirm('Estás seguro que deseas eliminar el registro?');" value="Eliminar" class="btn btn-danger">
    </form>
 <form  action="consuproductos.php" METHOD="POST" id="form2" class="form-inline">
      
    <h1>Productos en Stock</h1>  
<?php
include('conexion1.php');

$query=" SELECT * FROM productos";
$result=mysql_query($query,$bdconectada)or die ("Problemas".mysql_error());
ECHO "<table class='table table-striped'><th>Nombre</th><th>NoSerieP</th><th>CantidadP</th><th>CostoVentaP</th><th>CostoCompraP</th><th>FechaIngreso</th>";
while (($fila = mysql_fetch_array($result, MYSQLI_ASSOC)) == TRUE){
	ECHO "<tr>";
    
        ECHO " <TD>".$fila["NombreP"]."</TD>";
		ECHO " <TD>".$fila["NoSerieP"]."</TD>";
		ECHO " <TD>".$fila["CantidadP"]."</TD>";
        ECHO " <TD>".$fila["CostoVentaP"]."</TD>";
        ECHO " <TD>".$fila["CostoCompraP"]."</TD>";
        ECHO " <TD>".$fila["FechaIngreso"]."</TD>";
		
	
	
     
  ECHO"</tr>";
}
ECHO "</table>";
?>
</form>
   
    
</section>

 
<footer></footer>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
</body>
</html>
