<!DOCTYPE html>
<html>
<head>
      <meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Proveedor</title>
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
      <a href="#" id="profile-link"> Proveedor</a>
    </div>
    <div id="account-actions">
    <a href="index.php" ><button class="btn btn-success" title="Regresar al incio"><i class="fa fa-home"></i></button></a>
        
   
    </div>
       
    <ul id="main-nav">
     
      
      
      <li  class="active">
        <a href="productos.php">
          <i class="fa fa-book"></i>
          Productos
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
  
    <h1>Ingresar productos </h1>
     <div class="alert alert-warning" role="alert">
  <strong>Warning!</strong> Si ingresas el mismo producto dos veces no se ingresará. Si tienes duda contacta a tu cliente de Porrúa.
</div>
   
  </header>
     <form  action="insertarproveedor.php" method="post"  class="form-inline">
      <input type="text" class="form-control" placeholder="Serie de 6 numeros"  name="Serie" required>
      <input type="text" class="form-control" placeholder="Nombre Libro"  name="NombreLibro" required>
      <input type="text" class="form-control" placeholder="Precio Libro" name="PrecioLibro" required>
      <input type="text" class="form-control" placeholder="Cantidad Libros" name="CantidadLib" required>
      <input type="submit" class="btn btn-warning"  value="Insertar" >
</form> 
    
    <form ACTION="actualizarProveedor.php" method="POST" class="form-inline">
        <h1>Modificar Producto</h1>
 Serie del Producto: <input type="text" name="id">
    <select name="campoacambiar">
			<option value="seleccion">Seleccione...</option>
			<option value="Serie">Serie</option>
			<option value="NombreLibro">NombreLibro</option>
			<option value="PrecioLibro">PrecioLibro</option>
			<option value="CantidadLib">CantidadLib</option>
          
		</select>
        Nuevo Valor:
		<input type="text" name="valornuevo">
    <input type="submit" class="btn btn-primary" value="Actualizar">
   
    </form> 
    <form action="eliminarProveedor.php" method="POST">
        <h1>Eliminar Producto</h1>
     No. Serie del Producto <input type="text" name="eliminar">
    <input type="submit" value="Eliminar" class="btn btn-danger" onclick="return confirm('Estás seguro que deseas eliminar el registro?');" >
    </form>
     <form action="eliminarProveedor2.php" method="POST">
       <h1>Eliminar por cantidad de Productos</h1>
     No. Serie del Producto <input type="text" name="eliminar">
     Cantidad <input type="text" name="cantidad" placeholder="Número a eliminar">
    <input type="submit"   onclick="return confirm('Estás seguro que deseas eliminar el registro?');" value="Eliminar" class="btn btn-danger">
    </form>
    
    
 <form  action="consuproductosproveedor.php" METHOD="POST" id="form2" class="form-inline">
      
    <h1>Productos en Lista</h1>  

<?php
include('conexion1.php');

$query=" SELECT * FROM proveedor";
$result=mysql_query($query,$bdconectada)or die ("Problemas".mysql_error());
ECHO "<table class='table table-striped'><th>Serie</th><th>NombreLibro</th><th>PrecioLibro</th><th>CantidadLib</th>";
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

</form>
    
</section>

 
<footer></footer>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
</body>
</html>
