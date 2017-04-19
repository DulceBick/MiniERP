<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Auxiliar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="shortcut icon" href="img/favicon.ico">
  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css'>
  <link rel="stylesheet"; href="https://unpkg.com/ng-table@2.0.2/bundles/ng-table.min.css">

    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="angular/angular.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sweetalert.css">
<script src="js/custom.js"></script>
     <script src="js/sweetalert.min.js"></script>
  
</head>
<style>
    
    .btn {
   
        padding: 10px;
        margin: 10px;
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
      <a href="#" id="profile-link"> Auxiliar</a>
    </div>
    <div id="account-actions">
    <a href="index.php" ><button class="btn btn-success" title="Regresar al incio"><i class="fa fa-home"></i></button></a>
        
      
    
    </div>
    <ul id="main-nav">
      <li class="active">
        <a href="inventarioAuxiliar.php">
          <i class="fa fa-file-text"></i>
        Inventario
        </a>
      </li>
      <li>
       
        <a href="productosAuxiliar.php">
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
       <table>
       <td>
           
           <tr>
            <form action="GeneralInventario.php" method="post">
        
           <button type="submit" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Relizar reporte de inventario General" >Reporte General</button>
           </form>
           </tr>
           
           <tr>
           <form method="post" action="inventariopdf.php">
     
      <button type="submit" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Relizar reporte de inventario de Productos" >Reporte de Productos</button>
    </form>
           </tr>
           
           <tr>
            <form action="ventaspdfinventario.php" method="post">

  <button type="submit" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Relizar reporte de inventario de Ventas">Reporte de Ventas</button>
        
        </form>
           </tr>
          
           </td>
       
       </table>
     
     
  
   
    
 <form  action="consuproductos.php" METHOD="POST" id="form2" class="form-inline">
      
    <h1>Productos Stock</h1>  
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
       
      <h1>Productos Vendidos</h1>
      <?php
include('conexion1.php');

$query=" SELECT * FROM ventas";
$result=mysql_query($query,$bdconectada)or die ("Problemas".mysql_error());
ECHO "<table class='table table-striped'><th align='center'>Nombre</th><th align='center'>Fecha de Salida</th><th align='center' align='center'>CostoVenta</th><th>Cantidad</th><th align='center'>Serie</th>";
while (($fila = mysql_fetch_array($result, MYSQLI_ASSOC)) == TRUE){
	ECHO "<tr>";
    
        ECHO " <TD>".$fila["NombrePrV"]."</TD>";
		ECHO " <TD>".$fila["FechaSalidaPrV"]."</TD>";
		ECHO " <TD>".$fila["CostoVentaPrV"]."</TD>";
        ECHO " <TD>".$fila["CantidadPrV"]."</TD>";
        ECHO " <TD>".$fila["NoSeriePrV"]."</TD>";
     
		
	
	
     
  ECHO"</tr>";
}
ECHO "</table>";
?>
    
  </header>
  
 
</section>

 
<footer></footer>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
</body>
</html>
