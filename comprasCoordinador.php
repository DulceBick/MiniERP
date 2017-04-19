<!DOCTYPE html>
<html >
 <?php
    include('conexion1.php');
    ?>
<head>
  <meta charset="UTF-8">
  <title>Coordinador</title>
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
     <script src="js/busquedaCompras.js"></script>
    <script src="js/test.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 

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
      <a href="#" id="profile-link"> Coordinador</a>
    </div>
    <div id="account-actions">
    <a href="index.php" ><button class="btn btn-success" title="Regresar al incio"><i class="fa fa-home"></i></button></a>


    </div>
       <ul id="main-nav">
     
      <li  class="active">
        <a href="comprasCoordinador.php">
          <i class="fa fa-suitcase"></i>
          Compras
        </a>
      </li>
      <li>
        <a href="ventasCoordinador.php">
          <i class="fa fa-check-square-o"></i>
        Ventas
        </a>
      </li>
      <li >
       
    </ul>
  </nav>
  <form id="admin-search" method="post">
    <input type="text" id="search-field" name="busca" placeholder="Search" />
    <label for="search-field" id="search-label" title="Search"><i class="fa fa-search"></i></label>

  </form>



  <div id="header_logo">
    <a href=""></a>
  </div>
</header>
      
<section id="content">
  <header id="content-header">
      <table>
      <td>


    
         
          
 <tr>
      <button onClick="document.location.reload();" type="submit" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Click Actualizar Datos" HSPACE="10" VSPACE="10"><i class="fa fa-refresh fa-spin  fa-fw"></i>
<span class="sr-only">Loading...</span></button>
        </tr>
          </td>
      </table>
      
  <div class="alert alert-warning" role="alert">
  <strong>Warning!</strong> Para ver la actualización de los productos a comprar,da click en el botón verde. En caso de dudas contacta a tu proveedor.
</div>
  </header>
        <script type="text/javascript">
      function validarForm(formulario)
      {
          if(formulario.palabra.value.length==0)
          { 
              formulario.palabra.focus();  
              alert('Debes rellenar este campo');   
              return false;
           } 
           return true;
       }
  </script><!--
<h1>Realizar Compra</h1>
     <div class="alert alert-warning" role="alert">
  <strong>Warning!</strong> Para ver la disminución de productos actualize la página. 
</div>
   <div class="form-group">  
   <form name="add_name" id="add_name" action="comprar2.php" method="POST">  
      <div class="table-responsive">  
<table class="table table-bordered" id="dynamic_field">  
    <tr>  
     <td><input type="text" name="name" placeholder="No serie" class="form-control name_list" /></td>  
<td><input type="text" name="cantidad" placeholder="Cantidad" class="form-control name_list" /></td>  
<td><button type="button" name="add" id="add" class="btn btn-success">Agregar</button></td>  
    </tr>  
</table>  
<input type="button" name="submit"  class="btn btn-info" value="Realizar orden" />  
                          </div>  
     </form> 
       


       <script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name" placeholder="No serie" class="form-control name_list" /></td><td><input type="text" name="cantidad" placeholder="Cantidad" class="form-control name_list" /></td> <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"comprar2.php",  
                method:"POST",  
                data:$('#add_name').serialize(),
               data:$('#add_cantidad').serialize(),
                success:function(data)  
                {  
                    console.log(data);
                }  
           });  
      });  
 });  
 </script>-->
   
       
       <div>
        <h1>Hacer una compra rápida</h1>
       <form  action="comprar.php" METHOD="POST" name="form" class="form-inline">
       <table>
      <input type="text" class="form-control" placeholder="No. Serie"  name="id" required>
      <input type="text" class="form-control" placeholder="Cantidad"  name="cantidad" required>
             </table>   
     
      <input type="submit" class="btn btn-info"  value="Comprar" >

    </form>
           <!--FORMULARIO DE Agregar productos-->
       <h1>Agregar varios productos</h1>
    <table>
        <tr>
        <td>
     <form  action="tablaComprar.php" METHOD="POST" name="form" class="form-inline">
  
      <input type="text" class="form-control" placeholder="No. Serie"  name="id" required>
      <input type="text" class="form-control" placeholder="Cantidad"  name="cantidad" required>
    <input type="submit" class="btn btn-warning"  value="Agregar" >
    
        </form>
            </td>
            <td>
  <form method="post" action="limpiartabla.php"><input type="submit" class="btn btn-danger"  value="Limpiar registros" >
         </form>
         </td>
            </tr>
        </table>
 <?php
   
include('conexion1.php');

$query="SELECT venta.CantidadV,NombreLibro,Serie FROM proveedor INNER JOIN venta WHERE proveedor.Serie=venta.NoSerie";

           
$result=mysql_query($query)or die ("Problemas".mysql_error());
ECHO "<table class='table table-striped'><th align='center'>Nombre</th><th align='center'>Serie</th><th align='center'>Cantidad</th>";
while (($fila = mysql_fetch_array($result, MYSQLI_ASSOC)) == TRUE){
	echo "<tr>";

        ECHO " <TD  >".$fila["NombreLibro"]."</TD>";
		ECHO " <TD >".$fila["Serie"]."</TD>";
        ECHO " <TD >".$fila["CantidadV"]."</TD>";
  echo "</tr>";
    
}
                      
ECHO "</table>";
?> <form action="comprar3.php" >
        <input type="submit" class="btn btn-warning"  value="Generar" >
</form>
       </div>
  <div class="pull-right">  
 <form method="POST" action="busquedaCompra.php" onSubmit="return validarForm(this)" >

     <input  type="text" placeholder="Buscar por nombre o serie" name="palabra">

     <input type="submit" value="Buscar" name="buscar" class="btn btn-success">

 </form>
    </div>


    <form action="contadorCompras.php" METHOD="POST">
      <button  action="comprar.php" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Relizar orden de compra" HSPACE="10" VSPACE="10" onclick="test();">Realizar y generar Orden de Compra</button>
<?php
    $cont = 0;
include('conexion1.php');

$query=" SELECT * FROM proveedor";
$result=mysql_query($query)or die ("Problemas".mysql_error());
ECHO "<table class='table table-striped'><th align='center'>Serie</th><th align='center'>NombreLibro</th><th align='center'>PrecioLibro</th><th align='center'>CantidadLib</th><th align='center'>Cantidad</th><th align='center'>Selecciona</th>";
while (($fila = mysql_fetch_array($result, MYSQLI_ASSOC)) == TRUE){
	echo "<tr>";

        ECHO " <TD align='center'>".$fila["Serie"]."</TD>";
		ECHO " <TD align='center'>".$fila["NombreLibro"]."</TD>";
		ECHO " <TD align='center'>".$fila["PrecioLibro"]."</TD>";
        ECHO " <TD align='center'>".$fila["CantidadLib"]."</TD>";
         ECHO"<TD align='center'>".'<form action="contadorCompras.php" method="POST"><input type=text" class="form-control" placeholder="Cantidad a comprar" name="input_'.$cont.'" ></form>'."</TD>";
        ECHO"<TD align='center'> ".'<input type="checkbox" name="checkbox_'.$cont.'" value="'.$fila["Serie"].'">'."</TD>";
        $cont++;
          //  

  echo "</tr>";
}
ECHO "</table>";
?>


</section>
      <!--</form>-->


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
