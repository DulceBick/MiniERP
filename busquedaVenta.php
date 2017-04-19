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
  
     <H1>Resultados de búsqueda</H1>

  <a href="ventas.php"><input type="submit" value="Regresar a Ventas" name="" class="btn btn-primary"></a>
  </header>
  
  

     
<?php
include ('conexion1.php');

if($_POST['buscar'])
{
 ?>

 <table class="table table-striped" >
     <tr>
         
          <td width="100" bgcolor="#58D3F7"  align="center"><strong>NombreProducto</strong></td>
          <td width="100" bgcolor="#58D3F7" align="center"><strong>NoSerieP</strong></td>
          <td width="100" bgcolor="#58D3F7" align="center"><strong>Precio de Venta</strong></td>
          <td width="100" bgcolor="#58D3F7"  align="center"><strong>Cantidad</strong></td>
     </tr>
     <?php
     
     $buscar = $_POST["palabra"];


     $consulta_mysql= mysql_query ("SELECT * FROM productos WHERE NombreP like '%$buscar%' or NoSerieP like '%$buscar%'");

     while($registro = mysql_fetch_assoc($consulta_mysql))
     {
         ?>
         <tr>
             
             <td  align="center"><?=$registro['NombreP']?></td>
             <td  align="center"><?=$registro['NoSerieP']?></td>
             <td  align="center"><?=$registro['CantidadP']?></td>
             <td  align="center"><?=$registro['CostoVentaP']?></td>
         </tr>
         <?php
     } 
  ?>
  </table>
  <?php
} 
?>
    
    
    
</section>



  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
</body>
</html>