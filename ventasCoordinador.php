
<html >
<head>
  <meta charset="UTF-8">
  <title>Coordinador</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="shortcut icon" href="img/favicon.ico">
  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="angular/angular.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sweetalert.css">
<script src="js/custom.js"></script>
    <script src="bootstrap/js/"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/">
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
      <a href="#" id="profile-link"> Coordinador</a>
    </div>
    <div id="account-actions">
    <a href="index.php" ><button class="btn btn-success" title="Regresar al incio"><i class="fa fa-home"></i></button></a>
         
    
    </div>
        <ul id="main-nav">
    
      <li>
        <a href="comprasCoordinador.php">
          <i class="fa fa-suitcase"></i>
          Compras
        </a>
      </li>
      <li  class="active">
        <a href="ventasCoordinador.php">
          <i class="fa fa-check-square-o"></i>
        Ventas
        </a>
      </li>
      <li >
        
    </ul>
  </nav>
  <form id="admin-search">
    <input type="text" id="search-field" placeholder="Search"/>
    <label for="search-field" id="search-label" title="Search"><i class="fa fa-search"></i></label>
  </form>
  <div id="header_logo">
    <a href=""></a>
  </div>
</header>
     
<section id="content">
  <header id="content-header">
      <table>
          <tr>
              <td>
  <form action="pdfventas.php" method="post">
      <button type="submit" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Relizar orden de ventas" HSPACE="10" VSPACE="10">Generar Orden de Ventas </button>
</form></td>
              <td>
      
 <button onClick="document.location.reload();" type="submit" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Click Actualizar Datos" HSPACE="10" VSPACE="10"><i class="fa fa-refresh fa-spin  fa-fw"></i>
<span class="sr-only">Loading...</span></button>
                  </td>
              </tr>
</table>
  </header>
      
      <div class="alert alert-warning" role="alert">
  <strong>Warning!</strong> En caso de dudas contacta a tu proveedor.
</div>
    <h1>Vender los productos</h1>
     <form  action="vender.php" METHOD="POST" name="form" class="form-inline">

      <input type="text" class="form-control" placeholder="No. Serie"  name="id" required>
      <input type="text" class="form-control" placeholder="Cantidad"  name="cantidad" required>
      <input type="submit" class="btn btn-success"  value="Vender" >

    </form>  
     <script type="text/javascript">
      function validarForm(formulario)
      {
          if(formulario.palabra.value.length==0)
          { //¿Tiene 0 caracteres?
              formulario.palabra.focus();  // Damos el foco al control
              alert('Debes rellenar este campo'); //Mostramos el mensaje
              return false;
           } //devolvemos el foco
           return true;
       }
  </script>

 <form method="POST" action="busquedaVenta.php" onSubmit="return validarForm(this)">

     <input type="text" placeholder="Buscar por nombre o serie" name="palabra">

     <input type="submit" value="Buscar" name="buscar" class="btn btn-primary">

 </form>
    
  
  <h1>Productos en Venta</h1>  
<?php
include('conexion1.php');

$query=" SELECT * FROM productos";
$result=mysql_query($query,$bdconectada)or die ("Problemas".mysql_error());
ECHO "<table class='table table-striped'><th align='center'>Nombre</th><th align='center'>NoSerieP</th><th align='center'>CantidadP</th><th align='center'>CostoVentaP</th>";
while (($fila = mysql_fetch_array($result, MYSQLI_ASSOC)) == TRUE){
	ECHO "<tr>";
      
        ECHO " <TD >".$fila["NombreP"]."</TD>";
		ECHO " <TD >".$fila["NoSerieP"]."</TD>";
		ECHO " <TD >".$fila["CantidadP"]."</TD>";
        ECHO " <TD >".$fila["CostoVentaP"]."</TD>";
       
	     
  ECHO"</tr>";
}
ECHO "</table>";
?>
    
      <h1>Productos Vendidos</h1>
      <?php
include('conexion1.php');

$query="SELECT productos.NombreP, CantidadVend,Fecha_Salid,productos.NoSerieP FROM vendidos
INNER JOIN productos ON vendidos.matricula=productos.NoSerieP WHERE Fecha_Salid=CURRENT_DATE();";
$result=mysql_query($query,$bdconectada)or die ("Problemas".mysql_error());
ECHO "<table class='table table-striped'><th align='center'>Nombre</th><th align='center'>Fecha de Salida</th><th align='center'>Cantidad</th><th>Serie</th>";
while (($fila = mysql_fetch_array($result, MYSQLI_ASSOC)) == TRUE){
	ECHO "<tr>";
    
        ECHO " <TD >".$fila["NombreP"]."</TD>";
		ECHO " <TD >".$fila["Fecha_Salid"]."</TD>";
		ECHO " <TD >".$fila["CantidadVend"]."</TD>";
        ECHO " <TD >".$fila["NoSerieP"]."</TD>";
     
		
	
	
     
  ECHO"</tr>";
}
ECHO "</table>";
?>
      </section>
 
 
    
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
</body>
</html>
